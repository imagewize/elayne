<?php
/**
 * Title: Drinks Menu Grid
 * Slug: elayne/menu-drinks-grid
 * Description: Four-section responsive drinks menu with color-coded categories (Coffee/Tea, Wines, Beers, Snacks)
 * Categories: elayne/food-beverage, elayne/card-extended
 * Keywords: menu, drinks, beverages, coffee, wine, beer, food, restaurant, cafe, bar
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage","elayne/card-extended"],"patternName":"elayne/menu-drinks-grid","name":"Drinks Menu Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"400","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"heading","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family has-large-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Drinks', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"main-accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-base-color has-main-accent-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"decorative","fontSize":"medium"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color has-decorative-font-family has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo wp_kses_post( __( 'Koffie &amp; Thee', 'elayne' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Verse muntthee', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€3.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Diverse Nespresso koffie vanaf', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€2.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Germberthee', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€3.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"menu-subsection-header","style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|border-light"}}},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"border-light","fontFamily":"decorative","fontSize":"base"} -->
<h4 class="wp-block-heading menu-subsection-header has-border-light-color has-text-color has-link-color has-decorative-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Frisdranken', 'elayne' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Koffie met een tic', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€7.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Diverse frisdranken vanaf', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€3.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"border-light","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-base-color has-border-light-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"decorative","fontSize":"medium"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color has-decorative-font-family has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Wijnen', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"decorative","fontSize":"base"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color has-decorative-font-family has-base-font-size" style="font-weight:500"><?php esc_html_e( 'Wit', 'elayne' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Chardonnay', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500","fontStyle":"normal"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( '€4.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:400"><?php esc_html_e( 'Portugal', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Verdejo', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€4.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:400"><?php esc_html_e( 'Spanje', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Pinot Grigio', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€4.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:400"><?php esc_html_e( 'Italië', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Cava', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€4.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:400"><?php esc_html_e( 'Spanje', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"menu-subsection-header","style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"base","fontFamily":"decorative","fontSize":"base"} -->
<h4 class="wp-block-heading menu-subsection-header has-base-color has-text-color has-link-color has-decorative-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Rood', 'elayne' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Merlot', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€5.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:400"><?php esc_html_e( 'Frankrijk', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"primary-alt","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-base-color has-primary-alt-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|border-light"}}}},"textColor":"border-light","fontFamily":"decorative","fontSize":"medium"} -->
<h3 class="wp-block-heading has-border-light-color has-text-color has-link-color has-decorative-font-family has-medium-font-size" style="font-weight:500"><?php esc_html_e( 'Bieren uit de fles', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Affligem Wit', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€4.80', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Westmalle Dubbel', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€5.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Duvel', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€5.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Desperado', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€5.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"menu-subsection-header","style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"base","fontFamily":"decorative","fontSize":"base"} -->
<h4 class="wp-block-heading menu-subsection-header has-base-color has-text-color has-link-color has-decorative-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-style:normal;font-weight:500"><?php esc_html_e( 'Alcohol Vrij', 'elayne' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Heineken 0.0', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€3.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"contact-bg","textColor":"primary-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-primary-alt-color has-contact-bg-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent","fontFamily":"decorative","fontSize":"medium"} -->
<h3 class="wp-block-heading has-main-accent-color has-text-color has-link-color has-decorative-font-family has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Hapjes', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Bitterballen', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€5.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Kaasplankje', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€8.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Olijven', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€3.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( "Nacho's met salsa", 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontWeight":"500"}},"fontFamily":"body","fontSize":"x-small"} -->
<p class="menu-price has-body-font-family has-x-small-font-size" style="font-weight:500"><?php esc_html_e( '€6.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
