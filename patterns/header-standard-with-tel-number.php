<?php
/**
 * Title: Header Standard with Phone Number
 * Slug: elayne/header-standard-with-tel-number
 * Description: Standard header with logo, inline navigation, and phone number
 * Categories: header
 * Keywords: header, standard, nav, phone, telephone, contact
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header"},"align":"full","className":"moiraine-light-header-standard","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"},"top":{},"right":{},"left":{}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<header class="wp-block-group alignfull moiraine-light-header-standard has-base-background-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0,"style":{"typography":{"fontFamily":"var:preset|font-family|primary","fontWeight":"600"}},"fontSize":"base"} /-->

		<!-- wp:paragraph {"className":"hide-on-desktop","style":{"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"base"} -->
		<p class="hide-on-desktop has-link-color has-base-font-size" style="font-weight:600"><a href="tel:+1234567890">📞 (123) 456-7890</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"overlayMenu":"mobile","openSubmenusOnClick":true,"hasClickableParents":true,"hasImprovedChevrons":true,"icon":"menu","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"base"} /-->

		<!-- wp:paragraph {"align":"right","className":"hide-on-mobile","style":{"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontSize":"base"} -->
		<p class="has-text-align-right hide-on-mobile has-link-color has-base-font-size" style="font-weight:600"><a href="tel:+1234567890">📞 (123) 456-7890</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
