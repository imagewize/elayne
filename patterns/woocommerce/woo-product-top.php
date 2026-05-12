<?php
/**
 * Title: Product Top Section
 * Slug: elayne/woocommerce/woo-product-top
 * Description: Product info panel: collection label, star rating, title, subtitle, price block with compare price and save badge, price note, and divider.
 * Categories: elayne/woocommerce
 * Keywords: product, title, rating, price, collection
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-product-top","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-top","name":"Product Top Section"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-product-top" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"className":"elayne-product-top-meta","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"center"}} -->
<div class="wp-block-group elayne-product-top-meta"><!-- wp:paragraph {"className":"elayne-product-collection","textColor":"orange","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-product-collection has-orange-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.2em;text-transform:uppercase"><?php esc_html_e( 'Leather Portfolios', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|x-small"}}},"textColor":"main","fontSize":"x-large"} /-->

<!-- wp:paragraph {"className":"elayne-product-subtitle","textColor":"main","fontSize":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}}} -->
<p class="elayne-product-subtitle has-main-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium);font-style:normal;font-weight:300;line-height:1.6"><?php esc_html_e( 'Full-grain vegetable-tanned leather, hand-stitched and burnished. Designed for the practitioner who demands excellence in every detail.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/product-price {"textColor":"main","fontSize":"x-large","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|x-small"}}}} /-->

<!-- wp:paragraph {"className":"elayne-price-note","textColor":"main","fontSize":"small","style":{"typography":{"fontStyle":"normal","fontWeight":"300","opacity":"0.7"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-price-note has-main-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300"><?php esc_html_e( 'Tax included. Free shipping over $250.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
