<?php
/**
 * Title: Overlapping Feature Columns Reversed
 * Slug: elayne/overlapping-feature-columns-reversed
 * Description: A two-column layout with image and overlapping text block.
 * Categories: elayne/features, elayne/spa
 * Keywords: spa, wellness, columns, image, text, feature, fitness, overlap, spa
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"align":"wide","className":"is-style-overlap-columns-reversed","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide is-style-overlap-columns-reversed" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
  <!-- wp:column {"width":"50%","className":"overlap-column"} -->
  <div class="wp-block-column overlap-column" style="flex-basis:50%">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"base","className":"has-box-shadow"} -->
    <div class="wp-block-group has-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
      <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary","fontSize":"small"} -->
      <p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">Supplements</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|cormorant-garamond"}}} -->
      <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--cormorant-garamond)">Natural Supplements for Everyday Wellness</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Our premium Turmeric & Ginger Tummies provide anti-inflammatory benefits while supporting digestion. Pair with our Pure Collagen supplement to promote skin elasticity and joint health for a complete wellness routine.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <p><a href="#">Shop supplements →</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"60%"} -->
  <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/supplements.webp' ) ); ?>" alt="Natural wellness supplements"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->