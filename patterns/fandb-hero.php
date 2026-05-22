<?php
/**
 * Title: F+B Hero
 * Slug: elayne/fandb-hero
 * Description: Full-width hero with display heading, lead text, CTA buttons, and hero image with floating info chips.
 * Categories: elayne/hero, elayne/food-beverage
 * Keywords: hero, bistro, restaurant, wine bar, food, beverage, kafe
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/hero","elayne/food-beverage"],"patternName":"elayne/fandb-hero","name":"F+B Hero"},"align":"full","className":"is-style-fandb-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-fandb-hero has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"55%","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);flex-basis:55%"><!-- wp:paragraph {"className":"fandb-hero-stamp","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"600","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"var:preset|color|primary"}}} -->
<p class="fandb-hero-stamp" style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--primary);font-weight:600;letter-spacing:0.22em;text-transform:uppercase"><?php esc_html_e( "Tonight's Service · Open Now", 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"fandb-hero-title","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"700","lineHeight":"0.88","letterSpacing":"-0.035em"},"color":{"text":"var:preset|color|main"}}} -->
<h1 class="wp-block-heading fandb-hero-title has-text-color" style="color:var(--wp--preset--color--main);margin-top:0;margin-bottom:0;font-weight:700;letter-spacing:-0.035em;line-height:0.88"><?php echo wp_kses_post( __( 'Dine.<br>Drink.<br>Linger &amp; stay.', 'elayne' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.45"},"color":{"text":"var:preset|color|main-accent"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main-accent);font-size:var(--wp--preset--font-size--medium);line-height:1.45"><?php esc_html_e( 'A neighbourhood bistro and natural wine bar serving wood-fired plates, seasonal cocktails, and unhurried evenings on the terrace.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Reserve a Table', 'elayne' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( "Tonight's Menu", 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","className":"fandb-hero-figure"} -->
<div class="wp-block-column fandb-hero-figure" style="flex-basis:45%"><!-- wp:group {"className":"fandb-hero-figure-inner","backgroundColor":"tertiary","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-hero-figure-inner has-tertiary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/bistro/hero-wine-bar.webp" alt="<?php echo esc_attr__( 'Friends gathered around a table at the wine bar', 'elayne' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-hero-chip fandb-hero-chip-rating","style":{"spacing":{"padding":{"top":"0.6rem","right":"1rem","bottom":"0.6rem","left":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group fandb-hero-chip fandb-hero-chip-rating" style="padding-top:0.6rem;padding-right:1rem;padding-bottom:0.6rem;padding-left:1rem"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"600"},"color":{"text":"var:preset|color|main"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main);font-weight:600"><span style="color:var(--wp--preset--color--border-light)">&#9733;</span> 4.9 &nbsp;·&nbsp; <?php esc_html_e( '412 reviews', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-hero-chip fandb-hero-chip-open","backgroundColor":"primary","style":{"spacing":{"padding":{"top":"0.6rem","right":"1rem","bottom":"0.6rem","left":"1rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group fandb-hero-chip fandb-hero-chip-open has-primary-background-color has-background" style="padding-top:0.6rem;padding-right:1rem;padding-bottom:0.6rem;padding-left:1rem"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
<p style="margin-top:0;margin-bottom:0;color:#ffffff;font-weight:600"><?php esc_html_e( 'Open Now · Table for 2 →', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
