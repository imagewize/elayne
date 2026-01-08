<?php
/**
 * Title: Header Double Bar
 * Slug: elayne/header-double-bar
 * Description: Two-bar header with top contact bar (email, phone, search) and bottom navigation bar with left-aligned logo
 * Categories: elayne/header
 * Keywords: header, double, two bar, contact, phone, email, search, navigation
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header Double Bar"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<header class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Top Bar"},"align":"full","className":"hide-on-mobile","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hide-on-mobile has-border-light-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-email.svg" alt="" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="mailto:info@example.com">Email</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-phone.svg" alt="" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="tel:+31202103138">+31 20 – 210 31 38</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:elayne/search-overlay-trigger -->
<div class="wp-block-elayne-search-overlay-trigger"><figure class="wp-block-image size-full is-resized search-overlay-trigger" data-overlay-bg-color="rgba(255, 255, 255, 0.95)" data-border-color="#cccccc" data-close-button-color="#000000"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px"><g data-name="search"><path d="M20.71 19.29l-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z"></path></g></svg></figure></div>
<!-- /wp:elayne/search-overlay-trigger --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Bottom Bar"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title /-->

<!-- wp:navigation {"ref":11,"openSubmenusOnClick":true,"icon":"menu","style":{"spacing":{"blockGap":"var:preset|spacing|small"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"base","layout":{"type":"flex","justifyContent":"left"},"hasClickableParents":true,"hasImprovedChevrons":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
