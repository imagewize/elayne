<?php
/**
 * Rebuild demo pages from the latest pattern PHP files.
 *
 * Renders each pattern file in the live WP context and overwrites
 * the page's post_content — identical to a fresh block-editor insert.
 *
 * SECURITY: Only executes via WP-CLI. Any direct web request is rejected.
 *
 * -------------------------------------------------------------------------
 * Single-site usage (run from your WordPress root):
 *   wp --path=web/wp eval-file web/app/themes/elayne/scripts/rebuild-demo.php
 *
 * Multisite usage — pass --url= to target the correct subsite:
 *   wp --path=web/wp --url=example.com/store/ \
 *     eval-file web/app/themes/elayne/scripts/rebuild-demo.php
 *
 * IMPORTANT for multisite: page IDs are per-subsite blog, not global.
 * Always pass --url= so WP-CLI switches to the right blog context before
 * reading $map. Without it, get_template_directory() and page IDs may
 * resolve against the wrong subsite.
 *
 * Dry-run (shows what would be updated, no writes):
 *   WP_REBUILD_DRY_RUN=1 wp --path=web/wp --url=example.com/store/ \
 *     eval-file web/app/themes/elayne/scripts/rebuild-demo.php
 * -------------------------------------------------------------------------
 *
 * CUSTOMIZE: Update $map below with your own page IDs and pattern paths.
 * Page IDs are per-subsite — discover them with:
 *   wp post list --post_type=page --fields=ID,post_title,post_name \
 *     --path=web/wp --url=example.com/store/
 */

// Security: never execute via a web request.
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
	exit;
}

$dry_run = getenv( 'WP_REBUILD_DRY_RUN' ) === '1';

// ---------------------------------------------------------------------------
// CUSTOMIZE: map page IDs to one or more pattern files (relative to theme root).
// Multiple patterns are concatenated in order to build the full page content.
//
// Example:
//   5 => array(
//       'patterns/hero-with-cta.php',
//       'patterns/two-column-feature.php',
//   ),
// ---------------------------------------------------------------------------
$map = array(
	// Add your page ID => pattern file mappings here.
);

if ( empty( $map ) ) {
	WP_CLI::error( 'No pages configured. Edit $map in scripts/rebuild-demo.php with your page IDs and pattern paths.' );
}

$theme_dir = get_template_directory();

foreach ( $map as $post_id => $pattern_files ) {
	$content = '';

	foreach ( $pattern_files as $rel_path ) {
		$file = $theme_dir . '/' . $rel_path;
		if ( ! file_exists( $file ) ) {
			WP_CLI::warning( "  MISSING: $file — skipping pattern" );
			continue;
		}
		ob_start();
		include $file;
		$chunk = ob_get_clean();
		if ( ! empty( trim( $chunk ) ) ) {
			$content .= $chunk;
		} else {
			WP_CLI::warning( "  Empty output from $rel_path" );
		}
	}

	if ( empty( trim( $content ) ) ) {
		WP_CLI::warning( "Post $post_id — no content captured, skipping" );
		continue;
	}

	if ( $dry_run ) {
		WP_CLI::log( "DRY-RUN  post $post_id ← " . implode( ' + ', $pattern_files ) );
		continue;
	}

	$result = wp_update_post(
		array(
			'ID'           => $post_id,
			'post_content' => $content,
		),
		true
	);

	if ( is_wp_error( $result ) ) {
		WP_CLI::warning( "Post $post_id — update failed: " . $result->get_error_message() );
	} else {
		WP_CLI::success( "Post $post_id ← " . implode( ' + ', $pattern_files ) );
	}
}

// ---------------------------------------------------------------------------
// OPTIONAL: Push custom .html templates to the WP database.
// Useful for demo-specific template variants (e.g. archive-product-store.html)
// that should not replace the theme's base template file.
//
// Format: template_slug => 'templates/my-template.html'
//
// Example:
//   'archive-product' => 'templates/archive-product-custom.html',
// ---------------------------------------------------------------------------
$templates = array();

if ( ! empty( $templates ) ) {
	global $wpdb;

	foreach ( $templates as $template_slug => $rel_path ) {
		$file = $theme_dir . '/' . $rel_path;
		if ( ! file_exists( $file ) ) {
			WP_CLI::warning( "  MISSING template: $file — skipping" );
			continue;
		}

		if ( $dry_run ) {
			WP_CLI::log( "DRY-RUN  template $template_slug ← $rel_path" );
			continue;
		}

		$content     = file_get_contents( $file );
		$existing_id = $wpdb->get_var( $wpdb->prepare(
			"SELECT ID FROM {$wpdb->posts}
			 WHERE post_type = 'wp_template'
			   AND post_status != 'trash'
			   AND (post_name = %s OR post_name = %s)
			 ORDER BY post_modified DESC LIMIT 1",
			$template_slug,
			get_stylesheet() . '//' . $template_slug
		) );

		if ( $existing_id ) {
			$result = wp_update_post(
				array(
					'ID'           => (int) $existing_id,
					'post_content' => $content,
				),
				true
			);
			if ( is_wp_error( $result ) ) {
				WP_CLI::warning( "Template $template_slug — update failed: " . $result->get_error_message() );
			} else {
				WP_CLI::success( "Template $template_slug updated (ID $existing_id) ← $rel_path" );
			}
		} else {
			$now     = current_time( 'mysql' );
			$now_gmt = current_time( 'mysql', true );
			$wpdb->insert(
				$wpdb->posts,
				array(
					'post_type'         => 'wp_template',
					'post_name'         => $template_slug,
					'post_title'        => ucwords( str_replace( '-', ' ', $template_slug ) ),
					'post_content'      => $content,
					'post_status'       => 'publish',
					'post_date'         => $now,
					'post_date_gmt'     => $now_gmt,
					'post_modified'     => $now,
					'post_modified_gmt' => $now_gmt,
					'post_author'       => get_current_user_id(),
				)
			);
			$new_id = $wpdb->insert_id;
			if ( $new_id ) {
				wp_set_post_terms( $new_id, array( get_stylesheet() ), 'wp_theme' );
				WP_CLI::success( "Template $template_slug created (ID $new_id) ← $rel_path" );
			} else {
				WP_CLI::warning( "Template $template_slug — insert failed" );
			}
		}
	}
}

$label = $dry_run ? 'Dry-run complete' : 'Done';
WP_CLI::success( "$label — demo pages rebuilt from latest patterns." );
