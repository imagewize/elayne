<?php
/**
 * Title: Header Editorial
 * Slug: elayne/header-editorial
 * Description: Editorial header with brand logo, centered navigation, and status pill
 * Categories: header
 * Keywords: header, editorial, brand, logo, status, nav
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"categories":["header"],"patternName":"elayne/header-editorial","name":"Header"},"align":"full","className":"elayne-editorial-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"inherit":true,"type":"constrained"}} -->
<header class="wp-block-group alignfull elayne-editorial-header has-link-color" style="margin-top:0;margin-bottom:0;border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"className":"is-style-brand-logo"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"},"fontSize":"small"} -->
<!-- wp:navigation-link {"label":"Work","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Journal","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:paragraph {"className":"is-style-status-pill"} -->
<p class="wp-block-paragraph is-style-status-pill"><?php esc_html_e( 'Open · 2 spots Q2', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
