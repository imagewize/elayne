<?php
/**
 * Title: Hero Cover (Slanted)
 * Slug: elayne/hero-cover-slanted
 * Description: Full-height hero section with slanted gradient overlay on background image
 * Categories: elayne/hero
 * Keywords: hero, slanted, gradient, overlay, cover, image, background
 * Viewport Width: 1200
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/harbor-sunset.webp","alt":"<?php esc_attr_e( 'Harbor with boats at sunset', 'elayne' ); ?>","dimRatio":75,"gradient":"main-diagonal","minHeight":600,"minHeightUnit":"px","contentPosition":"top left","metadata":{"categories":["elayne/hero"],"patternName":"elayne/hero-cover-slanted","name":"Hero Cover (Slanted)"},"align":"full","className":"is-light diagonal-hero-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-top-left is-light diagonal-hero-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Harbor with boats at sunset', 'elayne' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/harbor-sunset.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-main-diagonal-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"left":"var:preset|spacing|small"}}},"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.5rem)","fontWeight":"700","textTransform":"uppercase","letterSpacing":"-0.5px","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"base","fontFamily":"open-sans"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--large);font-size:clamp(2rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.5px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Transform Your Vision Into Reality', 'elayne' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.165rem","lineHeight":"1.8","fontWeight":"300"}},"textColor":"base","fontFamily":"open-sans"} -->
<p class="has-base-color has-text-color has-open-sans-font-family" style="font-size:1.165rem;font-weight:300;line-height:1.8"><?php esc_html_e( 'We are a creative agency dedicated to crafting exceptional digital experiences. Our team combines strategic thinking with innovative design to help businesses stand out in the digital landscape. From brand identity to web development, we deliver solutions that drive results and inspire action. Partner with us to elevate your brand and connect with your audience in meaningful ways.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
