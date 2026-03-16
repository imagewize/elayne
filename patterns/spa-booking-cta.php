<?php
/**
 * Title: Spa Booking Call to Action
 * Slug: elayne/spa-booking-cta
 * Description: A full-width call to action for booking appointments and shopping products
 * Categories: elayne/call-to-action, elayne/spa
 * Keywords: spa, wellness, cta, booking, appointment, shop, products, spa
 * Viewport Width: 1280
 * Block Types: core/group
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"name":"Spa Booking Call To Action"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"5px"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Experience True Relaxation', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"primary-accent"} -->
<p class="has-text-align-center has-primary-accent-color has-text-color"><?php esc_html_e( 'Indulge in our premium spa treatments designed to rejuvenate your body and calm your mind. Our skilled therapists use natural, organic products to create a personalized wellness experience.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button" href="/book"><?php esc_html_e( 'Book Appointment', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="/shop"><?php esc_html_e( 'Shop Products', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->