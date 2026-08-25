<?php
/**
 * Full-screen search overlay.
 *
 * The `elayne/header-double-bar` pattern places a trigger button in its top bar.
 * Clicking it opens a full-screen search overlay rendered in the footer.
 *
 * Previously this was `aludra/search-overlay-trigger`, which made the pattern
 * unusable without the Aludra plugin installed. The behaviour now lives in the
 * theme, with three changes over the block it replaces: the trigger is a real
 * `<button>` rather than a `<figure>` (so it is keyboard-reachable), the overlay
 * markup is rendered in PHP rather than assembled from a JavaScript string (so
 * its strings are translatable), and the script only loads on responses that
 * actually contain a trigger.
 *
 * @package Elayne
 * @since   4.9.2
 */

namespace Elayne;

/**
 * Whether a search overlay trigger has been rendered on this response.
 *
 * @var bool
 */
$GLOBALS['elayne_search_overlay_needed'] = false;

/**
 * Register the overlay script without enqueueing it.
 *
 * The trigger lives inside a header pattern, so it is present on every page of
 * some sites and no page of others. Rather than guessing, the script is
 * registered here and enqueued from `render_block()` only when a trigger is
 * actually rendered — see `elayne_detect_search_overlay_trigger()`.
 */
function elayne_register_search_overlay_script() {
	wp_register_script(
		'elayne-search-overlay',
		get_template_directory_uri() . '/assets/js/search-overlay.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\elayne_register_search_overlay_script' );

/**
 * Enqueue the overlay script when a trigger is rendered.
 *
 * Block rendering happens before `wp_footer`, so a script registered with
 * `$in_footer = true` still prints correctly when enqueued from here. Only
 * `core/html` blocks are inspected — the trigger markup is raw HTML — which
 * keeps this off the hot path for every other block on the page.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $block         Parsed block.
 * @return string Unmodified block markup.
 */
function elayne_detect_search_overlay_trigger( $block_content, $block ) {
	if ( isset( $block['blockName'] ) && 'core/html' === $block['blockName']
		&& false !== strpos( $block_content, 'elayne-search-overlay-trigger' ) ) {
		$GLOBALS['elayne_search_overlay_needed'] = true;
		wp_enqueue_script( 'elayne-search-overlay' );
	}

	return $block_content;
}
add_filter( 'render_block', __NAMESPACE__ . '\elayne_detect_search_overlay_trigger', 10, 2 );

/**
 * Render the overlay in the footer.
 *
 * Printed only when a trigger was rendered, so pages and sites that do not use
 * the pattern carry no extra markup. The form works as an ordinary search form;
 * the script only shows and hides its container.
 */
function elayne_render_search_overlay() {
	if ( empty( $GLOBALS['elayne_search_overlay_needed'] ) ) {
		return;
	}
	?>
	<div id="elayne-search-overlay" class="elayne-search-overlay" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Search', 'elayne' ); ?>" hidden>
		<div class="elayne-search-overlay__backdrop" data-elayne-search-close></div>
		<div class="elayne-search-overlay__content">
			<button type="button" class="elayne-search-overlay__close" data-elayne-search-close aria-label="<?php esc_attr_e( 'Close search', 'elayne' ); ?>">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
					<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				</svg>
			</button>
			<form role="search" method="get" class="elayne-search-overlay__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label for="elayne-search-overlay-field" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'elayne' ); ?></label>
				<input
					type="search"
					id="elayne-search-overlay-field"
					class="elayne-search-overlay__field"
					name="s"
					value="<?php echo esc_attr( get_search_query() ); ?>"
					placeholder="<?php esc_attr_e( 'Search…', 'elayne' ); ?>"
					required
				/>
				<button type="submit" class="elayne-search-overlay__submit">
					<span class="screen-reader-text"><?php esc_html_e( 'Search', 'elayne' ); ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
						<path d="M20.71 19.29l-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z"/>
					</svg>
				</button>
			</form>
		</div>
	</div>
	<?php
}
add_action( 'wp_footer', __NAMESPACE__ . '\elayne_render_search_overlay' );
