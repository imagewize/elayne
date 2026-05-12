<?php
/**
 * Elayne functions and definitions
 *
 * @package Elayne
 * @since   0.1.0
 */

namespace Elayne;

/**
 * Set up theme defaults and register various WordPress features.
 */
function elayne_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'elayne', get_template_directory() . '/languages' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/css/editor.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\elayne_setup' );

/**
 * Register custom template part areas.
 *
 * @param array $areas Existing template part areas.
 * @return array Modified template part areas.
 */
function elayne_template_part_areas( $areas ) {
	$areas[] = array(
		'area'        => 'menu',
		'area_tag'    => 'nav',
		'label'       => __( 'Menu', 'elayne' ),
		'description' => __( 'The Menu template part area is used for navigation menus.', 'elayne' ),
		'icon'        => 'navigation',
	);

	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'aside',
		'label'       => __( 'Sidebar', 'elayne' ),
		'description' => __( 'The Sidebar template part area is used for sidebar content.', 'elayne' ),
		'icon'        => 'layout',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\elayne_template_part_areas' );

/**
 * Enqueue styles.
 */
function elayne_enqueue_styles() {
	wp_enqueue_style(
		'elayne-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\elayne_enqueue_styles' );

/**
 * Enqueue WooCommerce styles.
 */
function elayne_enqueue_woocommerce_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		// Main WooCommerce CSS.
		if ( file_exists( get_template_directory() . '/assets/styles/woocommerce.css' ) ) {
			wp_enqueue_style(
				'elayne-woocommerce-style',
				get_template_directory_uri() . '/assets/styles/woocommerce.css',
				array(),
				(string) filemtime( get_template_directory() . '/assets/styles/woocommerce.css' )
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\elayne_enqueue_woocommerce_styles' );

/**
 * Enqueue single product page script.
 */
function elayne_enqueue_product_page_scripts() {
	if ( ! function_exists( 'is_product' ) || ! is_product() ) {
		return;
	}
	wp_enqueue_script(
		'elayne-woocommerce-product-page',
		get_template_directory_uri() . '/assets/js/woocommerce-product-page.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\elayne_enqueue_product_page_scripts' );

/**
 * Enqueue category filter drawer script on WooCommerce taxonomy archives.
 */
function elayne_enqueue_category_filter_drawer() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}
	// Load on product category archives, product tag archives, and any product taxonomy.
	if ( is_product_category() || is_product_tag() || is_tax( 'product_cat' ) || is_tax( 'product_tag' ) ) {
		wp_enqueue_script(
			'elayne-category-filter-drawer',
			get_template_directory_uri() . '/assets/js/category-filter-drawer.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\elayne_enqueue_category_filter_drawer' );

// Change sale badge label to "Best Seller" on the store.
add_filter(
	'woocommerce_sale_flash',
	function () {
		return '<span class="onsale">' . esc_html__( 'Best Seller', 'elayne' ) . '</span>';
	}
);

// Note: WP 6.9 emits a console warning "woocommerce-blocktheme-css was added to the
// iframe incorrectly" when WooCommerce enqueues this stylesheet outside of block hooks.
// WooCommerce fixed this in core via PR #62048 (merged 2025-11-21, shipped in 10.4.0).
// If the warning reappears it is likely a different code path or a plugin conflict —
// WC 10.4.0+ already uses enqueue_block_assets, so no theme workaround is needed.

/**
 * Register pattern categories.
 *
 * Uses register_block_pattern_category() — not the block_categories_all filter.
 * block_categories_all registers categories in the block inserter (for custom
 * registered block types). Elayne is a pattern-only theme with no custom blocks,
 * so those categories would never appear in the inserter. Pattern categories live
 * in the patterns browser and are the correct API here.
 */
function elayne_pattern_categories() {
	$block_pattern_categories = array(
		'elayne/hero'           => array( 'label' => __( 'Hero', 'elayne' ) ),
		'elayne/banner'         => array( 'label' => __( 'Banners', 'elayne' ) ),
		'elayne/features'       => array( 'label' => __( 'Features', 'elayne' ) ),
		'elayne/call-to-action' => array( 'label' => __( 'Call To Action', 'elayne' ) ),
		'elayne/testimonial'    => array( 'label' => __( 'Testimonials', 'elayne' ) ),
		'elayne/team'           => array( 'label' => __( 'Team', 'elayne' ) ),
		'elayne/statistics'     => array( 'label' => __( 'Statistics', 'elayne' ) ),
		'elayne/contact'        => array( 'label' => __( 'Contact', 'elayne' ) ),
		'elayne/card'           => array( 'label' => __( 'Cards', 'elayne' ) ),
		'elayne/card-simple'    => array( 'label' => __( 'Cards: Simple', 'elayne' ) ),
		'elayne/card-extended'  => array( 'label' => __( 'Cards: Extended', 'elayne' ) ),
		'elayne/card-profiles'  => array( 'label' => __( 'Cards: Profiles', 'elayne' ) ),
		'elayne/events'         => array( 'label' => __( 'Events', 'elayne' ) ),
		'elayne/portfolio'      => array( 'label' => __( 'Portfolio', 'elayne' ) ),
		'elayne/pages'          => array( 'label' => __( 'Pages', 'elayne' ) ),
		'elayne/posts'          => array( 'label' => __( 'Posts', 'elayne' ) ),
		'elayne/spa'            => array( 'label' => __( 'Spa & Wellness', 'elayne' ) ),
		'elayne/legal'          => array( 'label' => __( 'Legal Services', 'elayne' ) ),
		'elayne/plumbing'       => array( 'label' => __( 'Plumbing & Trades', 'elayne' ) ),
		'elayne/fintech'        => array( 'label' => __( 'Fintech & Technology', 'elayne' ) ),
		'elayne/salon'          => array( 'label' => __( 'Beauty & Salon', 'elayne' ) ),
		'elayne/retail'         => array( 'label' => __( 'Retail & E-commerce', 'elayne' ) ),
		'elayne/food-beverage'  => array( 'label' => __( 'Food & Beverage', 'elayne' ) ),
		'elayne/woocommerce'    => array( 'label' => __( 'Store', 'elayne' ) ),
		'elayne/product'        => array( 'label' => __( 'Products', 'elayne' ) ),
		'elayne/grid'           => array( 'label' => __( 'Grids', 'elayne' ) ),
		'elayne/responsive'     => array( 'label' => __( 'Responsive', 'elayne' ) ),
	);

	foreach ( $block_pattern_categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', __NAMESPACE__ . '\elayne_pattern_categories', 9 );

/**
 * Add custom image sizes for professional layouts.
 */
function elayne_custom_image_sizes() {
	// Portrait image sizes for grid/archive layouts.
	add_image_size( 'elayne-portrait-xs', 350, 525, true );     // 2:3 aspect ratio (extra small).
	add_image_size( 'elayne-portrait-small', 380, 570, true );  // 2:3 aspect ratio.
	add_image_size( 'elayne-portrait-medium', 380, 507, true ); // 3:4 aspect ratio.
	add_image_size( 'elayne-portrait-large', 380, 475, true );  // 4:5 aspect ratio.

	// Landscape image sizes for grid/archive layouts.
	add_image_size( 'elayne-landscape-small', 400, 225, true ); // 16:9 aspect ratio.

	// Landscape hero image for single post/page templates.
	add_image_size( 'elayne-single-hero', 700, 400, true );     // 16:9-ish.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\elayne_custom_image_sizes' );

/**
 * Load custom block styles only when the block is used.
 */
function elayne_enqueue_custom_block_styles() {
	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	if ( ! $files ) {
		return;
	}

	foreach ( $files as $file ) {
		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "elayne-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\elayne_enqueue_custom_block_styles' );

/**
 * Register CSS effect block styles.
 */
function elayne_register_effect_block_styles() {
	$block_styles = array(
		'core/button'    => array(
			'arrow-slide'    => __( 'Arrow Slide', 'elayne' ),
			'gradient-shift' => __( 'Gradient Shift', 'elayne' ),
			'shimmer'        => __( 'Shimmer', 'elayne' ),
			'glow'           => __( 'Glow', 'elayne' ),
			'border-draw'    => __( 'Border Draw', 'elayne' ),
			'slide-up'       => __( 'Slide Up', 'elayne' ),
		),
		'core/group'     => array(
			'elevate-hover' => __( 'Elevate on Hover', 'elayne' ),
			'glow-border'   => __( 'Glow Border', 'elayne' ),
			'image-zoom'    => __( 'Image Zoom', 'elayne' ),
			'tilt-card'     => __( 'Tilt Card', 'elayne' ),
			'scale-hover'   => __( 'Scale Hover', 'elayne' ),
			'border-pulse'  => __( 'Border Pulse', 'elayne' ),
			'slide-border'  => __( 'Slide Border', 'elayne' ),
		),
		'core/image'     => array(
			'zoom-hover'       => __( 'Zoom Hover', 'elayne' ),
			'grayscale-hover'  => __( 'Grayscale Hover', 'elayne' ),
			'rotate-icon'      => __( 'Rotate Icon', 'elayne' ),
			'blur-hover'       => __( 'Blur Hover', 'elayne' ),
			'brightness-hover' => __( 'Brightness Hover', 'elayne' ),
			'sepia-hover'      => __( 'Sepia Hover', 'elayne' ),
			'lift-shadow'      => __( 'Lift Shadow', 'elayne' ),
			'border-reveal'    => __( 'Border Reveal', 'elayne' ),
			'tilt-3d'          => __( 'Tilt 3D', 'elayne' ),
		),
		'core/paragraph' => array(
			'eyebrow'                   => __( 'Eyebrow', 'elayne' ),
			'animated-underline'        => __( 'Animated Underline', 'elayne' ),
			'animated-underline-center' => __( 'Animated Underline Center', 'elayne' ),
			'highlight-fade'            => __( 'Highlight Fade', 'elayne' ),
			'link-hover-shift'          => __( 'Link Hover Shift', 'elayne' ),
			'fade-in'                   => __( 'Fade In', 'elayne' ),
		),
		'core/heading'   => array(
			'gradient-text'          => __( 'Gradient Text', 'elayne' ),
			'gradient-text-animated' => __( 'Gradient Text Animated', 'elayne' ),
			'underline-slide'        => __( 'Underline Slide', 'elayne' ),
			'logo-link'              => __( 'Logo Link', 'elayne' ),
		),
		'core/list'      => array(
			'animated-markers' => __( 'Animated Markers', 'elayne' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\elayne_register_effect_block_styles' );

/**
 * Register plumbing block style variations and enqueue their CSS on demand.
 *
 * CSS files live in assets/styles/block-styles/ and load only on pages where
 * the corresponding block style is used — not globally.
 */
function elayne_register_plumbing_block_styles() {
	$styles = array(
		'core/group'     => array(
			'plumbing-service-card'  => __( 'Plumbing Service Card', 'elayne' ),
			'plumbing-featured-card' => __( 'Plumbing Featured Card', 'elayne' ),
			'plumbing-badge'         => __( 'Plumbing Badge', 'elayne' ),
			'plumbing-years-badge'   => __( 'Plumbing Years Badge', 'elayne' ),
			'plumbing-stat-block'    => __( 'Plumbing Stat Block', 'elayne' ),
			'plumbing-check-icon'    => __( 'Plumbing Check Icon', 'elayne' ),
			'plumbing-why-item'      => __( 'Plumbing Why Item', 'elayne' ),
			'plumbing-avatar'        => __( 'Plumbing Avatar', 'elayne' ),
			'plumbing-contact-icon'  => __( 'Plumbing Contact Icon', 'elayne' ),
			'plumbing-cta-call-pill' => __( 'Plumbing CTA Call Pill', 'elayne' ),
			'plumbing-cta-actions'   => __( 'Plumbing CTA Actions', 'elayne' ),
		),
		'core/paragraph' => array(
			'plumbing-section-label' => __( 'Plumbing Section Label', 'elayne' ),
		),
		'core/button'    => array(
			'plumbing-call-btn' => __( 'Plumbing Call Button', 'elayne' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);

			$css_file = "assets/styles/block-styles/{$name}.css";
			if ( file_exists( get_theme_file_path( $css_file ) ) ) {
				wp_enqueue_block_style(
					$block,
					array(
						'handle' => "elayne-{$name}",
						'src'    => get_theme_file_uri( $css_file ),
						'path'   => get_theme_file_path( $css_file ),
					)
				);
			}
		}
	}

	// CSS for plumbing header components (topbar phone pill, nav CTA pill).
	// Uses wp_enqueue_block_style() rather than plumbing-variation.css because
	// it injects into the editor iframe after the editor's own stylesheet, so
	// unscoped selectors win without needing .editor-styles-wrapper hacks.
	// Note: loads on every page (core/group is ubiquitous) regardless of the
	// active style variation — selectors are harmlessly inert on non-plumbing sites.
	$header_components = array( 'plumbing-topbar-phone', 'plumbing-header-cta' );
	foreach ( $header_components as $name ) {
		$css_file = "assets/styles/block-styles/{$name}.css";
		if ( file_exists( get_theme_file_path( $css_file ) ) ) {
			wp_enqueue_block_style(
				'core/group',
				array(
					'handle' => "elayne-{$name}",
					'src'    => get_theme_file_uri( $css_file ),
					'path'   => get_theme_file_path( $css_file ),
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\elayne_register_plumbing_block_styles' );

/**
 * Register nail salon block style variations and enqueue their CSS on demand.
 *
 * CSS files live in assets/styles/block-styles/ and load only on pages where
 * the corresponding block style is used — not globally.
 */
function elayne_register_nail_salon_block_styles() {
	$styles = array(
		'core/group'     => array(
			'nail-salon-service-card'  => __( 'Nail Salon Service Card', 'elayne' ),
			'nail-salon-featured-card' => __( 'Nail Salon Featured Card', 'elayne' ),
			'nail-salon-badge'         => __( 'Nail Salon Badge', 'elayne' ),
			'nail-salon-years-badge'   => __( 'Nail Salon Years Badge', 'elayne' ),
			'nail-salon-stat-block'    => __( 'Nail Salon Stat Block', 'elayne' ),
			'nail-salon-check-icon'    => __( 'Nail Salon Check Icon', 'elayne' ),
			'nail-salon-why-item'      => __( 'Nail Salon Why Item', 'elayne' ),
			'nail-salon-avatar'        => __( 'Nail Salon Avatar', 'elayne' ),
			'nail-salon-contact-icon'  => __( 'Nail Salon Contact Icon', 'elayne' ),
		),
		'core/paragraph' => array(
			'nail-salon-section-label' => __( 'Nail Salon Section Label', 'elayne' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);

			$css_file = "assets/styles/block-styles/{$name}.css";
			if ( file_exists( get_theme_file_path( $css_file ) ) ) {
				wp_enqueue_block_style(
					$block,
					array(
						'handle' => "elayne-{$name}",
						'src'    => get_theme_file_uri( $css_file ),
						'path'   => get_theme_file_path( $css_file ),
					)
				);
			}
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\elayne_register_nail_salon_block_styles' );

/**
 * Enqueue the nail salon style variation stylesheet.
 *
 * Uses enqueue_block_assets so the file loads in both the frontend and the
 * FSE editor iframe. Only enqueued when the nail-salon variation is active.
 * Styles are scoped under `.style-variation-nail-salon` so there is zero
 * impact on other style variations or pages.
 */
function elayne_enqueue_nail_salon_variation_styles(): void {
	$custom = wp_get_global_settings( array( 'custom' ) );
	if ( empty( $custom['styleVariation'] ) || 'nail-salon' !== $custom['styleVariation'] ) {
		return;
	}
	wp_enqueue_style(
		'elayne-nail-salon-variation',
		get_template_directory_uri() . '/assets/styles/nail-salon-variation.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\elayne_enqueue_nail_salon_variation_styles' );

/**
 * Add a body class matching the active style variation slug.
 *
 * Reads `settings.custom.styleVariation` from the merged theme.json data
 * (base theme.json + active variation JSON), so when plumbing.json is active
 * the body gets class `style-variation-plumbing`.
 *
 * @param array $classes Existing body classes.
 * @return array Modified body classes.
 */
function elayne_style_variation_body_class( array $classes ): array {
	$custom = wp_get_global_settings( array( 'custom' ) );
	if ( ! empty( $custom['styleVariation'] ) ) {
		$classes[] = 'style-variation-' . sanitize_html_class( $custom['styleVariation'] );
	}
	return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\elayne_style_variation_body_class' );

/**
 * Enqueue the plumbing style variation stylesheet.
 *
 * Uses enqueue_block_assets so the file loads in both the frontend and the
 * FSE editor iframe. Only enqueued when the plumbing variation is active.
 * Styles are scoped under `.style-variation-plumbing` (frontend/iframe) and
 * `.editor-styles-wrapper` (editor-only grid fixes), so there is zero impact
 * on other style variations or pages.
 */
function elayne_enqueue_plumbing_variation_styles(): void {
	$custom = wp_get_global_settings( array( 'custom' ) );
	if ( empty( $custom['styleVariation'] ) || 'plumbing' !== $custom['styleVariation'] ) {
		return;
	}
	wp_enqueue_style(
		'elayne-plumbing-variation',
		get_template_directory_uri() . '/assets/styles/plumbing-variation.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\elayne_enqueue_plumbing_variation_styles' );

/**
 * Render ticker content for elayne-ticker group block.
 *
 * Uses render_block filter to inject PHP-generated marquee content
 * into the group block with elayne-ticker className.
 *
 * @param string $block_content The block content.
 * @param array  $block         The block attributes.
 * @return string Modified block content with ticker HTML.
 */
function elayne_render_ticker_block( $block_content, $block ) {
	// Only process core/group blocks with elayne-ticker className.
	if ( 'core/group' !== $block['blockName'] || empty( $block['attrs']['className'] ) || false === strpos( $block['attrs']['className'], 'elayne-ticker' ) ) {
		return $block_content;
	}

	// Build ticker items — live WC product categories with hardcoded fallback.
	$terms = taxonomy_exists( 'product_cat' ) ? get_terms(
		array(
			'taxonomy'   => 'product_cat',
			'hide_empty' => true,
			'number'     => 12,
			'orderby'    => 'count',
			'order'      => 'DESC',
		)
	) : array();

	if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
		$ticker_items = array_map(
			function ( $term ) {
				return esc_html( $term->name );
			},
			$terms
		);
	} else {
		$ticker_items = array(
			esc_html__( 'Premium Leather Goods', 'elayne' ),
			esc_html__( 'Legal Stationery', 'elayne' ),
			esc_html__( 'Executive Accessories', 'elayne' ),
			esc_html__( 'Bespoke Briefcases', 'elayne' ),
			esc_html__( 'Fine Writing Instruments', 'elayne' ),
			esc_html__( 'Corporate Gifting', 'elayne' ),
		);
	}

	$ticker_html = '<strong>' . implode( '</strong><span aria-hidden="true">✦</span><strong>', $ticker_items ) . '</strong>';

	// Wrap in ticker track with duplicated content for seamless scrolling.
	$ticker_track = sprintf(
		'<div class="elayne-ticker__track" role="marquee" aria-label="%s"><span class="elayne-ticker__item">%s &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="elayne-ticker__item" aria-hidden="true">%s &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>',
		esc_attr__( 'Product categories', 'elayne' ),
		$ticker_html,
		$ticker_html
	);

	// Insert ticker track before the closing div tag.
	$block_content = str_replace( '</div>', $ticker_track . '</div>', $block_content );

	return $block_content;
}
add_filter( 'render_block', __NAMESPACE__ . '\elayne_render_ticker_block', 10, 2 );

/**
 * Register WooCommerce block style variations and enqueue their CSS on demand.
 *
 * CSS files live in assets/styles/block-styles/ and load only on pages where
 * the corresponding block style is used — not globally.
 */
function elayne_register_woocommerce_block_styles() {
	$styles = array(
		'core/group'                  => array(
			'elayne-ticker'              => __( 'Store Ticker', 'elayne' ),
			'elayne-avatar-circle'       => __( 'Avatar Circle', 'elayne' ),
			'elayne-woo-categories-grid' => __( 'Categories Grid', 'elayne' ),
			'elayne-category-hero'       => __( 'Category Hero', 'elayne' ),
			'elayne-category-toolbar'    => __( 'Category Toolbar', 'elayne' ),
			'elayne-category-products'   => __( 'Category Products', 'elayne' ),
			'elayne-category-meta-bar'   => __( 'Category Meta Bar', 'elayne' ),
		),
		'core/paragraph'              => array(
			'elayne-woo-our-story-watermark' => __( 'Our Story Watermark', 'elayne' ),
		),
		'core/search'                 => array(
			'elayne-woo-newsletter-search' => __( 'Newsletter Search', 'elayne' ),
		),
		'woocommerce/product-filters' => array(
			'elayne-shop-filters-sidebar' => __( 'Shop Filters Sidebar', 'elayne' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);

			$css_file = "assets/styles/block-styles/{$name}.css";
			if ( file_exists( get_theme_file_path( $css_file ) ) ) {
				wp_enqueue_block_style(
					$block,
					array(
						'handle' => "elayne-{$name}",
						'src'    => get_theme_file_uri( $css_file ),
						'path'   => get_theme_file_path( $css_file ),
					)
				);
			}
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\elayne_register_woocommerce_block_styles' );

/**
 * Register dynamic server-side blocks for the product accordion tabs.
 */
function elayne_register_product_dynamic_blocks(): void {
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	register_block_type(
		'elayne/product-attributes-table',
		array(
			'uses_context'    => array( 'postId', 'postType' ),
			'render_callback' => function ( array $_attrs, string $_content, \WP_Block $block ): string {
				if ( ! function_exists( 'wc_get_product' ) ) {
					return '';
				}
				$product_id = $block->context['postId'] ?? get_the_ID();
				$product    = wc_get_product( $product_id );
				if ( ! $product ) {
					return '';
				}
				$product_attributes = $product->get_attributes();
				$rows               = '';
				foreach ( $product_attributes as $attribute ) {
					if ( ! $attribute->get_visible() ) {
						continue;
					}
					$name = wc_attribute_label( $attribute->get_name() );
					if ( $attribute->is_taxonomy() ) {
						$terms  = wc_get_product_terms( $product_id, $attribute->get_name(), array( 'fields' => 'names' ) );
						$values = implode( ', ', $terms );
					} else {
						$values = implode( ', ', $attribute->get_options() );
					}
					if ( ! $values ) {
						continue;
					}
					$rows .= '<tr><td>' . esc_html( $name ) . '</td><td>' . esc_html( $values ) . '</td></tr>';
				}
				if ( ! $rows ) {
					return '';
				}
				return '<figure class="wp-block-table elayne-spec-table" style="margin-top:0;margin-bottom:0"><table><tbody>' . $rows . '</tbody></table></figure>';
			},
		)
	);

	register_block_type(
		'elayne/shipping-returns-content',
		array(
			'render_callback' => function (): string {
				$fallback = '<p class="has-main-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300;line-height:1.8">'
					. esc_html__( 'Orders dispatched within 3–5 business days. Complimentary shipping on orders over $250. Standard items may be returned within 30 days in original condition.', 'elayne' )
					. '</p>';
				$page = get_page_by_path( 'shipping-returns' );
				if ( ! $page || 'publish' !== $page->post_status ) {
					return $fallback;
				}
				return apply_filters( 'the_content', $page->post_content );
			},
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\elayne_register_product_dynamic_blocks' );

/**
 * Include block extensions.
 */
require_once get_template_directory() . '/inc/block-extensions.php';
