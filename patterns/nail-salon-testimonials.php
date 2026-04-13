<?php
/**
 * Title: Nail Salon Client Testimonials
 * Slug: elayne/nail-salon-testimonials
 * Description: Three-column testimonial grid with star ratings for nail salon
 * Categories: elayne/salon, elayne/testimonial
 * Keywords: testimonials, reviews, clients, nail salon, google, yelp, ratings, manicure
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"name":"Nail Salon Testimonials","patternName":"elayne/nail-salon-testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Client Love', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"textColor":"main","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-large-font-size"><?php esc_html_e( 'What Our Clients Say', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color"><?php esc_html_e( 'Real reviews from real clients who trust Lacquer &amp; Luxe.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Testimonial Card 1"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"tertiary","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-5-stars.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php esc_html_e( "I've been coming here for two years and I always leave absolutely thrilled. The nail art is stunning and the staff makes you feel so welcome. Best salon in the city!", 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-avatar","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-avatar"><!-- wp:paragraph {"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-x-small-font-size"><?php esc_html_e( 'SR', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Sophie R.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Regular Client · Google Review', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonial Card 2 — Featured"},"className":"nail-salon-t-featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"tertiary","borderColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group nail-salon-t-featured has-border-color has-primary-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-5-stars.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php esc_html_e( 'My gel nails lasted a full three weeks without a single chip. The technician took so much time to perfect the shape and color. I will never go anywhere else for my nails.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-avatar","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-avatar"><!-- wp:paragraph {"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-x-small-font-size"><?php esc_html_e( 'MK', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Maya K.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Returning Client · Yelp Review', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonial Card 3"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"tertiary","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-5-stars.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php esc_html_e( 'Treated myself to the spa pedicure and paraffin add-on. Absolutely divine! So relaxing, beautifully done. The whole atmosphere at Lacquer &amp; Luxe is just gorgeous.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-avatar","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-avatar"><!-- wp:paragraph {"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-x-small-font-size"><?php esc_html_e( 'LT', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Lauren T.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'New Client · Google Review', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"top":"var:preset|spacing|large"}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;padding-top:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-star-rose.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '4.9 on Google', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-star-rose.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '5.0 on Yelp', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-star-rose.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '3,200+ Happy Clients', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
