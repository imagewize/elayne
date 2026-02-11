<?php
/**
 * Title: F&B Hero - Full-Width Cover
 * Slug: elayne/hero-fandb-cover-fullwidth
 * Description: Full-width cover hero with cafe terrace background image, dark overlay, centered text, and dual CTA buttons (Reservations + View Menu)
 * Categories: elayne/food-beverage, elayne/hero
 * Keywords: hero, restaurant, cafe, terrace, food, beverage, reservation, menu, outdoor seating, full-width, cover
 * Viewport Width: 1200
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/cafe-terrace-hero.webp","alt":"<?php esc_attr_e( 'Charming outdoor cafe terrace seating', 'elayne' ); ?>","dimRatio":60,"overlayColor":"primary-alt","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","contentPosition":"center center","metadata":{"categories":["elayne/food-beverage"],"patternName":"elayne/hero-fandb-cover-fullwidth","name":"F&B Hero - Full-Width Cover"},"align":"full","className":"is-dark","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-dark" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Charming outdoor cafe terrace seating', 'elayne' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/cafe-terrace-hero.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-alt-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4rem)","fontWeight":"400","lineHeight":"1.1","textTransform":"uppercase"}},"textColor":"base","fontFamily":"heading"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-heading-font-family" style="font-size:clamp(2.5rem, 6vw, 4rem);font-weight:400;line-height:1.1;text-transform:uppercase"><?php esc_html_e( 'Experience Authentic Flavors at Kafe', 'elayne' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7","fontWeight":"400"}},"textColor":"base","fontFamily":"body"} -->
<p class="has-text-align-center has-base-color has-text-color has-body-font-family" style="font-size:1.125rem;font-weight:400;line-height:1.7"><?php esc_html_e( 'Join us for unforgettable dining on our beautiful terrace. Fresh ingredients, crafted cocktails, and warm hospitality await.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"border-light","textColor":"primary-alt","className":"has-custom-font-size has-body-font-family","style":{"border":{"radius":"4px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"1rem","fontStyle":"normal"}},"fontFamily":"body"} -->
<div class="wp-block-button has-custom-font-size has-body-font-family"><a class="wp-block-button__link has-primary-alt-color has-border-light-background-color has-text-color has-background has-body-font-family has-custom-font-size wp-element-button" style="border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:1rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Reserve Your Table', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","textColor":"primary-alt","className":"has-custom-font-size has-body-font-family is-style-outline","style":{"border":{"radius":"4px","width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"1rem","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary-alt"}}}},"fontFamily":"body","borderColor":"base"} -->
<div class="wp-block-button has-custom-font-size has-body-font-family is-style-outline"><a class="wp-block-button__link has-primary-alt-color has-base-background-color has-text-color has-background has-link-color has-border-color has-base-border-color has-body-font-family has-custom-font-size wp-element-button" style="border-width:2px;border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:1rem;font-style:normal;font-weight:600"><?php esc_html_e( 'View Our Menu', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
