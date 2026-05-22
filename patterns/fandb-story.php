<?php
/**
 * Title: F+B Our Story
 * Slug: elayne/fandb-story
 * Description: Magazine-layout two-column story section with image, eyebrow, display heading, pull quote, and chef signature.
 * Categories: elayne/about, elayne/food-beverage
 * Keywords: story, about, chef, bistro, restaurant, food, beverage, kafe
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/about","elayne/food-beverage"],"patternName":"elayne/fandb-story","name":"F+B Our Story"},"align":"full","className":"is-style-fandb-story","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-fandb-story has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"50%","className":"fandb-story-imagewrap"} -->
<div class="wp-block-column fandb-story-imagewrap" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/bistro/kitchen-interior.webp" alt="<?php echo esc_attr__( 'Chef plating in the kitchen', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"fandb-image-tag","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|main"}}} -->
<p class="fandb-image-tag" style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main)"><?php esc_html_e( 'Chapter 01 — The Kitchen', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"50%","className":"fandb-story-text","style":{"spacing":{"padding":{"top":"0"}}}} -->
<div class="wp-block-column fandb-story-text" style="padding-top:0;flex-basis:50%"><!-- wp:paragraph {"className":"fandb-eyebrow","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-eyebrow" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Since 2018 · Heritage Lane', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"0.92"}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0;line-height:0.92"><?php echo wp_kses_post( __( 'A small room, an <em>open fire</em>, and the people we feed.', 'elayne' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|main"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main);font-size:var(--wp--preset--font-size--medium);line-height:1.55"><?php esc_html_e( 'What began as a six-table espresso bar has grown into the neighbourhood\'s table. We still roast our own beans on Mondays, still hand-write the menu each morning, still pour the first glass of natural wine the moment the lamps come on.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:quote {"className":"fandb-pull-quote","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<blockquote class="wp-block-quote fandb-pull-quote" style="margin-top:0;margin-bottom:0"><p><?php esc_html_e( 'Cook for the people in front of you, with what the day brought in. Everything else is just decoration.', 'elayne' ); ?></p></blockquote>
<!-- /wp:quote -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.55"},"color":{"text":"var:preset|color|main"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main);font-size:var(--wp--preset--font-size--medium);line-height:1.55"><?php esc_html_e( 'Our kitchen is built around a single wood-fired hearth and an unreasonable obsession with provenance — vegetables from the urban farm three streets over, fish from the morning market, sourdough from our own starter.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-sig-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-sig-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Alexandra Reyes', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-sig-role","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-sig-role" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Chef and Co-Owner', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
