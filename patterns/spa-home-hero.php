<?php
/**
 * Title: Spa Home Hero
 * Slug: elayne/spa-home-hero
 * Description: A hero section with an overlapping colored box on an image background
 * Categories: elayne/hero, elayne/spa
 * Keywords: spa, wellness, hero, homepage, image, overlay, spa, welcome
 * Viewport Width: 1280
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"metadata":{"categories":["moiraine/features"],"patternName":"velora-spa/spa-home-hero","name":"Spa Home Hero"},"align":"full","className":"is-style-overlap-columns","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium"},"blockGap":{"top":"0","left":"0"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-columns alignfull is-style-overlap-columns has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/back-massage.webp' ) ); ?>" alt="Back massage treatment"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","className":"overlap-column"} -->
<div class="wp-block-column overlap-column" style="flex-basis:50%"><!-- wp:group {"className":"has-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">spa &amp; Retreat</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|cormorant-garamond"},"spacing":{"margin":{"top":"0.5rem","bottom":"1.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} -->
<h2 class="wp-block-heading has-main-color has-text-color has-link-color" style="margin-top:0.5rem;margin-bottom:1.5rem;font-family:var(--wp--preset--font-family--cormorant-garamond)">Welcome to Velora</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">Escape the hustle and embrace tranquility with our curated wellness experiences. From soothing massages to revitalizing therapies, immerse yourself in a journey of relaxation and rejuvenation</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><a href="#">Learn more →</a></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->