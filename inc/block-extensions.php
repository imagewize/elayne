<?php
/**
 * Block Extensions
 *
 * Extend core blocks with additional functionality.
 *
 * @package Elayne
 */

namespace Elayne;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue block extension assets.
 */
function elayne_enqueue_block_extensions() {
	// Make sure the directory exists.
	$js_path = get_theme_file_path( '/assets/js/block-extensions' );
	if ( ! file_exists( $js_path ) ) {
		wp_mkdir_p( $js_path );
	}

	// Post Excerpt Extension.
	$js_file_path = $js_path . '/post-excerpt.js';
	$asset_file   = get_theme_file_uri( '/assets/js/block-extensions/post-excerpt.js' );

	// Generate a version number based on file modification time or use theme version.
	$asset_version = file_exists( $js_file_path )
		? filemtime( $js_file_path )
		: wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'elayne-post-excerpt-extension',
		$asset_file,
		array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-block-editor', 'wp-compose', 'wp-hooks', 'wp-i18n' ),
		$asset_version,
		true
	);

	// Register custom attributes using proper JavaScript hooks.
	wp_add_inline_script(
		'elayne-post-excerpt-extension',
		'wp.domReady(function() {
            wp.hooks.addFilter(
                "blocks.registerBlockType",
                "elayne/post-excerpt-attributes",
                function(settings, name) {
                    if (name !== "core/post-excerpt") {
                        return settings;
                    }

                    settings.attributes = Object.assign({}, settings.attributes, {
                        linkToPost: {
                            type: "boolean",
                            default: false
                        },
                        underlineLink: {
                            type: "boolean",
                            default: true
                        }
                    });

                    return settings;
                }
            );
        });',
		'after'
	);

	// Navigation Extension.
	$nav_js_file_path = $js_path . '/navigation.js';
	$nav_asset_file   = get_theme_file_uri( '/assets/js/block-extensions/navigation.js' );

	$nav_asset_version = file_exists( $nav_js_file_path )
		? filemtime( $nav_js_file_path )
		: wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'elayne-navigation-extension',
		$nav_asset_file,
		array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-block-editor', 'wp-compose', 'wp-hooks', 'wp-i18n' ),
		$nav_asset_version,
		true
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\elayne_enqueue_block_extensions' );

/**
 * Filter the post excerpt block output to add link functionality.
 *
 * @param string $block_content The block content.
 * @param array  $block         The block array.
 * @return string Modified block content.
 */
function elayne_filter_post_excerpt_block_output( $block_content, $block ) {
	if ( ! is_array( $block ) || 'core/post-excerpt' !== $block['blockName'] ) {
		return $block_content;
	}

	// Check if we have our custom attributes.
	$attributes   = $block['attrs'] ?? array();
	$link_to_post = $attributes['linkToPost'] ?? false;

	if ( ! $link_to_post ) {
		return $block_content;
	}

	// Get the current post ID in the query.
	$post_id = get_the_ID();
	if ( ! $post_id ) {
		return $block_content;
	}

	$post_url        = get_permalink( $post_id );
	$has_underline   = isset( $attributes['underlineLink'] ) && $attributes['underlineLink'];
	$underline_class = $has_underline ? '' : ' no-underline-link';

	// Find the excerpt text within p tags and wrap it in a link.
	if ( preg_match( '/<p.*?>(.*?)<\/p>/s', $block_content, $matches ) ) {
		$paragraph_content     = $matches[1];
		$new_paragraph_content = '<a href="' . esc_url( $post_url ) . '" class="excerpt-link' . esc_attr( $underline_class ) . '">' . $paragraph_content . '</a>';
		$block_content         = str_replace( $paragraph_content, $new_paragraph_content, $block_content );
	}

	return $block_content;
}
add_filter( 'render_block', __NAMESPACE__ . '\\elayne_filter_post_excerpt_block_output', 10, 2 );

/**
 * Add custom styles for excerpt links.
 */
function elayne_excerpt_link_styles() {
	?>
	<style>
		.excerpt-link.no-underline-link {
			text-decoration: none;
		}

		/* Editor-specific styles */
		.editor-styles-wrapper .elayne-linked-excerpt.no-underline {
			text-decoration: none;
		}
		.editor-styles-wrapper .elayne-linked-excerpt {
			color: var(--wp--preset--color--primary);
		}
	</style>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\\elayne_excerpt_link_styles' );
add_action( 'admin_head', __NAMESPACE__ . '\\elayne_excerpt_link_styles' );

/**
 * Filter the navigation block output to add extension classes and attributes.
 *
 * @param string $block_content The block content.
 * @param array  $block         The block array.
 * @return string Modified block content.
 */
function elayne_filter_navigation_block_output( $block_content, $block ) {
	if ( ! is_array( $block ) || 'core/navigation' !== $block['blockName'] ) {
		return $block_content;
	}

	$attributes            = $block['attrs'] ?? array();
	$has_clickable_parents = $attributes['hasClickableParents'] ?? false;
	$has_improved_chevrons = $attributes['hasImprovedChevrons'] ?? false;
	$dropdown_spacing      = $attributes['dropdownSpacing'] ?? 16;

	// Add CSS classes to the nav element.
	if ( $has_clickable_parents ) {
		$block_content = elayne_add_css_class_to_nav( $block_content, 'has-clickable-parents' );
	}

	if ( $has_improved_chevrons ) {
		$block_content = elayne_add_css_class_to_nav( $block_content, 'has-improved-chevrons' );
	}

	// Add CSS custom property for dropdown spacing.
	$block_content = elayne_add_nav_inline_style( $block_content, '--nav-dropdown-spacing', $dropdown_spacing . 'px' );

	return $block_content;
}
add_filter( 'render_block', __NAMESPACE__ . '\\elayne_filter_navigation_block_output', 10, 2 );

/**
 * Helper function to add CSS class to navigation block.
 *
 * @param string $block_content The block content.
 * @param string $class_name    The class name to add.
 * @return string Modified block content.
 */
function elayne_add_css_class_to_nav( $block_content, $class_name ) {
	$block_content = preg_replace(
		'/<nav\s+class="([^"]*)"/',
		'<nav class="$1 ' . esc_attr( $class_name ) . '"',
		$block_content,
		1
	);
	return $block_content;
}

/**
 * Helper function to add inline style to navigation block.
 *
 * @param string $block_content The block content.
 * @param string $property      The CSS property name.
 * @param string $value         The CSS property value.
 * @return string Modified block content.
 */
function elayne_add_nav_inline_style( $block_content, $property, $value ) {
	// Check if style attribute already exists.
	if ( preg_match( '/<nav\s+[^>]*style="([^"]*)"/', $block_content, $matches ) ) {
		// Append to existing style.
		$existing_style = $matches[1];
		$new_style      = $existing_style . esc_attr( $property ) . ':' . esc_attr( $value ) . ';';
		$block_content  = preg_replace(
			'/<nav\s+([^>]*)style="[^"]*"/',
			'<nav $1style="' . $new_style . '"',
			$block_content,
			1
		);
	} else {
		// Add new style attribute.
		$block_content = preg_replace(
			'/<nav\s+/',
			'<nav style="' . esc_attr( $property ) . ':' . esc_attr( $value ) . ';" ',
			$block_content,
			1
		);
	}
	return $block_content;
}

/**
 * Filter navigation submenu blocks to add parent URL data attribute.
 *
 * @param string $block_content The block content.
 * @param array  $block         The block array.
 * @return string Modified block content.
 */
function elayne_filter_navigation_submenu_output( $block_content, $block ) {
	if ( ! is_array( $block ) || 'core/navigation-submenu' !== $block['blockName'] ) {
		return $block_content;
	}

	// Get parent URL from block attributes.
	$url = $block['attrs']['url'] ?? '';

	if ( empty( $url ) ) {
		return $block_content;
	}

	// Add data-parent-url to the list item.
	$block_content = preg_replace(
		'/<li\s+class="([^"]*wp-block-navigation-item[^"]*)"/',
		'<li class="$1" data-parent-url="' . esc_attr( $url ) . '"',
		$block_content,
		1
	);

	return $block_content;
}
add_filter( 'render_block', __NAMESPACE__ . '\\elayne_filter_navigation_submenu_output', 10, 2 );
