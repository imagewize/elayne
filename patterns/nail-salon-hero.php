<?php
/**
 * Title: Nail Salon Hero
 * Slug: elayne/nail-salon-hero
 * Description: Two-column hero for nail salon with eyebrow badge, headline, CTA buttons, and trust stats
 * Categories: elayne/salon, elayne/hero
 * Keywords: hero, nail salon, manicure, booking, nails, beauty
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/hero"],"patternName":"elayne/nail-salon-hero","name":"Nail Salon Hero"},"align":"full","className":"nail-salon-hero-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"gradient":"rose-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nail-salon-hero-section has-rose-hero-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"is-style-nail-salon-badge","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"var:preset|border-radius|pill","width":"1px"}},"backgroundColor":"primary-alt-accent","borderColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-nail-salon-badge has-border-color has-primary-border-color has-primary-alt-accent-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--pill);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-badge-rose.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.5px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.5px"><?php esc_html_e( 'Now Booking — Walk-ins Welcome', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.02em"}},"textColor":"base","fontSize":"large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-large-font-size" style="letter-spacing:-0.02em;line-height:1.1"><?php echo wp_kses_post( __( 'Nails That Tell <em>Your Story.</em>', 'elayne' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="line-height:1.7"><?php esc_html_e( 'Premium manicures, gel nails, and nail art in a luxurious setting. At Lacquer & Luxe, every visit is an experience in beauty and self-care.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"is-style-fill","style":{"border":{"radius":"var:preset|border-radius|pill","width":"0px"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-width:0px;border-radius:var(--wp--preset--border-radius--pill);font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Book an Appointment', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"border":{"radius":"var:preset|border-radius|pill","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"var:preset|font-size|small"}},"borderColor":"border-light"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-link-color has-border-color has-border-light-border-color has-custom-font-size wp-element-button" style="border-width:1px;border-radius:var(--wp--preset--border-radius--pill);font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'View Our Services', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|large","bottom":"0"},"margin":{"top":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-medium-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '8+', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Years Open', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-medium-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '3,200+', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Happy Clients', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-medium-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '4.9', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Google Rating', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"overlay-grid-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group overlay-grid-wrap"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/hero-nail-salon.webp","dimRatio":0,"minHeight":480,"minHeightUnit":"px","className":"nail-salon-hero-card","style":{"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"borderColor":"primary"} -->
<div class="wp-block-cover nail-salon-hero-card has-border-color has-primary-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/hero-nail-salon.webp" alt="<?php echo esc_attr__( 'Woman with red manicured nails', 'elayne' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"floating-badge floating-badge--bl","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group floating-badge floating-badge--bl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-check-rose.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"x-small"} -->
<p class="has-main-color has-text-color has-x-small-font-size" style="font-weight:600"><?php esc_html_e( 'Certified Nail Artists', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
