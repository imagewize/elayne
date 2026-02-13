<?php
/**
 * Title: Header Mobile
 * Slug: elayne/header-mobile
 * Description: Mobile-optimized header with hamburger menu and social icons
 * Categories: header
 * Keywords: header, mobile, nav, hamburger, menu
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header"},"align":"full","className":"moiraine-light-header-hamburger","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"},"top":{},"right":{},"left":{}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<header class="wp-block-group alignfull moiraine-light-header-hamburger has-base-background-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:navigation {"overlayMenu":"always","openSubmenusOnClick":true,"hasClickableParents":true,"hasImprovedChevrons":true,"icon":"menu","className":"moiraine-hamburger-large has-left-aligned-overlay","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"base"} /-->

<!-- wp:site-title {"level":0,"className":"has-bottom-border","style":{"typography":{"fontFamily":"var:preset|font-family|primary","fontWeight":"300"}},"fontSize":"medium"} /-->

<!-- wp:social-links {"iconColor":"main","iconColorValue":"#000000","showLabels":false,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"mastodon"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"bluesky"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
