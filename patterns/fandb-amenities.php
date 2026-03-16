<?php
/**
 * Title: Restaurant Amenities
 * Slug: elayne/fandb-amenities
 * Description: Icon grid showcasing restaurant amenities and features with responsive 3-column layout
 * Categories: elayne/food-beverage, elayne/features, elayne/card-simple
 * Keywords: amenities, features, services, parking, wifi, outdoor seating, restaurant, facilities
 * Viewport Width: 1200
 * Grid Config: 18rem - Simple card layout with icon, title, and short description
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage"],"patternName":"elayne/fandb-amenities","name":"Restaurant Amenities"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"primary","fontFamily":"heading","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-heading-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--large);font-weight:400"><?php esc_html_e( 'Our Amenities', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/icon-parking.svg" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Free Parking', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'Complimentary parking available for all guests in our adjacent lot', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/icon-outdoor.svg" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Outdoor Seating', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'Enjoy your meal on our beautiful terrace with seasonal outdoor dining', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/icon-wifi.svg" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Free WiFi', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'High-speed wireless internet access throughout the restaurant', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/icon-events.svg" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Private Events', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'Host your special occasions in our private dining room for up to 40 guests', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/icon-accessible.svg" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Wheelchair Accessible', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'Fully accessible facilities with ramp entrance and accessible restrooms', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/icon-bar.svg" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Full Bar', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'Extensive wine list and craft cocktails featuring local spirits', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
