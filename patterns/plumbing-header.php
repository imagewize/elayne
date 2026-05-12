<?php
/**
 * Title: Plumbing Header
 * Slug: elayne/plumbing-header
 * Description: Two-bar header for plumbing business with amber emergency top bar and dark navigation bar
 * Categories: elayne/plumbing, elayne/header
 * Keywords: header, plumbing, emergency, phone, navigation, two-bar, amber
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"categories":["elayne/plumbing","elayne/header"],"patternName":"elayne/plumbing-header","name":"Plumbing Header"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<header class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Emergency Top Bar"},"align":"full","className":"plumbing-top-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull plumbing-top-bar has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"hide-on-mobile","style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"x-small"} -->
<p class="hide-on-mobile has-white-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Available 24/7 — Emergency Response in 60 Minutes', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"hide-on-mobile","style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"x-small"} -->
<p class="hide-on-mobile has-white-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Licensed & Insured · ROC # 299613', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"plumbing-topbar-phone","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border-radius|pill"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group plumbing-topbar-phone" style="border-radius:var(--wp--preset--border-radius--pill);padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"className":"plumbing-topbar-phone-icon"} -->
<figure class="wp-block-image plumbing-topbar-phone-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-phone-white.svg" alt=""/></figure>
<!-- /wp:image --><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"x-small"} -->
<p class="has-white-color has-text-color has-link-color has-x-small-font-size" style="font-weight:600"><a href="tel:5551234567"><?php esc_html_e( '(555) 123-4567', 'elayne' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Main Navigation Bar"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"style":{"typography":{"fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.02em"}},"textColor":"white","fontSize":"medium"} /-->

<!-- wp:navigation {"icon":"menu","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"textColor":"main-accent","fontSize":"small","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} /-->

<!-- wp:group {"className":"plumbing-header-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|pill"}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group plumbing-header-cta has-primary-background-color has-background" style="border-radius:var(--wp--preset--border-radius--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"className":"plumbing-cta-phone-icon"} -->
<figure class="wp-block-image plumbing-cta-phone-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-phone-white.svg" alt=""/></figure>
<!-- /wp:image --><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"base"} -->
<p class="has-white-color has-text-color has-link-color has-base-font-size" style="font-weight:700"><a href="tel:5551234567"><?php esc_html_e( '(555) 123-4567', 'elayne' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
