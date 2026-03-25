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
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/yoga-pose.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Spa treatment', 'elayne' ); ?>"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
  <div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:50%">
    <!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary","fontSize":"small"} -->
    <p class="is-style-eyebrow has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Fitness', 'elayne' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading"><?php esc_html_e( 'Build a Stronger Core with Us', 'elayne' ); ?></h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph -->
    <p><?php esc_html_e( 'Discover our specialized core-building program designed to enhance your strength, improve posture, and promote overall wellness through mindful movement and targeted exercises.', 'elayne' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><a href="#"><?php esc_html_e( 'Read more →', 'elayne' ); ?></a></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->