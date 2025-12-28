<?php
/**
 * Title: Wellness Cover Highlight
 * Slug: elayne/wellness-cover-highlight
 * Description: A cover block with overlay and centered content box highlighting wellness content.
 * Categories: elayne/call-to-action, elayne/spa
 * Keywords: spa, wellness, cover, highlight, wellness, feature, call to action, cta, spa
 * Viewport Width: 1200
 * Block Types: core/cover
 * Inserter: true
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/spa-treatment-hot-stones.webp' ) ); ?>","alt":"Hot stone massage treatment at spa","dimRatio":50,"customOverlayColor":"#c8a993","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><img class="wp-block-cover__image-background" alt="Hot stone massage treatment at spa" src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/spa-treatment-hot-stones.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#c8a993"></span><div class="wp-block-cover__inner-container">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><strong>TRENDING •</strong> WELLNESS</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">How to Start Your Wellness Plan</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">READ MORE</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->