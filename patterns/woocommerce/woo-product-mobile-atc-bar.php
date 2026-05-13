<?php
/**
 * Title: Product Mobile ATC Bar
 * Slug: elayne/woocommerce/woo-product-mobile-atc-bar
 * Description: Fixed sticky bar shown at the bottom of the screen on mobile devices, displaying the product price and an add-to-cart button.
 * Categories: elayne/woocommerce
 * Keywords: product, mobile, sticky, add to cart, bar, fixed
 * Viewport Width: 390
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-mobile-atc-bar","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-mobile-atc-bar","name":"Product Mobile ATC Bar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group elayne-mobile-atc-bar" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:woocommerce/product-price {"className":"elayne-mobile-atc-price","textColor":"main","fontSize":"large","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
<!-- wp:woocommerce/add-to-cart-form -->
<!-- wp:woocommerce/add-to-cart-button {"className":"elayne-mobile-atc-button","textColor":"base","backgroundColor":"main","style":{"border":{"radius":"0"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.18em","textTransform":"uppercase"}}} /-->
<!-- /wp:woocommerce/add-to-cart-form --></div>
<!-- /wp:group -->
