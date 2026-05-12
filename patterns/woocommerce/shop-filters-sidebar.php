<?php
/**
 * Title: Shop Filters Sidebar
 * Slug: elayne/shop-filters-sidebar
 * Description: WooCommerce product filters sidebar — price range slider, leather colour chips, style checkboxes
 * Categories: elayne/woocommerce
 * Keywords: woocommerce,filters,shop,sidebar,price,colour,style
 * Viewport Width: 1200
 * Block Types: woocommerce/product-filters
 */
?>
<!-- wp:group {"className":"elayne-shop-filters-sidebar","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/shop-filters-sidebar","name":"Shop Filters Sidebar"},"backgroundColor":"base","style":{"border":{"right":{"color":"var:preset|color|border-light","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-shop-filters-sidebar has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);border-right-color:var(--wp--preset--color--border-light);border-right-width:1px;border-right-style:solid"><!-- wp:woocommerce/product-filters {"className":"is-style-elayne-shop-filters-sidebar","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-woocommerce-product-filters wc-block-product-filters is-style-elayne-shop-filters-sidebar">
	<!-- wp:woocommerce/product-filter-price -->
	<!-- wp:woocommerce/product-filter-price-slider {"showInputFields":true} /-->
	<!-- /wp:woocommerce/product-filter-price -->

	<!-- wp:woocommerce/product-filter-attribute {"attributeId":1,"showCounts":false,"displayStyle":"woocommerce/product-filter-chips","queryType":"or","sortOrder":"count-desc"} -->
	<!-- wp:woocommerce/product-filter-chips /-->
	<!-- /wp:woocommerce/product-filter-attribute -->

	<!-- wp:woocommerce/product-filter-attribute {"attributeId":2,"showCounts":true,"displayStyle":"woocommerce/product-filter-checkbox-list","queryType":"or","sortOrder":"count-desc"} -->
	<!-- wp:woocommerce/product-filter-checkbox-list /-->
	<!-- /wp:woocommerce/product-filter-attribute -->
</div>
<!-- /wp:woocommerce/product-filters --></div>
<!-- /wp:group -->
