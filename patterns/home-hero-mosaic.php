<?php
/**
 * Title: Home Hero with Industry Mosaic
 * Slug: elayne/home-hero-mosaic
 * Description: Hero with a headline, two buttons and a four-photo mosaic of labelled industries
 * Categories: elayne/hero
 * Keywords: hero, home, mosaic, industries, photos
 * Viewport Width: 1200
 * Block Types: core/group
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/home-hero-mosaic","name":"Home Hero with Industry Mosaic"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-x-large-font-size"><?php echo wp_kses_post( __( 'One theme.<br>A site for every kind of business.', 'elayne' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Elayne is a WordPress block theme with ready-made sites for restaurants, spas, home services, salons, shops and more. Pick a style, insert a page, replace the words.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Download Elayne', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See the demos', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:group {"className":"is-style-home-mosaic","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-mosaic"><!-- wp:group {"className":"home-mosaic-tile home-mosaic-tile-tall","layout":{"type":"default"}} -->
<div class="wp-block-group home-mosaic-tile home-mosaic-tile-tall"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/bistro/hero-wine-bar.webp" alt="<?php echo esc_attr__( 'Guests raising wine glasses at a bar', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Restaurants', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"home-mosaic-tile home-mosaic-tile-wide","layout":{"type":"default"}} -->
<div class="wp-block-group home-mosaic-tile home-mosaic-tile-wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/spa/spa-treatment-hot-stones.webp" alt="<?php echo esc_attr__( 'A hot stone massage', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Spa and wellness', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"home-mosaic-tile","layout":{"type":"default"}} -->
<div class="wp-block-group home-mosaic-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/hero-plumbing.webp" alt="<?php echo esc_attr__( 'Polished brass taps', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Home services', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"home-mosaic-tile","layout":{"type":"default"}} -->
<div class="wp-block-group home-mosaic-tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/store/leather-bag.webp" alt="<?php echo esc_attr__( 'A leather bag with a tie and notebook', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Shops', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
