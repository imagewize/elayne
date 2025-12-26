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

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\elayne_setup' );

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
 * Enqueue navigation frontend script for clickable parent functionality.
 */
function elayne_enqueue_navigation_frontend_script() {
	$js_file_path = get_theme_file_path( '/assets/js/navigation-frontend.js' );
	$js_file_url  = get_theme_file_uri( '/assets/js/navigation-frontend.js' );

	if ( ! file_exists( $js_file_path ) ) {
		return;
	}

	wp_enqueue_script(
		'elayne-navigation-frontend',
		$js_file_url,
		array(), // No dependencies needed.
		filemtime( $js_file_path ),
		true     // Load in footer.
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\elayne_enqueue_navigation_frontend_script' );

/**
 * Register pattern categories.
 */
function elayne_pattern_categories() {
	$block_pattern_categories = array(
		'elayne/hero'           => array( 'label' => __( 'Hero', 'elayne' ) ),
		'elayne/features'       => array( 'label' => __( 'Features', 'elayne' ) ),
		'elayne/call-to-action' => array( 'label' => __( 'Call To Action', 'elayne' ) ),
		'elayne/testimonial'    => array( 'label' => __( 'Testimonials', 'elayne' ) ),
		'elayne/team'           => array( 'label' => __( 'Team', 'elayne' ) ),
		'elayne/statistics'     => array( 'label' => __( 'Statistics', 'elayne' ) ),
		'elayne/contact'        => array( 'label' => __( 'Contact', 'elayne' ) ),
		'elayne/card'           => array( 'label' => __( 'Cards', 'elayne' ) ),
		'elayne/events'         => array( 'label' => __( 'Events', 'elayne' ) ),
		'elayne/portfolio'      => array( 'label' => __( 'Portfolio', 'elayne' ) ),
		'elayne/pages'          => array( 'label' => __( 'Pages', 'elayne' ) ),
		'elayne/posts'          => array( 'label' => __( 'Posts', 'elayne' ) ),
		'elayne/spa'            => array( 'label' => __( 'Spa & Wellness', 'elayne' ) ),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
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
 * Include block extensions.
 */
require_once get_template_directory() . '/inc/block-extensions.php';
