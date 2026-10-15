<?php
/**
 * Block Bindings source for the author archive template.
 *
 * Exposes the archive's author (name, profile biography, avatar URL) to
 * core blocks through `elayne/author`. Patterns are evaluated before the
 * main query is resolved, so PHP inside a pattern file cannot see which
 * author is being viewed; bindings resolve at render time instead.
 *
 * @package Elayne
 * @since   4.11.0
 */

namespace Elayne;

/**
 * Register the `elayne/author` block bindings source.
 *
 * @return void
 */
function elayne_register_author_bindings_source() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		'elayne/author',
		array(
			'label'              => __( 'Archive author', 'elayne' ),
			'get_value_callback' => __NAMESPACE__ . '\elayne_author_binding_value',
			'uses_context'       => array(),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\elayne_register_author_bindings_source' );

/**
 * Resolve a binding value for the author being viewed.
 *
 * @param array $source_args Binding arguments; `field` is `name`, `bio` or `avatar`.
 * @return string|null Value, or null when not on an author archive.
 */
function elayne_author_binding_value( $source_args ) {
	$author = get_queried_object();
	if ( ! $author instanceof \WP_User ) {
		return null;
	}

	switch ( $source_args['field'] ?? '' ) {
		case 'name':
			return $author->display_name;
		case 'bio':
			return get_the_author_meta( 'description', $author->ID );
		case 'avatar':
			return get_avatar_url( $author->ID, array( 'size' => 192 ) );
	}

	return null;
}

/**
 * Drop the author biography paragraph when the profile has no biography.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block.
 * @return string
 */
function elayne_hide_empty_author_bio( $block_content, $block ) {
	$class_name = $block['attrs']['className'] ?? '';
	if ( false !== strpos( $class_name, 'elayne-author-bio' ) && '' === trim( wp_strip_all_tags( $block_content ) ) ) {
		return '';
	}

	return $block_content;
}
add_filter( 'render_block_core/paragraph', __NAMESPACE__ . '\elayne_hide_empty_author_bio', 10, 2 );
