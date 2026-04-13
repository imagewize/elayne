<?php
/**
 * Title: Plumbing Hero
 * Slug: elayne/plumbing-hero
 * Description: Two-column hero for plumbing business with badge, headline, CTA buttons, and trust stats
 * Categories: elayne/plumbing, elayne/hero
 * Keywords: hero, plumbing, emergency, pipes, 24/7, plumber
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/hero"],"patternName":"elayne/plumbing-hero","name":"Plumbing Hero"},"align":"full","className":"plumbing-hero-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"gradient":"navy-dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull plumbing-hero-section has-navy-dark-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"is-style-plumbing-badge","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|pill","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-plumbing-badge has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-lightning-amber.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.5px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.5px"><?php esc_html_e( 'Emergency Plumbers Available Now', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.15","letterSpacing":"-0.02em"}},"textColor":"white","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-xx-large-font-size" style="letter-spacing:-0.02em;line-height:1.15"><?php echo wp_kses_post( __( 'When Pipes Break, <mark class="has-inline-color has-primary-color">We Don\'t.</mark>', 'elayne' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"main-accent","fontSize":"medium"} -->
<p class="has-main-accent-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Fast, reliable plumbing for homes and businesses. Licensed professionals with 20+ years of experience — on-site within the hour.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill is-style-plumbing-call-btn","style":{"border":{"radius":"var:preset|border-radius|pill","width":"0px"}},"fontSize":"base"} -->
<div class="wp-block-button is-style-fill is-style-plumbing-call-btn"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-base-font-size has-custom-font-size wp-element-button" style="border-width:0px;border-radius:var(--wp--preset--border-radius--pill)"><?php esc_html_e( 'Call Now: (555) 123-4567', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"border":{"radius":"var:preset|border-radius|pill","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"base","borderColor":"border-light"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-border-light-border-color has-base-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:var(--wp--preset--border-radius--pill)"><?php esc_html_e( 'Schedule Service →', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|large","bottom":"0"},"margin":{"top":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:0"><!-- wp:group {"className":"is-style-plumbing-stat-block","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-plumbing-stat-block"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-large-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '4.9★', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Google Rating', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stats-divider","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group stats-divider" style="padding-top:0;padding-bottom:0"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-plumbing-stat-block","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-plumbing-stat-block"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-large-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '2,400+', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Jobs Completed', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"stats-divider","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group stats-divider" style="padding-top:0;padding-bottom:0"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-plumbing-stat-block","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-plumbing-stat-block"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-large-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '60 Min', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Response Time', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"overlay-grid-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group overlay-grid-wrap"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/hero-plumbing.webp","dimRatio":0,"minHeight":480,"minHeightUnit":"px","className":"plumbing-hero-card","style":{"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"borderColor":"border-light"} -->
<div class="wp-block-cover plumbing-hero-card has-border-color has-border-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/hero-plumbing.webp" alt="<?php echo esc_attr__( 'Gold plumbing taps', 'elayne' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"floating-badge floating-badge--bl","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group floating-badge floating-badge--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-shield.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"x-small"} -->
<p class="has-white-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Licensed &amp; Insured', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"floating-badge floating-badge--tr","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group floating-badge floating-badge--tr"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-clock-amber.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"x-small"} -->
<p class="has-white-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( '24/7 Emergency', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
