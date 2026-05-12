<?php
/**
 * Title: Overlapping Feature Columns
 * Slug: elayne/overlapping-feature-columns
 * Description: A two-column layout with image and overlapping text block. General-purpose variant.
 * Categories: elayne/features
 * Keywords: columns, image, text, feature, overlap, about, agency, business
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"metadata":{"categories":["elayne/features"],"patternName":"elayne/overlapping-feature-columns","name":"Overlapping Feature Columns"},"align":"wide","className":"is-style-overlap-columns","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide is-style-overlap-columns" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
  <!-- wp:column {"width":"60%"} -->
  <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/computer-hands.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Team collaborating on a digital project', 'elayne' ); ?>"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"50%","className":"overlap-column"} -->
  <div class="wp-block-column overlap-column" style="flex-basis:50%">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"base","className":"has-box-shadow"} -->
    <div class="wp-block-group has-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
      <!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary","fontSize":"small"} -->
      <p class="is-style-eyebrow has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Our Approach', 'elayne' ); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:heading -->
      <h2 class="wp-block-heading"><?php esc_html_e( 'Strategic Solutions Built Around Your Goals', 'elayne' ); ?></h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p><?php esc_html_e( 'We combine deep industry expertise with data-driven insight to craft digital strategies that deliver measurable results. From web development to marketing, our team partners with you at every stage.', 'elayne' ); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <p><a href="#"><?php esc_html_e( 'Learn more about us →', 'elayne' ); ?></a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->
