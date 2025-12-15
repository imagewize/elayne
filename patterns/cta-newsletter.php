<?php
/**
 * Title: Newsletter Signup CTA
 * Slug: elayne/cta-newsletter
 * Description: Call-to-action block for newsletter subscription or lead capture
 * Categories: elayne/call-to-action
 * Keywords: cta, newsletter, signup, subscribe, lead-generation
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/call-to-action"],"patternName":"elayne/cta-newsletter","name":"Newsletter Signup CTA"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-accent","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"textColor":"main","style":{"typography":{"fontSize":"xx-large","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontFamily":"open-sans"} -->
			<h2 class="wp-block-heading has-main-color has-text-color has-link-color has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--x-large);font-size:xx-large;line-height:1.1"><?php esc_html_e( 'Get Weekly Business Growth ', 'elayne' ); ?><span class="has-inline-color has-primary-color"><?php esc_html_e( 'Insights', 'elayne' ); ?></span></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"typography":{"lineHeight":"1.6"}},"textColor":"main","fontSize":"medium","fontFamily":"open-sans"} -->
			<p class="has-main-color has-text-color has-open-sans-font-family has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--x-large);line-height:1.6"><?php esc_html_e( 'Join 5,000+ business owners receiving actionable strategies, industry trends, and exclusive resources directly to their inbox.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px"><?php esc_html_e( 'Subscribe Now', 'elayne' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'No spam. Unsubscribe anytime.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
