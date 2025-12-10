<?php
/**
 * Title: Hero Section with Call to Action
 * Slug: elayne/hero-with-cta
 * Description: Business-focused hero section with headline, description, and prominent call-to-action button
 * Categories: elayne/hero, elayne/call-to-action
 * Keywords: hero, call-to-action, landing, business, header
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"textColor":"main","fontSize":"x-large","fontFamily":"open-sans"} -->
		<h1 class="wp-block-heading has-text-align-center has-main-color has-text-color has-open-sans-font-family has-x-large-font-size"><?php esc_html_e( 'Launch your idea with confidence', 'elayne' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"base","fontFamily":"open-sans"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-open-sans-font-family has-base-font-size"><?php esc_html_e( 'Build your product, attract users, and grow faster with our powerful tools designed for startups.', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-large)">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"8px"}},"fontSize":"base"} -->
		<div class="wp-block-button has-custom-font-size has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px"><?php esc_html_e( 'Get Started', 'elayne' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"backgroundColor":"base","textColor":"primary","className":"is-style-outline","style":{"border":{"radius":"8px","width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"base","borderColor":"primary"} -->
		<div class="wp-block-button has-custom-font-size has-base-font-size is-style-outline"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-link-color has-border-color has-primary-border-color wp-element-button" style="border-width:2px;border-radius:8px"><?php esc_html_e( 'Learn More', 'elayne' ); ?></a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
