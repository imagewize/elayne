<?php
/**
 * Title: Overlapping Review
 * Slug: elayne/review-text-image-overlap
 * Description: A two-column review with image and overlapping text block.
 * Categories: elayne/testimonials, elayne/spa
 * Keywords: spa, wellness, columns, image, text, review, overlap, spa
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"align":"wide","className":"is-style-overlap-columns-reversed","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide is-style-overlap-columns-reversed" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
  <!-- wp:column {"width":"50%","className":"overlap-column"} -->
  <div class="wp-block-column overlap-column" style="flex-basis:50%">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"backgroundColor":"base","className":"has-box-shadow"} -->
    <div class="wp-block-group has-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

      <!-- wp:paragraph -->
      <p>"The treatment I received at this spa exceeded all my expectations. The staff was professional and attentive, making me feel valued throughout my visit."</p>
      <!-- /wp:paragraph -->

      <!-- wp:separator {"className":"is-style-wide","backgroundColor":"border-light"} -->
      <hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-wide"/>
      <!-- /wp:separator -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
      <div class="wp-block-group">
        <!-- wp:image {"width":"100px","height":"100px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded-full is-style-rounded"} -->
        <figure class="wp-block-image size-thumbnail is-resized is-style-rounded-full is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/review-profile.webp' ) ); ?>" alt="Emma Johnson" style="object-fit:cover;width:100px;height:100px"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
          <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"}}} -->
          <p style="font-style:normal;font-weight:600">Emma Johnson</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"fontSize":"small"} -->
          <p class="has-small-font-size">Regular Client</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"60%"} -->
  <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/spa-treatment-landscape.webp' ) ); ?>" alt="Natural wellness supplements"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->
