<?php
/**
 * Title: Page Header Banner
 * Slug: elayne/banner-page-header
 * Description: Simple page header with solid background color
 * Categories: elayne/banner
 * Keywords: banner, header, page, title, simple, background
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/banner"],"patternName":"elayne/banner-page-header","name":"Page Header Banner"},"align":"full","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"}},"textColor":"main","fontSize":"large","fontFamily":"open-sans"} -->
<h1 class="wp-block-heading has-main-color has-text-color has-open-sans-font-family has-large-font-size" style="line-height:1.2"><?php esc_html_e( 'Page Title', 'elayne' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"primary-accent","fontSize":"base","fontFamily":"open-sans"} -->
<p class="has-primary-accent-color has-text-color has-open-sans-font-family has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'A brief description or tagline for this page', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
