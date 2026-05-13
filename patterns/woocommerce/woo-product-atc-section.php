<?php
/**
 * Title: Product Add to Cart Section
 * Slug: elayne/woocommerce/woo-product-atc-section
 * Description: Quantity selector, add-to-cart button, wishlist button, and buy now button for the single product page.
 * Categories: elayne/woocommerce
 * Keywords: product, add to cart, quantity, buy now, wishlist, purchase
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-atc-section","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-atc-section","name":"Product Add to Cart Section"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-atc-section" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"className":"elayne-atc-row","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"stretch"}} -->
<div class="wp-block-group elayne-atc-row"><!-- wp:woocommerce/add-to-cart-form -->
<!-- wp:woocommerce/quantity-selector /-->
<!-- wp:woocommerce/add-to-cart-button {"className":"elayne-atc-button","textColor":"base","backgroundColor":"main","style":{"border":{"radius":"0"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.2em","textTransform":"uppercase"}}} /-->
<!-- /wp:woocommerce/add-to-cart-form -->

<!-- wp:group {"className":"elayne-wishlist-button","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"1px","color":"var:preset|color|border-light","radius":"0"}},"layout":{"type":"flex","justifyContent":"center","alignItems":"center"}} -->
<div class="wp-block-group elayne-wishlist-button has-border-color" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"elayne-wishlist-icon"} -->
<figure class="wp-block-image elayne-wishlist-icon size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/store/icon-heart.svg" alt="<?php echo esc_attr__( 'Add to wishlist', 'elayne' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"stretch"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"elayne-buy-now-button is-style-fill","backgroundColor":"orange","textColor":"tertiary","width":100,"style":{"border":{"radius":"0"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.18em","textTransform":"uppercase"}}} -->
<div class="wp-block-button elayne-buy-now-button is-style-fill has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-orange-background-color has-tertiary-color has-text-color has-background wp-element-button" style="border-radius:0;font-style:normal;font-weight:500;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'Buy Now', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
