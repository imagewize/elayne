<?php
/**
 * Title: Featured Post Two Columns (Portrait)
 * Slug: elayne/post-featured-two-columns
 * Description: Displays a single featured post with portrait image and title on the left, excerpt on the right. Shows posts tagged with "featured".
 * Categories: elayne/posts
 * Keywords: post, featured, two column, highlight, showcase, portrait
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types: post, page
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Featured Post Two Column"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"tagIds":[],"post_tag":[]},"tax":{"post_tag":[]}},"align":"wide","className":"featured-post-query"} -->
<div class="wp-block-query alignwide featured-post-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"2/3","sizeSlug":"elayne-portrait-small","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"border":{"bottom":{"width":"0px"}}},"fontSize":"x-large","className":"has-partial-underline has-partial-underline-center has-partial-underline-third"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-excerpt {"excerptLength":25,"moreText":"","showMoreOnNewLine":true,"linkToPost":true,"underlineLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"typography":{"lineHeight":"1.4"}},"fontSize":"large"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
