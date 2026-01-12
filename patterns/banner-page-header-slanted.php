<?php
/**
 * Title: Page Header Banner (Slanted)
 * Slug: elayne/banner-page-header-slanted
 * Description: Page header banner with slanted gradient overlay and background image
 * Categories: elayne/banner
 * Keywords: banner, header, page, title, slanted, gradient, image, cover
 * Viewport Width: 1200
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/banner-boats-16x9.webp","alt":"<?php esc_attr_e( 'Page header image', 'elayne' ); ?>","dimRatio":75,"overlayColor":"primary-accent","isUserOverlayColor":true,"minHeight":400,"minHeightUnit":"px","contentPosition":"center left","metadata":{"categories":["elayne/banner"],"patternName":"elayne/banner-page-header-slanted","name":"Page Header Banner (Slanted)"},"align":"full","className":"is-light diagonal-banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left is-light diagonal-banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:400px"><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Page header image', 'elayne' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/banner-boats-16x9.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-accent-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"}},"textColor":"base","fontSize":"large","fontFamily":"open-sans"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-open-sans-font-family has-large-font-size" style="line-height:1.2"><?php esc_html_e( 'Our Services', 'elayne' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"primary-accent","fontSize":"base","fontFamily":"open-sans"} -->
<p class="has-primary-accent-color has-text-color has-open-sans-font-family has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'Comprehensive solutions tailored to your needs', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
