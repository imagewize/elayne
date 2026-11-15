<?php
/**
 * Title: Home Bold Hero
 * Slug: elayne/home-bold-hero
 * Description: Oversized headline, lead text, two buttons and a dark textured stage with three overlapping demo-site screenshots
 * Categories: elayne/hero
 * Keywords: hero, home, bold, display, demos, stage, screenshots
 * Viewport Width: 1400
 * Block Types: core/group
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/home-bold-hero","name":"Home Bold Hero"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"align":"full","backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"align":"wide","fontSize":"xx-large"} -->
<h1 class="wp-block-heading alignwide has-xx-large-font-size"><?php echo wp_kses_post( __( 'One theme.<br>A site for every kind of business.', 'elayne' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"medium"} -->
<p class="has-main-accent-color has-text-color has-medium-font-size"><?php esc_html_e( 'Elayne is a WordPress block theme with ready-made sites for restaurants, spas, home services, salons and shops. Pick a style, insert a page, replace the words.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Download Elayne', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-base-background-color has-text-color has-background wp-element-button" href="#industries"><?php esc_html_e( 'See the demos', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"is-style-home-bold-stage home-bold-stage-hero","backgroundColor":"primary-alt","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-home-bold-stage home-bold-stage-hero has-primary-alt-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/home/demo-restaurant.webp" alt="<?php echo esc_attr__( 'Homepage of a restaurant demo site', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/home/demo-spa.webp" alt="<?php echo esc_attr__( 'Homepage of a spa demo site', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/home/demo-home-services.webp" alt="<?php echo esc_attr__( 'Homepage of a home services demo site', 'elayne' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
