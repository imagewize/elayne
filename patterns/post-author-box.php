<?php
/**
 * Title: Post Author Box
 * Slug: elayne/post-author-box
 * Description: Author card for single posts: avatar, name linked to the author archive, and the biography from the user profile.
 * Categories: elayne/posts
 * Keywords: author, bio, byline, post
 * Viewport Width: 1500
 * Block Types: core/post-author
 * Post Types: post
 * Inserter: false
 */
?>
<!-- wp:group {"metadata":{"name":"Author Box"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"5px"}},"backgroundColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:avatar {"size":72,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'Written by', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontWeight":"600"}}} /-->

<!-- wp:post-author-biography {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
