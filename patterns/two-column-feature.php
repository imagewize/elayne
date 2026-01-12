<?php
/**
 * Title: Two Column Feature
 * Slug: elayne/two-column-feature
 * Description: A two-column layout with a landscape image on the left and text content on the right.
 * Categories: elayne/features, elayne/spa
 * Keywords: spa, wellness, columns, image, text, feature, fitness, spa
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
  <!-- wp:column {"width":"50%"} -->
  <div class="wp-block-column" style="flex-basis:50%">
    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/yoga-pose.webp' ) ); ?>" alt="Spa treatment"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"2rem","left":"2rem"}}}} -->
  <div class="wp-block-column" style="padding-top:2rem;padding-left:2rem;flex-basis:50%">
    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary","fontSize":"small"} -->
    <p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">Fitness</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|cormorant-garamond"}}} -->
    <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--cormorant-garamond)">Build a Stronger Core with Us</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p>Discover our specialized core-building program designed to enhance your strength, improve posture, and promote overall wellness through mindful movement and targeted exercises.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="#">Read more →</a></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->