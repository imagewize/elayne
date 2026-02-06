<?php
/**
 * Title: About Section with Image
 * Slug: elayne/fandb-about-intro
 * Description: Two-column about section with introduction text and cafe interior photo, includes "Read Our Story" CTA button
 * Categories: elayne/food-beverage, elayne/call-to-action
 * Keywords: about, introduction, story, cafe, restaurant, interior, read more, learn more
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage"],"patternName":"elayne/fandb-about-intro","name":"About Section with Image"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 2.5rem)","fontWeight":"400","lineHeight":"1.2"}},"textColor":"primary","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-heading-font-family" style="font-size:clamp(2rem, 4vw, 2.5rem);font-weight:400;line-height:1.2"><?php esc_html_e( 'Our Story', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Welcome to our cafe, where every cup tells a story and every meal is crafted with passion. Nestled in the heart of the community, we\'ve been serving locally-sourced cuisine and artisan beverages since our doors first opened.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'Our cozy atmosphere and dedication to quality have made us a beloved gathering place for neighbors, friends, and food enthusiasts alike. We believe in creating memorable experiences through exceptional food, warm hospitality, and a welcoming environment.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'From our signature roasts to our seasonal menu selections, everything we serve reflects our commitment to excellence and our love for bringing people together over great food.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button {"backgroundColor":"border-light","textColor":"primary-alt","className":"has-custom-font-size","style":{"border":{"radius":"4px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"1rem","fontStyle":"normal"}},"fontFamily":"body"} -->
<div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-primary-alt-color has-border-light-background-color has-text-color has-background has-body-font-family has-custom-font-size wp-element-button" href="/about" style="border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:1rem;font-style:normal;font-weight:600"><?php esc_html_e( 'Read Our Story', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/cafe-interior-about.webp" alt="<?php esc_attr_e( 'Cozy outdoor cafe seating area', 'elayne' ); ?>" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
