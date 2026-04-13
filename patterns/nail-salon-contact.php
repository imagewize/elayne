<?php
/**
 * Title: Nail Salon Contact Section
 * Slug: elayne/nail-salon-contact
 * Description: Two-column contact section with business details and booking form placeholder
 * Categories: elayne/salon, elayne/contact
 * Keywords: contact, nail salon, phone, email, address, hours, form, booking, appointment
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"name":"Nail Salon Contact Section","patternName":"elayne/nail-salon-contact"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Get in Touch', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"main","fontSize":"large"} -->
<h2 class="wp-block-heading has-main-color has-text-color has-large-font-size"><?php esc_html_e( 'Visit Lacquer &amp; Luxe', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( "We'd love to see you. Pop in for a walk-in appointment or book ahead for guaranteed time with your favorite artist.", 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-contact-icon","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"var:preset|border-radius|md"}},"backgroundColor":"primary-accent","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-contact-icon has-primary-accent-background-color has-background" style="border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-phone-rose.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Phone', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( '(555) 246-8910', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-contact-icon","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"var:preset|border-radius|md"}},"backgroundColor":"primary-accent","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-contact-icon has-primary-accent-background-color has-background" style="border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-email-rose.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Email', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( 'info@example.com', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-contact-icon","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"var:preset|border-radius|md"}},"backgroundColor":"primary-accent","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-contact-icon has-primary-accent-background-color has-background" style="border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-location-rose.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Address', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( '24 Blossom Lane, Suite 3, City, State 10001', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-nail-salon-contact-icon","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"var:preset|border-radius|md"}},"backgroundColor":"primary-accent","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-contact-icon has-primary-accent-background-color has-background" style="border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-clock-rose.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Hours', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( 'Mon–Fri: 9am–7pm · Sat: 9am–6pm · Sun: 10am–5pm', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"level":3,"textColor":"main","fontSize":"large"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-large-font-size"><?php esc_html_e( 'Book an Appointment', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<?php if ( function_exists( 'wpcf7' ) ) : ?>
<!-- wp:contact-form-7/contact-form-selector -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7]</div>
<!-- /wp:contact-form-7/contact-form-selector -->
<?php else : ?>
<!-- wp:shortcode -->
<div class="wp-block-shortcode">[booking_form]</div>
<!-- /wp:shortcode -->
<?php endif; ?>

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'We typically confirm within a few hours during business hours.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
