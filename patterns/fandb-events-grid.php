<?php
/**
 * Title: F&B Events Grid
 * Slug: elayne/fandb-events-grid
 * Description: Display upcoming restaurant events in a responsive 3-column grid with date badges (wine tastings, live music, special dinners)
 * Categories: elayne/food-beverage, elayne/events, elayne/card-extended
 * Keywords: events, calendar, upcoming, wine tasting, live music, special dinner, restaurant events
 * Viewport Width: 1200
 * Grid Config: 19rem - Complex event cards with metadata, tags, and CTAs
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage","elayne/events","elayne/card-extended"],"patternName":"elayne/fandb-events-grid","name":"F&B Events Grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","wideSize":"1260px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'What\'s happening', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"400"}},"textColor":"primary","fontSize":"x-large","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-heading-font-family has-x-large-font-size" style="font-weight:400"><?php esc_html_e( 'Upcoming Events', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"base","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'Join us for special tastings, live music, and culinary experiences.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|spacing|large","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|2-x-small"},"border":{"radius":"var:preset|spacing|small"}},"backgroundColor":"primary-accent","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-primary-accent-background-color has-text-color has-background" style="border-radius:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"base","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-text-align-center has-base-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'MAR', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"800","lineHeight":"1","letterSpacing":"-0.02em"}},"fontSize":"xx-large","fontFamily":"heading"} -->
<p class="has-text-align-center has-heading-font-family has-xx-large-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '15', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"textColor":"base","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-text-align-center has-base-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Sat', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill"}},"backgroundColor":"border-light","textColor":"primary-alt","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-alt-color has-border-light-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--small);font-weight:600"><?php esc_html_e( 'Wine Tasting', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '19:00 – 21:30', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"textColor":"primary","fontSize":"medium","fontFamily":"body"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600;line-height:1.3"><?php esc_html_e( 'French Wine & Cheese Pairing', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Join our sommelier for an intimate evening exploring the perfect wine and cheese combinations from French regions.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill","width":"1px"}},"backgroundColor":"tertiary","textColor":"main-accent","fontSize":"x-small","fontFamily":"body","borderColor":"border-light"} -->
<p class="has-border-color has-border-light-border-color has-main-accent-color has-tertiary-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-width:1px;border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);font-weight:500"><?php esc_html_e( '€45 per person', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill","width":"1px"}},"backgroundColor":"tertiary","textColor":"main-accent","fontSize":"x-small","fontFamily":"body","borderColor":"border-light"} -->
<p class="has-border-color has-border-light-border-color has-main-accent-color has-tertiary-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-width:1px;border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);font-weight:500"><?php esc_html_e( 'Limited to 20 guests', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"has-small-font-size has-body-font-family","style":{"border":{"radius":"var:preset|spacing|small"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"small","fontFamily":"body"} -->
<div class="wp-block-button has-small-font-size has-body-font-family"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-body-font-family has-small-font-size has-custom-font-size wp-element-button" style="border-radius:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Reserve Now', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|spacing|large","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|2-x-small"},"border":{"radius":"var:preset|spacing|small"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="border-radius:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"base","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-text-align-center has-base-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'APR', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"800","lineHeight":"1","letterSpacing":"-0.02em"}},"fontSize":"xx-large","fontFamily":"heading"} -->
<p class="has-text-align-center has-heading-font-family has-xx-large-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '05', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"textColor":"base","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-text-align-center has-base-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Fri', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill"}},"backgroundColor":"border-light","textColor":"primary-alt","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-alt-color has-border-light-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--small);font-weight:600"><?php esc_html_e( 'Live Music', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '20:00 – 23:00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"textColor":"primary","fontSize":"medium","fontFamily":"body"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600;line-height:1.3"><?php esc_html_e( 'Jazz Night with The Trio', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Enjoy an evening of smooth jazz while dining. Featuring local musicians performing classic and contemporary favorites.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill","width":"1px"}},"backgroundColor":"tertiary","textColor":"main-accent","fontSize":"x-small","fontFamily":"body","borderColor":"border-light"} -->
<p class="has-border-color has-border-light-border-color has-main-accent-color has-tertiary-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-width:1px;border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);font-weight:500"><?php esc_html_e( 'No cover charge', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill","width":"1px"}},"backgroundColor":"tertiary","textColor":"main-accent","fontSize":"x-small","fontFamily":"body","borderColor":"border-light"} -->
<p class="has-border-color has-border-light-border-color has-main-accent-color has-tertiary-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-width:1px;border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);font-weight:500"><?php esc_html_e( 'Reservations recommended', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"has-small-font-size has-body-font-family","style":{"border":{"radius":"var:preset|spacing|small"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"small","fontFamily":"body"} -->
<div class="wp-block-button has-small-font-size has-body-font-family"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-body-font-family has-small-font-size has-custom-font-size wp-element-button" style="border-radius:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Book Table', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|spacing|large","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|2-x-small"},"border":{"radius":"var:preset|spacing|small"}},"backgroundColor":"primary-alt-accent","textColor":"primary-alt","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-alt-color has-primary-alt-accent-background-color has-text-color has-background" style="border-radius:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary-alt","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-text-align-center has-primary-alt-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'APR', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"800","lineHeight":"1","letterSpacing":"-0.02em"}},"fontSize":"xx-large","fontFamily":"heading"} -->
<p class="has-text-align-center has-heading-font-family has-xx-large-font-size" style="font-weight:800;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '20', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}},"textColor":"primary-alt","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-text-align-center has-primary-alt-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Sat', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill"}},"backgroundColor":"border-light","textColor":"primary-alt","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-alt-color has-border-light-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--small);font-weight:600"><?php esc_html_e( 'Chef\'s Table', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '18:00 – 22:00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"}},"textColor":"primary","fontSize":"medium","fontFamily":"body"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600;line-height:1.3"><?php esc_html_e( 'Spring Tasting Menu Experience', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="line-height:1.6"><?php esc_html_e( 'An exclusive 7-course seasonal menu paired with wines, prepared tableside by our head chef with insights into each dish.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill","width":"1px"}},"backgroundColor":"tertiary","textColor":"main-accent","fontSize":"x-small","fontFamily":"body","borderColor":"border-light"} -->
<p class="has-border-color has-border-light-border-color has-main-accent-color has-tertiary-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-width:1px;border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);font-weight:500"><?php esc_html_e( '€95 per person', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border|pill","width":"1px"}},"backgroundColor":"tertiary","textColor":"main-accent","fontSize":"x-small","fontFamily":"body","borderColor":"border-light"} -->
<p class="has-border-color has-border-light-border-color has-main-accent-color has-tertiary-background-color has-text-color has-background has-body-font-family has-x-small-font-size" style="border-width:1px;border-radius:var(--wp--preset--border--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);font-weight:500"><?php esc_html_e( 'Limited to 12 guests', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"has-small-font-size has-body-font-family","style":{"border":{"radius":"var:preset|spacing|small"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"small","fontFamily":"body"} -->
<div class="wp-block-button has-small-font-size has-body-font-family"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-body-font-family has-small-font-size has-custom-font-size wp-element-button" style="border-radius:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Reserve Seat', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
