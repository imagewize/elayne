<?php
/**
 * Title: Product Color Swatches
 * Slug: elayne/woocommerce/woo-product-color-swatches
 * Description: Colour swatch selector showing leather colour options with active state. Static implementation — extend with PHP for dynamic product attributes.
 * Categories: elayne/woocommerce
 * Keywords: product, color, colour, swatch, variation, attribute, leather
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-color-options","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-color-swatches","name":"Product Color Swatches"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-color-options" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":6,"className":"elayne-option-label","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.18em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h6 class="wp-block-heading elayne-option-label has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'Leather Colour', 'elayne' ); ?> <span class="elayne-selected-value"><?php esc_html_e( 'Tan', 'elayne' ); ?></span></h6>
<!-- /wp:heading -->

<!-- wp:group {"className":"elayne-colour-options","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group elayne-colour-options"><!-- wp:group {"className":"elayne-colour-option active","layout":{"type":"default"}} -->
<div class="wp-block-group elayne-colour-option active"><!-- wp:group {"className":"elayne-colour-swatch-lg","backgroundColor":"gold","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-group elayne-colour-swatch-lg has-gold-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"elayne-colour-name","textColor":"main","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|2-x-small","bottom":"0"}}}} -->
<p class="elayne-colour-name has-main-color has-text-color has-xx-small-font-size" style="margin-top:var(--wp--preset--spacing--2-x-small);margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( 'Tan', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-colour-option","layout":{"type":"default"}} -->
<div class="wp-block-group elayne-colour-option"><!-- wp:group {"className":"elayne-colour-swatch-lg","backgroundColor":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-group elayne-colour-swatch-lg has-main-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"elayne-colour-name","textColor":"main","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|2-x-small","bottom":"0"}}}} -->
<p class="elayne-colour-name has-main-color has-text-color has-xx-small-font-size" style="margin-top:var(--wp--preset--spacing--2-x-small);margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( 'Black', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-colour-option","layout":{"type":"default"}} -->
<div class="wp-block-group elayne-colour-option"><!-- wp:group {"className":"elayne-colour-swatch-lg","style":{"color":{"background":"#8B4513"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-group elayne-colour-swatch-lg has-background" style="background-color:#8B4513;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"elayne-colour-name","textColor":"main","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|2-x-small","bottom":"0"}}}} -->
<p class="elayne-colour-name has-main-color has-text-color has-xx-small-font-size" style="margin-top:var(--wp--preset--spacing--2-x-small);margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( 'Cognac', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-colour-option","layout":{"type":"default"}} -->
<div class="wp-block-group elayne-colour-option"><!-- wp:group {"className":"elayne-colour-swatch-lg","style":{"color":{"background":"#6B3A2A"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-group elayne-colour-swatch-lg has-background" style="background-color:#6B3A2A;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"elayne-colour-name","textColor":"main","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|2-x-small","bottom":"0"}}}} -->
<p class="elayne-colour-name has-main-color has-text-color has-xx-small-font-size" style="margin-top:var(--wp--preset--spacing--2-x-small);margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( 'Chestnut', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-colour-option","layout":{"type":"default"}} -->
<div class="wp-block-group elayne-colour-option"><!-- wp:group {"className":"elayne-colour-swatch-lg","style":{"color":{"background":"#1B2A4A"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-group elayne-colour-swatch-lg has-background" style="background-color:#1B2A4A;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"elayne-colour-name","textColor":"main","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|2-x-small","bottom":"0"}}}} -->
<p class="elayne-colour-name has-main-color has-text-color has-xx-small-font-size" style="margin-top:var(--wp--preset--spacing--2-x-small);margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( 'Navy', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
