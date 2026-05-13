<?php
/**
 * Title: Product Style Options
 * Slug: elayne/woocommerce/woo-product-style-options
 * Description: Style/size option selector with active and sold-out states. Static implementation for visual display — wire to WooCommerce variations via JavaScript.
 * Categories: elayne/woocommerce
 * Keywords: product, style, size, option, variation, selector
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-style-options","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-style-options","name":"Product Style Options"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-style-options" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":6,"className":"elayne-option-label","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h6 class="wp-block-heading elayne-option-label has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'Style', 'elayne' ); ?> <span class="elayne-selected-value"><?php esc_html_e( 'A4 with Notepad', 'elayne' ); ?></span></h6>
<!-- /wp:heading -->

<!-- wp:group {"className":"elayne-style-option-buttons","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group elayne-style-option-buttons"><!-- wp:group {"className":"elayne-style-option active","backgroundColor":"main","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px","color":"var:preset|color|main","radius":"0"}}} -->
<div class="wp-block-group elayne-style-option active has-main-background-color has-base-color has-text-color has-background has-border-color" style="border-color:var(--wp--preset--color--main);border-width:1px;border-radius:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'A4 with Notepad', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-style-option","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px","color":"var:preset|color|border-light","radius":"0"}}} -->
<div class="wp-block-group elayne-style-option has-border-color" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'A4 Slim', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-style-option","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px","color":"var:preset|color|border-light","radius":"0"}}} -->
<div class="wp-block-group elayne-style-option has-border-color" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'A5 with Notepad', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-style-option unavailable","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px","color":"var:preset|color|border-light","radius":"0"}}} -->
<div class="wp-block-group elayne-style-option unavailable has-border-color" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase","textDecoration":"line-through"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500;letter-spacing:0.1em;text-transform:uppercase;text-decoration:line-through"><?php esc_html_e( 'A3 — Sold Out', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
