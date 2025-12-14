<?php
/**
 * Title: Page Wide No Title
 * Slug: elayne/template-page-wide-no-title
 * Template Types: page
 * Description: This wide page layout with no title, perfect for building pages with patterns.
 * Categories: elayne/pages
 * Keywords: page, wide, no-title
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
