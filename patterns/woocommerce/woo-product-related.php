<?php
/**
 * Title: Product Related Products
 * Slug: elayne/woocommerce/woo-product-related
 * Description: Full-width related products section with custom heading and four-column product grid. Uses WooCommerce product-collection with related query.
 * Categories: elayne/woocommerce
 * Keywords: product, related, upsell, collection, grid, shop
 * Viewport Width: 1200
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"align":"full","className":"elayne-related-section","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-related","name":"Product Related Products"},"backgroundColor":"tertiary","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull elayne-related-section has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"elayne-related-header","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"space-between","alignItems":"flex-end","flexWrap":"wrap"}} -->
<div class="wp-block-group elayne-related-header"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"elayne-related-label","textColor":"orange","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.2em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-related-label has-orange-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.2em;text-transform:uppercase"><?php esc_html_e( 'You May Also Like', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"elayne-related-heading","textColor":"main","fontSize":"large","style":{"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"-0.02em","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading elayne-related-heading has-main-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:300;letter-spacing:-0.02em;line-height:1.2"><?php echo wp_kses_post( __( 'Complete Your <em>Set</em>', 'elayne' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"elayne-view-all","textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-view-all has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.14em;text-transform:uppercase"><a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>"><?php esc_html_e( 'View All', 'elayne' ); ?> &rarr;</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":true,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} -->
<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"right"} /-->
<!-- /wp:woocommerce/product-image -->
<!-- wp:post-terms {"term":"product_cat","className":"elayne-rel-cat","textColor":"main-accent","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|2-x-small"}}}} /-->
<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"elayne-rel-title","textColor":"main","fontSize":"small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|2-x-small"}}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
