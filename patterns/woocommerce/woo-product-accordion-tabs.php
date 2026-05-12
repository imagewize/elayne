<?php
/**
 * Title: Product Accordion Tabs
 * Slug: elayne/woocommerce/woo-product-accordion-tabs
 * Description: Four-tab accordion for product description, specifications, shipping and returns, and care instructions. Requires woocommerce-product-page.js for open/close behaviour.
 * Categories: elayne/woocommerce
 * Keywords: product, accordion, tabs, description, specifications, shipping, care
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-accordion","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-accordion-tabs","name":"Product Accordion Tabs"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"className":"elayne-accordion-item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-item"><!-- wp:group {"className":"elayne-accordion-trigger","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"0","right":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
<div class="wp-block-group elayne-accordion-trigger" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><!-- wp:heading {"level":3,"className":"elayne-accordion-title","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading elayne-accordion-title has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e( 'Description', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"elayne-accordion-icon","textColor":"main","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-accordion-icon has-main-color has-text-color" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300">+</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"elayne-accordion-content","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-content" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:woocommerce/product-description /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-accordion-item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-item"><!-- wp:group {"className":"elayne-accordion-trigger","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"0","right":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
<div class="wp-block-group elayne-accordion-trigger" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><!-- wp:heading {"level":3,"className":"elayne-accordion-title","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading elayne-accordion-title has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e( 'Specifications', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"elayne-accordion-icon","textColor":"main","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-accordion-icon has-main-color has-text-color" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300">+</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"elayne-accordion-content","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-content" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"className":"elayne-product-attributes-table","layout":{"type":"default"}} --><div class="wp-block-group elayne-product-attributes-table"></div><!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-accordion-item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-item"><!-- wp:group {"className":"elayne-accordion-trigger","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"0","right":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
<div class="wp-block-group elayne-accordion-trigger" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><!-- wp:heading {"level":3,"className":"elayne-accordion-title","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading elayne-accordion-title has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e( 'Shipping & Returns', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"elayne-accordion-icon","textColor":"main","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-accordion-icon has-main-color has-text-color" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300">+</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"elayne-accordion-content","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-content" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"className":"elayne-shipping-returns-content","layout":{"type":"default"}} --><div class="wp-block-group elayne-shipping-returns-content"></div><!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-accordion-item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-item"><!-- wp:group {"className":"elayne-accordion-trigger","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"0","right":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
<div class="wp-block-group elayne-accordion-trigger" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><!-- wp:heading {"level":3,"className":"elayne-accordion-title","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.16em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading elayne-accordion-title has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e( 'Care Instructions', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"elayne-accordion-icon","textColor":"main","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-accordion-icon has-main-color has-text-color" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300">+</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"elayne-accordion-content","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-accordion-content" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"textColor":"main-accent","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.8"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-accent-color has-text-color" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300;line-height:1.8"><?php esc_html_e( 'Clean with a soft, lightly damp cloth. Condition every 3–6 months with a quality leather balm. Store in the included cotton dust bag when not in use.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
