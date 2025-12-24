<?php
/**
 * Title: Page Hero (No Top Padding)
 * Slug: elayne/template-page-hero
 * Template Types: page
 * Description: Page template with header/footer and no top padding, ideal for full-width hero patterns.
 * Categories: elayne/pages
 * Keywords: page, hero, no-top-padding
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|xx-large"}}}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
