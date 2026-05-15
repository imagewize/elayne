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
 * Multisite usage — pass --url= to target the correct subsite AND pass the
 * subsite slug as a positional argument so the script selects the right entry
 * from the nested $page_map:
 *   wp --path=web/wp --url=example.com/store/ \
 *     eval-file web/app/themes/elayne/scripts/rebuild-demo.php store
 *
 * IMPORTANT for multisite: page IDs are per-subsite blog, not global.
 * Always pass --url= so WP-CLI switches to the right blog context before
 * reading $page_map. Without it, get_template_directory() and page IDs may
 * resolve against the wrong subsite.
 *
 * Dry-run (shows what would be updated, no writes):
 *   WP_REBUILD_DRY_RUN=1 wp --path=web/wp --url=example.com/store/ \
 *     eval-file web/app/themes/elayne/scripts/rebuild-demo.php store
 * -------------------------------------------------------------------------
 *
 * CUSTOMIZE: Update the arrays below with your own page IDs and pattern paths.
 * Page IDs are per-subsite — discover them with:
 *   wp post list --post_type=page --fields=ID,post_title,post_name \
 *     --path=web/wp --url=example.com/store/
 *
 * @package Elayne
 */

// Security: never execute via a web request.
if (! defined('WP_CLI') || ! WP_CLI ) {
    exit;
}

$dry_run = getenv('WP_REBUILD_DRY_RUN') === '1';
$subsite = isset($args[0]) ? trim($args[0]) : '';

/*
 * CUSTOMIZE: Map page IDs to one or more pattern files (relative to theme root).
 * Multiple patterns are concatenated in order to build the full page content.
 *
 * Single-site — use a flat array (no subsite argument needed):
 *   $page_map = array(
 *       17 => array( 'patterns/hero-with-cta.php', 'patterns/features.php' ),
 *       20 => array( 'patterns/contact-with-form.php' ),
 *   );
 *
 * Multisite — use a nested array keyed by subsite slug, then pass the slug
 * as the first positional argument when running the script:
 *   $page_map = array(
 *       'main'  => array( 17 => array( 'patterns/hero-with-cta.php' ) ),
 *       'store' => array( 92 => array( 'patterns/woocommerce/woo-hero.php' ) ),
 *   );
 */
$page_map = array(
    // Add your page ID => pattern file mappings here.
);

// Resolve flat vs. nested map.
if (! empty($subsite) ) {
    if (! array_key_exists($subsite, $page_map) ) {
        WP_CLI::error("Unknown subsite '$subsite'. Keys in \$page_map: " . implode(', ', array_keys($page_map)));
    }
    $pages = $page_map[ $subsite ];
} else {
    $pages = $page_map;
}

if (empty($pages) ) {
    WP_CLI::error('No pages configured. Edit $page_map in scripts/rebuild-demo.php with your page IDs and pattern paths.');
}

$theme_dir = get_template_directory();

foreach ( $pages as $page_id => $pattern_files ) {
    $content = '';

    foreach ( $pattern_files as $rel_path ) {
        $file = $theme_dir . '/' . $rel_path;
        if (! file_exists($file) ) {
            WP_CLI::warning("  MISSING: $file — skipping pattern");
            continue;
        }
        ob_start();
        include $file;
        $chunk = ob_get_clean();
        if (! empty(trim($chunk)) ) {
            $content .= $chunk;
        } else {
            WP_CLI::warning("  Empty output from $rel_path");
        }
    }

    if (empty(trim($content)) ) {
        WP_CLI::warning("Post $page_id — no content captured, skipping");
        continue;
    }

    if ($dry_run ) {
        WP_CLI::log("DRY-RUN  post $page_id ← " . implode(' + ', $pattern_files));
        continue;
    }

    $result = wp_update_post(
        array(
        'ID'            => $page_id,
        'post_content'  => $content,
        'page_template' => 'default',
        ),
        true
    );

    if (is_wp_error($result) ) {
        WP_CLI::warning("Post $page_id — update failed: " . $result->get_error_message());
    } else {
        WP_CLI::success("Post $page_id ← " . implode(' + ', $pattern_files));
    }
}

/*
 * OPTIONAL: Push custom .html templates to the WP database.
 * Useful for demo-specific template variants (e.g. archive-product-store.html)
 * that should not replace the theme's base template file.
 *
 * Single-site:
 *   $templates = array(
 *       'archive-product' => 'templates/archive-product-custom.html',
 *   );
 *
 * Multisite (nested by subsite slug):
 *   $templates = array(
 *       'store' => array(
 *           'archive-product'      => 'templates/archive-product-store.html',
 *           'taxonomy-product_cat' => 'templates/taxonomy-product_cat-store.html',
 *       ),
 *   );
 */
$templates = array();

// Resolve flat vs. nested templates.
if (! empty($subsite) ) {
    $active_templates = isset($templates[ $subsite ]) ? $templates[ $subsite ] : array();
} else {
    $active_templates = $templates;
}

if (! empty($active_templates) ) {
    global $wpdb;

    foreach ( $active_templates as $template_slug => $rel_path ) {
        $file = $theme_dir . '/' . $rel_path;
        if (! file_exists($file) ) {
            WP_CLI::warning("  MISSING template: $file — skipping");
            continue;
        }

        if ($dry_run ) {
            WP_CLI::log("DRY-RUN  template $template_slug ← $rel_path");
            continue;
        }

        $content     = file_get_contents($file);
        $existing_id = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT ID FROM {$wpdb->posts}
				 WHERE post_type = 'wp_template'
				   AND post_status != 'trash'
				   AND (post_name = %s OR post_name = %s)
				 ORDER BY post_modified DESC LIMIT 1",
                $template_slug,
                get_stylesheet() . '//' . $template_slug
            )
        );

        if ($existing_id ) {
            $result = wp_update_post(
                array(
                'ID'           => (int) $existing_id,
                'post_content' => $content,
                ),
                true
            );
            if (is_wp_error($result) ) {
                WP_CLI::warning("Template $template_slug — update failed: " . $result->get_error_message());
            } else {
                wp_set_post_terms((int) $existing_id, array( get_stylesheet() ), 'wp_theme');
                WP_CLI::success("Template $template_slug updated (ID $existing_id) ← $rel_path");
            }
        } else {
            $now     = current_time('mysql');
            $now_gmt = current_time('mysql', true);
            $wpdb->insert(
                $wpdb->posts,
                array(
                'post_type'         => 'wp_template',
                'post_name'         => $template_slug,
                'post_title'        => ucwords(str_replace('-', ' ', $template_slug)),
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
            if ($new_id ) {
                wp_set_post_terms($new_id, array( get_stylesheet() ), 'wp_theme');
                WP_CLI::success("Template $template_slug created (ID $new_id) ← $rel_path");
            } else {
                WP_CLI::warning("Template $template_slug — insert failed");
            }
        }
    }
}

/*
 * OPTIONAL: Push custom template parts (header, footer, etc.) to the WP database.
 * PHP pattern files are rendered in WP context; .html files are read directly.
 *
 * Single-site:
 *   $template_parts = array(
 *       'header' => 'patterns/my-custom-header.php',
 *       'footer' => 'patterns/my-custom-footer.php',
 *   );
 *
 * Multisite (nested by subsite slug):
 *   $template_parts = array(
 *       'store' => array(
 *           'header' => 'patterns/store-header.php',
 *       ),
 *   );
 */
$template_parts = array();

// Resolve flat vs. nested template parts.
if (! empty($subsite) ) {
    $active_parts = isset($template_parts[ $subsite ]) ? $template_parts[ $subsite ] : array();
} else {
    $active_parts = $template_parts;
}

if (! empty($active_parts) ) {
    global $wpdb;

    foreach ( $active_parts as $part_slug => $rel_path ) {
        $file = $theme_dir . '/' . $rel_path;
        if (! file_exists($file) ) {
            WP_CLI::warning("  MISSING template part: $file — skipping");
            continue;
        }

        if ($dry_run ) {
            WP_CLI::log("DRY-RUN  template-part $part_slug ← $rel_path");
            continue;
        }

        if (str_ends_with($rel_path, '.php') ) {
            ob_start();
            include $file;
            $content = ob_get_clean();
        } else {
            $content = file_get_contents($file);
        }

        if (empty(trim($content)) ) {
            WP_CLI::warning("Template part $part_slug — empty output, skipping");
            continue;
        }

        $existing_id = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT ID FROM {$wpdb->posts}
				 WHERE post_type = 'wp_template_part'
				   AND post_status != 'trash'
				   AND (post_name = %s OR post_name = %s)
				 ORDER BY post_modified DESC LIMIT 1",
                $part_slug,
                get_stylesheet() . '//' . $part_slug
            )
        );

        if ($existing_id ) {
            $result = wp_update_post(
                array(
                'ID'           => (int) $existing_id,
                'post_content' => $content,
                ),
                true
            );
            if (is_wp_error($result) ) {
                WP_CLI::warning("Template part $part_slug — update failed: " . $result->get_error_message());
            } else {
                wp_set_post_terms((int) $existing_id, array( get_stylesheet() ), 'wp_theme');
                WP_CLI::success("Template part $part_slug updated (ID $existing_id) ← $rel_path");
            }
        } else {
            $now     = current_time('mysql');
            $now_gmt = current_time('mysql', true);
            $wpdb->insert(
                $wpdb->posts,
                array(
                'post_type'         => 'wp_template_part',
                'post_name'         => $part_slug,
                'post_title'        => ucwords(str_replace('-', ' ', $part_slug)),
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
            if ($new_id ) {
                wp_set_post_terms($new_id, array( get_stylesheet() ), 'wp_theme');
                wp_set_post_terms($new_id, array( 'header' === $part_slug ? 'header' : 'general' ), 'wp_template_part_area');
                WP_CLI::success("Template part $part_slug created (ID $new_id) ← $rel_path");
            } else {
                WP_CLI::warning("Template part $part_slug — insert failed");
            }
        }
    }
}

$label = $dry_run ? 'Dry-run complete' : 'Done';
WP_CLI::success("$label — demo pages rebuilt from latest patterns.");
