<?php
/**
 * Title: Cart Page
 * Slug: elayne/woocommerce/woo-cart
 * Description: Complete cart page layout with items, totals, and cross-sells
 * Categories: elayne/woocommerce
 * Keywords: cart, shopping, checkout
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-cart","name":"Cart Page"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"textColor":"main","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large);font-style:normal;font-weight:400"><?php esc_html_e( 'Your Cart', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/cart {"align":"wide"} /-->

</div>
<!-- /wp:group -->
