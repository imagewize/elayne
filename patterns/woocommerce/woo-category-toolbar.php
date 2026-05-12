<?php
/**
 * Title: Category Toolbar
 * Slug: elayne/woocommerce/woo-category-toolbar
 * Description: Product category toolbar with filter button, active filters, result count, and sort select
 * Categories: elayne/woocommerce
 * Keywords: category, toolbar, filters, sort, result count
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"is-style-elayne-category-toolbar","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-category-toolbar","name":"Category Toolbar"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-elayne-category-toolbar" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"className":"elayne-toolbar-inner","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group elayne-toolbar-inner"><!-- wp:group {"className":"elayne-toolbar-left","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group elayne-toolbar-left"><!-- wp:button {"className":"elayne-filter-btn","textColor":"primary","backgroundColor":"tertiary","style":{"border":{"radius":"0","width":"1px"},"typography":{"fontSize":"var:preset|font-size|x-small","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-button elayne-filter-btn"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-width:1px;border-radius:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:var(--wp--preset--font-size--x-small);font-style:normal;font-weight:400;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Filters', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:group {"className":"elayne-active-filters","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group elayne-active-filters"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-toolbar-right","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
<div class="wp-block-group elayne-toolbar-right"><!-- wp:paragraph {"className":"elayne-result-count","style":{"typography":{"fontSize":"var:preset|font-size|x-small","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":"0"}},"textColor":"main-accent"} -->
<p class="elayne-result-count has-main-accent-color has-text-color" style="margin:0;font-size:var(--wp--preset--font-size--x-small);font-style:normal;font-weight:400">&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/catalog-sorting {"className":"elayne-sort-select"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
