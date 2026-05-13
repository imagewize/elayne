<?php
/**
 * Title: Overlapping Feature Columns Reversed
 * Slug: elayne/overlapping-feature-columns-reversed
 * Description: A two-column layout with overlapping text block and image. General-purpose variant.
 * Categories: elayne/features
 * Keywords: columns, image, text, feature, overlap, about, agency, business
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"metadata":{"categories":["elayne/features"],"patternName":"elayne/overlapping-feature-columns-reversed","name":"Overlapping Feature Columns Reversed"},"align":"wide","className":"is-style-overlap-columns-reversed","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide is-style-overlap-columns-reversed" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
  <!-- wp:column {"width":"50%","className":"overlap-column"} -->
  <div class="wp-block-column overlap-column" style="flex-basis:50%">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"base","className":"has-box-shadow"} -->
    <div class="wp-block-group has-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
      <!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary","fontSize":"small"} -->
      <p class="is-style-eyebrow has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Our Process', 'elayne' ); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:heading -->
      <h2 class="wp-block-heading"><?php esc_html_e( 'From Discovery to Launch, We Have You Covered', 'elayne' ); ?></h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p><?php esc_html_e( 'Every project begins with a deep-dive discovery session. We map your goals, analyse your audience, and define a clear roadmap — so every decision from design to deployment is grounded in strategy.', 'elayne' ); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <p><a href="#"><?php esc_html_e( 'See how we work →', 'elayne' ); ?></a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"60%"} -->
  <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/desktop.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Design work on a desktop screen', 'elayne' ); ?>"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->
