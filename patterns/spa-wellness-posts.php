<?php
/**
 * Title: Spa Wellness Blog Posts
 * Slug: elayne/spa-wellness-posts
 * Description: Two-column blog post grid with landscape images, title and excerpt for the spa wellness page.
 * Categories: elayne/spa, elayne/posts
 * Keywords: spa, wellness, blog, posts, landscape
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/spa","elayne/posts"],"patternName":"elayne/spa-wellness-posts","name":"Spa Wellness Blog Posts"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:query {"queryId":3,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"30rem"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Post Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","sizeSlug":"large","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color has-x-small-font-size"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"border":{"bottom":{"width":"0px"}}},"fontSize":"medium","className":"has-partial-underline has-partial-underline-center has-partial-underline-third"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"moreText":"","showMoreOnNewLine":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
