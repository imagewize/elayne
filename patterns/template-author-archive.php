<?php
/**
 * Title: Author Archive Page
 * Slug: elayne/template-author-archive
 * Description: The author archive template: avatar, name and profile biography of the author, followed by their posts.
 * Categories: elayne/pages
 * Keywords: author, archive, bio, blog
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","theme":"elayne","tagName":"header"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Author Header"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"elayne/author","args":{"field":"avatar"}},"alt":{"source":"elayne/author","args":{"field":"name"}}}},"style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="" alt="" style="border-radius:100px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"740px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"metadata":{"bindings":{"content":{"source":"elayne/author","args":{"field":"name"}}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:600"></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"elayne/author","args":{"field":"bio"}}}},"textColor":"secondary","className":"elayne-author-bio"} -->
<p class="elayne-author-bio has-secondary-color has-text-color"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:pattern {"slug":"elayne/post-loop-grid"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"elayne","tagName":"footer"} /-->
