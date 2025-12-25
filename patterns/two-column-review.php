<?php
/**
 * Title: Two Column Review
 * Slug: elayne/two-column-review
 * Description: A two-column layout with text on the left and image on the right, designed for testimonials or reviews
 * Categories: elayne/cards, elayne/testimonials, elayne/spa
 * Keywords: spa, wellness, review, testimonial, text, image, columns, spa
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"categories":["elayne/cards","elayne/testimonials","elayne/spa"],"patternName":"elayne/two-column-review","name":"Two Column Review"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%","className":"is-style-shadow-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-style-shadow-light has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"100"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:italic;font-weight:100">"The treatment I received at this spa exceeded all my expectations. The staff was professional and attentive, making me feel valued throughout my visit."</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","height":"100px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded-full is-style-rounded"} -->
<figure class="wp-block-image size-thumbnail is-resized is-style-rounded-full is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/review-profile.webp' ) ); ?>" alt="Emma Johnson" style="object-fit:cover;width:100px;height:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"}}} -->
<p style="font-style:normal;font-weight:600">Emma Johnson</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Regular Client</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:0;flex-basis:50%"><!-- wp:image {"sizeSlug":"full","align":"right","className":"is-style-shadow-light","style":{"border":{"width":"5px"}},"borderColor":"base"} -->
<figure class="wp-block-image alignright size-full has-custom-border is-style-shadow-light"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/spa-treatment-zoomed.webp' ) ); ?>" alt="Spa Treatment" class="has-border-color has-base-border-color" style="border-width:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
