<?php
/**
 * Title: Contact Information Section
 * Slug: elayne/contact-info
 * Description: Professional contact section with office hours, phone, email, and address in a modern card layout
 * Categories: elayne/call-to-action
 * Keywords: contact, address, phone, email, office, hours, location
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/call-to-action"],"patternName":"elayne/contact-info","name":"Contact Information Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"textAlign":"center","textColor":"main","style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontSize":"x-large","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-link-color has-open-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--x-large);line-height:1.1"><?php esc_html_e( 'Get In Touch', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"typography":{"lineHeight":"1.6"}},"textColor":"main","fontSize":"medium","fontFamily":"open-sans"} -->
	<p class="has-text-align-center has-main-color has-text-color has-open-sans-font-family has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large);line-height:1.6"><?php esc_html_e( 'Tell us about your project and we\'ll respond within one business day with next steps.', 'elayne' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"320px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Office Hours', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Monday - Friday', 'elayne' ); ?></strong><br><?php esc_html_e( '9:00 AM - 5:00 PM', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'Weekend appointments available upon request', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Contact Details', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-link-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Phone:', 'elayne' ); ?></strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-link-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Email:', 'elayne' ); ?></strong> <a href="mailto:hello@example.com">hello@example.com</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size" style="margin-top:0"><strong><?php esc_html_e( 'Response time:', 'elayne' ); ?></strong> <?php esc_html_e( 'Within 24 hours', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Visit Us', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)">
				<?php esc_html_e( '123 Business Street', 'elayne' ); ?><br>
				<?php esc_html_e( 'Suite 100', 'elayne' ); ?><br>
				<?php esc_html_e( 'City, State 12345', 'elayne' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'Free parking available for visitors', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--xx-large)">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-open-sans-font-family has-base-font-size has-custom-font-size wp-element-button" style="border-radius:8px"><?php esc_html_e( 'Schedule a Consultation', 'elayne' ); ?></a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
