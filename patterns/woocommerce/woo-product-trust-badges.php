<?php
/**
 * Title: Product Trust Badges
 * Slug: elayne/woocommerce/woo-product-trust-badges
 * Description: Three-column trust badge row displaying free shipping, returns policy, and warranty information.
 * Categories: elayne/woocommerce
 * Keywords: product, trust, shipping, returns, warranty, badges, reassurance
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-trust-badges","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-trust-badges","name":"Product Trust Badges"},"backgroundColor":"base-accent","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"grid","minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group elayne-trust-badges has-base-accent-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"elayne-trust-badge","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group elayne-trust-badge" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"className":"elayne-trust-icon","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image elayne-trust-icon size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/store/icon-truck.svg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-accent-color has-text-color has-xx-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Free shipping over $250', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-trust-badge","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group elayne-trust-badge" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"className":"elayne-trust-icon","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image elayne-trust-icon size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/store/icon-return.svg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-accent-color has-text-color has-xx-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( '30-day returns', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"elayne-trust-badge","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group elayne-trust-badge" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"className":"elayne-trust-icon","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image elayne-trust-icon size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/store/icon-shield-check.svg" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-accent-color has-text-color has-xx-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( '5-year warranty', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
