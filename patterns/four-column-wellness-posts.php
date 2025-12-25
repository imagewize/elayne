<?php
/**
 * Title: Four Column Wellness Posts
 * Slug: elayne/four-column-wellness-posts
 * Description: A four-column grid displaying recent posts with portrait images.
 * Categories: elayne/features, elayne/posts, elayne/spa
 * Keywords: spa, wellness, posts, columns, grid, wellness, spa
 * Viewport Width: 1400
 * Block Types: core/query
 * Inserter: true
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
  <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"fontFamily":"var:preset|font-family|cormorant-garamond","fontWeight":"600"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
  <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:3rem;font-family:var(--wp--preset--font-family--cormorant-garamond);font-weight:600">Wellness</h2>
  <!-- /wp:heading -->

  <!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
  <div class="wp-block-query">
    <!-- wp:post-template {"className":"spa-post-grid"} -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"1.5rem"}}}} -->
    <div class="wp-block-group" style="padding-top:0;padding-bottom:1.5rem">
      <!-- wp:post-featured-image {"isLink":true,"height":"290px","aspectRatio":"3/4","scale":"cover"} /-->
      
      <!-- wp:post-date {"fontSize":"small","style":{"spacing":{"margin":{"top":"1rem","bottom":"0.5rem"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"var:preset|color|primary"}}} /-->
      
      <!-- wp:post-title {"isLink":true,"fontSize":"medium","style":{"typography":{"fontFamily":"var:preset|font-family|cormorant-garamond","fontWeight":"600"}}} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->