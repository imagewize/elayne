<?php
/**
 * Title: Category Hero
 * Slug: elayne/woocommerce/woo-category-hero
 * Description: Collection hero section with breadcrumb, title, description, visual element, and meta bar
 * Categories: elayne/woocommerce
 * Keywords: category, hero, collection, breadcrumb, meta
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"is-style-elayne-category-hero","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-category-hero","name":"Category Hero"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-elayne-category-hero" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"elayne-category-hero-inner","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-category-hero-inner"><!-- wp:group {"className":"elayne-category-hero-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group elayne-category-hero-content" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--xx-large)"><!-- wp:woocommerce/breadcrumbs /-->

<!-- wp:heading {"level":1,"className":"elayne-category-hero-title","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.08","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|heading"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"textColor":"base"} -->
<h1 class="wp-block-heading elayne-category-hero-title has-var-preset-font-family-heading-font-family has-base-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large);font-family:var(--wp--preset--font-family--heading);font-style:normal;font-weight:300;letter-spacing:-0.01em;line-height:1.08"><?php $term = get_queried_object(); echo ( $term instanceof WP_Term ) ? esc_html( $term->name ) : esc_html__( 'Collection', 'elayne' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"elayne-category-hero-description","style":{"typography":{"fontSize":"var:preset|font-size|base","fontStyle":"normal","fontWeight":"300","lineHeight":"1.8"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base-accent"} -->
<p class="elayne-category-hero-description has-base-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--base);font-style:normal;font-weight:300;line-height:1.8"><?php $term = get_queried_object(); if ( $term instanceof WP_Term ) { $desc = wp_strip_all_tags( term_description( $term->term_id ) ); echo esc_html( $desc ); } ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-category-hero-visual","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-category-hero-visual" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-elayne-category-meta-bar","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-elayne-category-meta-bar" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--xx-large)"><!-- wp:paragraph {"className":"elayne-meta-item","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":"0"}},"textColor":"base-accent"} -->
<p class="elayne-meta-item has-base-accent-color has-text-color" style="margin:0;font-size:var(--wp--preset--font-size--x-small);font-style:normal;font-weight:400;letter-spacing:0.12em;text-transform:uppercase"><strong style="color:var(--wp--preset--color--gold);font-weight:400;margin-right:0.5rem"><?php esc_html_e( 'Products', 'elayne' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"elayne-meta-item","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":"0"}},"textColor":"base-accent"} -->
<p class="elayne-meta-item has-base-accent-color has-text-color" style="margin:0;font-size:var(--wp--preset--font-size--x-small);font-style:normal;font-weight:400;letter-spacing:0.12em;text-transform:uppercase"><strong style="color:var(--wp--preset--color--gold);font-weight:400;margin-right:0.5rem"><?php esc_html_e( 'Full-grain', 'elayne' ); ?></strong> <?php esc_html_e( 'Leather', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"elayne-meta-item","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":"0"}},"textColor":"base-accent"} -->
<p class="elayne-meta-item has-base-accent-color has-text-color" style="margin:0;font-size:var(--wp--preset--font-size--x-small);font-style:normal;font-weight:400;letter-spacing:0.12em;text-transform:uppercase"><strong style="color:var(--wp--preset--color--gold);font-weight:400;margin-right:0.5rem"><?php esc_html_e( 'Complimentary', 'elayne' ); ?></strong> <?php esc_html_e( 'Engraving', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"elayne-meta-item","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":"0"}},"textColor":"base-accent"} -->
<p class="elayne-meta-item has-base-accent-color has-text-color" style="margin:0;font-size:var(--wp--preset--font-size--x-small);font-style:normal;font-weight:400;letter-spacing:0.12em;text-transform:uppercase"><strong style="color:var(--wp--preset--color--gold);font-weight:400;margin-right:0.5rem"><?php esc_html_e( '3-5 Day', 'elayne' ); ?></strong> <?php esc_html_e( 'Dispatch', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
