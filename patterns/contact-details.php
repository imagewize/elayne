<?php
/**
 * Title: Contact Details Section
 * Slug: elayne/contact-details
 * Description: Professional contact section with office hours, phone, email, and address in a modern card layout
 * Categories: elayne/call-to-action, elayne/card, elayne/card-simple
 * Keywords: contact, address, phone, email, office, hours, location, details, simple
 * Viewport Width: 1200
 * Grid Config: 18rem (simple cards: icon + heading + contact info)
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/call-to-action","elayne/card"],"patternName":"elayne/contact-details","name":"Contact Details Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","textColor":"main","style":{"typography":{"lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontSize":"x-large","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-link-color has-open-sans-font-family has-x-large-font-size" style="line-height:1.1"><?php esc_html_e( 'Get In Touch', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"main","fontSize":"medium","fontFamily":"open-sans"} -->
	<p class="has-text-align-center has-main-color has-text-color has-open-sans-font-family has-medium-font-size" style="line-height:1.6"><?php esc_html_e( 'Tell us about your project and we\'ll respond within one business day with next steps.', 'elayne' ); ?></p>
	<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Office Hours', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size"><strong><?php esc_html_e( 'Monday - Friday', 'elayne' ); ?></strong><br><?php esc_html_e( '9:00 AM - 5:00 PM', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size"><?php esc_html_e( 'Weekend appointments available upon request', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Contact Details', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-link-color has-base-font-size"><strong><?php esc_html_e( 'Phone:', 'elayne' ); ?></strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-link-color has-base-font-size"><strong><?php esc_html_e( 'Email:', 'elayne' ); ?></strong> <a href="mailto:hello@example.com">hello@example.com</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size"><strong><?php esc_html_e( 'Response time:', 'elayne' ); ?></strong> <?php esc_html_e( 'Within 24 hours', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Visit Us', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size">
				<?php esc_html_e( '123 Business Street', 'elayne' ); ?><br>
				<?php esc_html_e( 'Suite 100', 'elayne' ); ?><br>
				<?php esc_html_e( 'City, State 12345', 'elayne' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main","fontSize":"base"} -->
			<p class="has-main-color has-text-color has-base-font-size"><?php esc_html_e( 'Free parking available for visitors', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-open-sans-font-family has-base-font-size has-custom-font-size wp-element-button" style="border-radius:8px"><?php esc_html_e( 'Schedule a Consultation', 'elayne' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
