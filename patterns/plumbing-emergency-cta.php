<?php
/**
 * Title: Plumbing Emergency CTA
 * Slug: elayne/plumbing-emergency-cta
 * Description: Full-width emergency call-to-action with phone number for 24/7 plumbing service
 * Categories: elayne/plumbing, elayne/call-to-action
 * Keywords: emergency, CTA, call, plumbing, 24/7, urgent, pipe burst
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"name":"Plumbing Emergency CTA","patternName":"elayne/plumbing-emergency-cta"},"align":"full","style":{"color":{"gradient":"linear-gradient(135deg, #B71C1C, #D32F2F)"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(135deg, #B71C1C, #D32F2F);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","className":"icon-pulse"} -->
		<figure class="wp-block-image aligncenter icon-pulse"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-alert-white.svg" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:heading {"textAlign":"center","textColor":"white","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Plumbing Emergency?', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"base"} -->
		<p class="has-text-align-center has-white-color has-text-color has-base-font-size"><?php esc_html_e( 'Our emergency crew is standing by — 24 hours a day, 7 days a week. Don\'t wait. Water damage gets worse by the minute.', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"is-style-plumbing-cta-actions","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-group is-style-plumbing-cta-actions"><!-- wp:group {"className":"is-style-plumbing-cta-call-pill","backgroundColor":"white","textColor":"primary","fontSize":"base","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.75em","bottom":"0.75em","left":"1.5em","right":"1.5em"},"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group is-style-plumbing-cta-call-pill has-primary-color has-white-background-color has-text-color has-background has-link-color has-base-font-size" style="border-radius:999px;padding-top:0.75em;padding-right:1.5em;padding-bottom:0.75em;padding-left:1.5em"><!-- wp:image {"className":"plumbing-cta-phone-icon"} -->
				<figure class="wp-block-image plumbing-cta-phone-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-phone-amber.svg" alt=""/></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"500"}}} -->
				<p class="has-primary-color has-text-color" style="font-weight:500"><?php echo wp_kses_post( sprintf( '<a href="tel:+15551234567">%s</a>', esc_html__( 'Call Now: (555) 123-4567', 'elayne' ) ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"border":{"radius":"999px","color":"rgba(255,255,255,0.75)","width":"2px"},"typography":{"fontSize":"var:preset|font-size|base"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-border-color has-custom-font-size wp-element-button" style="border-color:rgba(255,255,255,0.75);border-width:2px;border-radius:999px;font-size:var(--wp--preset--font-size--base)"><?php esc_html_e( 'Request a Callback', 'elayne' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
