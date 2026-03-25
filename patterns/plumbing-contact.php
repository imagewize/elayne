<?php
/**
 * Title: Plumbing Contact Section
 * Slug: elayne/plumbing-contact
 * Description: Two-column contact section with business details and contact form shortcode
 * Categories: elayne/plumbing, elayne/contact
 * Keywords: contact, plumbing, phone, email, address, hours, form, quote
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"name":"Plumbing Contact Section","patternName":"elayne/plumbing-contact"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-plumbing-section-label"} -->
<p class="is-style-plumbing-section-label"><?php esc_html_e( 'Get in Touch', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"white","fontSize":"large"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-large-font-size"><?php esc_html_e( 'Request Service or Get a Quote', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( "Fill out the form and we'll be in touch within the hour. For emergencies, call us directly.", 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-plumbing-contact-icon","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-plumbing-contact-icon"><!-- wp:image {"className":"plumbing-contact-icon-img"} -->
<figure class="wp-block-image plumbing-contact-icon-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-contact-phone.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Phone', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( '(555) 123-4567', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-plumbing-contact-icon","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-plumbing-contact-icon"><!-- wp:image {"className":"plumbing-contact-icon-img"} -->
<figure class="wp-block-image plumbing-contact-icon-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-contact-email.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Email', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( 'example@example.com', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-plumbing-contact-icon","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-plumbing-contact-icon"><!-- wp:image {"className":"plumbing-contact-icon-img"} -->
<figure class="wp-block-image plumbing-contact-icon-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-contact-location.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Address', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( '123 Main St, City, State 12345', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-plumbing-contact-icon","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-plumbing-contact-icon"><!-- wp:image {"className":"plumbing-contact-icon-img"} -->
<figure class="wp-block-image plumbing-contact-icon-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-contact-clock.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Hours', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-small-font-size"><?php esc_html_e( 'Mon–Fri: 8am–6pm · Sat: 9am–4pm', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"plumbing-always-on","fontSize":"small"} -->
<p class="plumbing-always-on has-small-font-size"><?php esc_html_e( 'Emergency line: 24/7', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"tertiary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-large-font-size"><?php esc_html_e( 'Send Us a Message', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<?php if ( function_exists( 'wpcf7' ) ) : ?>
<!-- wp:contact-form-7/contact-form-selector -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7]</div>
<!-- /wp:contact-form-7/contact-form-selector -->
<?php else : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Full Name', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.05)"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-background" style="background-color:rgba(255,255,255,0.05);border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Your name', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Phone or Email', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.05)"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-background" style="background-color:rgba(255,255,255,0.05);border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'How can we reach you?', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Service Needed', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.05)"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-background" style="background-color:rgba(255,255,255,0.05);border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Describe the issue or service you need...', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"plumbing-contact-submit","backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"var:preset|border-radius|pill"},"spacing":{"padding":{"top":"0.95em","bottom":"0.95em","left":"2em","right":"2em"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group plumbing-contact-submit has-primary-background-color has-white-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--pill);padding-top:0.95em;padding-right:2em;padding-bottom:0.95em;padding-left:2em"><!-- wp:paragraph {"textColor":"white","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-white-color has-text-color" style="font-weight:700"><?php esc_html_e( 'Send Request', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"className":"plumbing-contact-arrow"} -->
<figure class="wp-block-image plumbing-contact-arrow"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-arrow-right-white.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'We typically respond within 1 hour during business hours.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
