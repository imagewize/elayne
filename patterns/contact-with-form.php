<?php
/**
 * Title: Contact With Form
 * Slug: elayne/contact-with-form
 * Description: Two-column contact section with business details and a contact form. Requires Contact Form 7; shows placeholder fields when plugin is inactive.
 * Categories: elayne/contact
 * Keywords: contact, phone, email, address, hours, form, message, get in touch
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"name":"Contact With Form","patternName":"elayne/contact-with-form"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"textColor":"main","fontSize":"large"} -->
<h2 class="wp-block-heading has-main-color has-text-color has-large-font-size"><?php esc_html_e( 'Get in Touch', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Have a question or ready to get started? Fill out the form and we\'ll be in touch shortly.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-phone.svg" alt="" style="width:24px"/></figure>
<!-- /wp:image --><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Phone', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( '(555) 123-4567', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-email.svg" alt="" style="width:24px"/></figure>
<!-- /wp:image --><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Email', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( 'example@example.com', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-location.svg" alt="" style="width:24px"/></figure>
<!-- /wp:image --><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Address', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( '123 Main Street, Suite 200', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-clock.svg" alt="" style="width:24px"/></figure>
<!-- /wp:image --><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Hours', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"main","fontSize":"small"} -->
<p class="has-main-color has-text-color has-small-font-size"><?php esc_html_e( 'Mon–Fri: 9am–5pm', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"level":3,"textColor":"main","fontSize":"medium"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size"><?php esc_html_e( 'Send a Message', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<?php if ( function_exists( 'wpcf7' ) ) : ?><!-- wp:contact-form-7/contact-form-selector -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7]</div>
<!-- /wp:contact-form-7/contact-form-selector -->
<?php else : ?><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Your Name', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Your name', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Email Address', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'example@example.com', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Message', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|sm","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Tell us how we can help...', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Send Message', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php endif; ?><!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'We typically respond within 1 business day.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
