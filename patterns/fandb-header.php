<?php
/**
 * Title: F+B Header
 * Slug: elayne/fandb-header
 * Description: Bistro header with dark topbar, frosted-glass sticky bar, desktop nav links, and mobile hamburger.
 * Categories: header
 * Keywords: header, bistro, restaurant, wine bar, food, beverage, kafe, navigation
 * Block Types: core/template-part/header
 * Viewport Width: 1440
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"categories":["header"],"patternName":"elayne/fandb-header","name":"F+B Header"},"align":"full","className":"is-style-fandb-header","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<header class="wp-block-group alignfull is-style-fandb-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"fandb-header-topbar","backgroundColor":"main","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-header-topbar has-main-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"fandb-topbar-inner","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group fandb-topbar-inner" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Open Today · 8:00 — 23:00 · Heritage Lane', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fandb-topbar-socials","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fandb-topbar-socials"><!-- wp:paragraph {"className":"fandb-social-instagram","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-social-instagram" style="margin-top:0;margin-bottom:0"><a href="#" class="fandb-social-link"><?php esc_html_e( 'Instagram', 'elayne' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-social-facebook","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-social-facebook" style="margin-top:0;margin-bottom:0"><a href="#" class="fandb-social-link"><?php esc_html_e( 'Facebook', 'elayne' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-social-phone","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-social-phone" style="margin-top:0;margin-bottom:0"><a href="tel:+622155501420" class="fandb-social-link"><?php esc_html_e( '+62 21 555 0142', 'elayne' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-header-main","style":{"spacing":{"padding":{"top":"1.35rem","right":"var:preset|spacing|medium","bottom":"1.35rem","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fandb-header-main" style="margin-top:0;margin-bottom:0;padding-top:1.35rem;padding-right:var(--wp--preset--spacing--medium);padding-bottom:1.35rem;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:navigation {"overlayBackgroundColor":"primary-alt","overlayTextColor":"secondary","className":"fandb-header-nav","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"fontSize":"small"} /-->
<!-- wp:group {"className":"fandb-brand","style":{"spacing":{"blockGap":"2-x-small","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group fandb-brand" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontFamily":"heading"} /-->
<!-- wp:site-tagline {"textColor":"main-accent","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-header-actions","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"right"}} -->
<div class="wp-block-group fandb-header-actions"><!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"fandb-reserve-pill","style":{"typography":{"fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"padding":{"top":"0.65rem","right":"1.4rem","bottom":"0.65rem","left":"1.4rem"}}}} -->
<div class="wp-block-button fandb-reserve-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:0.65rem;padding-right:1.4rem;padding-bottom:0.65rem;padding-left:1.4rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Book a Table', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
