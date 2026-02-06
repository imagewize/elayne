<?php
/**
 * Title: F&B Hero - Split Layout
 * Slug: elayne/hero-fandb-split-layout
 * Description: Split layout hero with text on left, cafe interior image on right, light background, and "Order Online" CTA button
 * Categories: elayne/food-beverage, elayne/hero
 * Keywords: hero, cafe, coffee, food, beverage, split layout, modern, order online, two column
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage"],"patternName":"elayne/hero-fandb-split-layout","name":"F&B Hero - Split Layout"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4rem)","fontWeight":"400","lineHeight":"1.1"}},"textColor":"primary","fontFamily":"heading"} -->
<h1 class="wp-block-heading has-primary-color has-text-color has-heading-font-family" style="font-size:clamp(2.5rem, 6vw, 4rem);font-weight:400;line-height:1.1"><?php esc_html_e( 'Fresh Coffee & Artisan Pastries', 'elayne' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7","fontWeight":"400"}},"textColor":"primary-accent","fontFamily":"body"} -->
<p class="has-primary-accent-color has-text-color has-body-font-family" style="font-size:1.125rem;font-weight:400;line-height:1.7"><?php esc_html_e( 'Start your day with expertly brewed coffee and house-made pastries. We source local ingredients and craft each cup with care.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"border-light","textColor":"primary-alt","className":"has-custom-font-size has-body-font-family","style":{"border":{"radius":"4px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"1rem","fontStyle":"normal"}},"fontFamily":"body"} -->
<div class="wp-block-button has-custom-font-size has-body-font-family"><a class="wp-block-button__link has-primary-alt-color has-border-light-background-color has-text-color has-background has-body-font-family has-custom-font-size wp-element-button" style="border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:1rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Order Online', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/cafe-interior-about.webp" alt="<?php esc_attr_e( 'Cozy cafe interior with outdoor seating', 'elayne' ); ?>" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
