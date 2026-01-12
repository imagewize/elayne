<?php
/**
 * Title: Pricing Comparison
 * Slug: elayne/pricing-comparison
 * Description: Three-column pricing grid with feature comparison, monthly/annual toggle, and highlighted recommended plan
 * Categories: elayne/features, elayne/call-to-action, elayne/card-extended
 * Keywords: pricing, plans, comparison, subscription, membership, pricing table, complex, extended
 * Viewport Width: 1200
 * Grid Config: 19rem (complex pricing cards: heading + subheading + feature list + pricing + CTA)
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/features","elayne/call-to-action"],"patternName":"elayne/pricing-comparison","name":"Pricing Comparison"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Choose Your Perfect Plan', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"base"} -->
		<p class="has-text-align-center has-base-font-size"><?php esc_html_e( 'Flexible pricing plans designed to grow with your business needs', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);border-radius:16px">
			<!-- wp:heading {"level":3,"textAlign":"center","textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Guardian', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":4,"textAlign":"center","fontSize":"base"} -->
			<h4 class="wp-block-heading has-text-align-center has-base-font-size"><?php esc_html_e( 'What You\'ll Get', 'elayne' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-checkmark-list","textColor":"main"} -->
			<ul class="is-style-checkmark-list has-main-color has-text-color">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Edit up to 10 hours of podcast audio files.', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Set your own landing page', 'elayne' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:separator {"backgroundColor":"border-light","className":"is-style-dots"} -->
			<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-dots"/>
			<!-- /wp:separator -->

			<!-- wp:heading {"level":4,"textAlign":"center","textColor":"primary","fontSize":"x-large"} -->
			<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Free Forever', 'elayne' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"4px"}},"fontSize":"base"} -->
				<div class="wp-block-button has-custom-font-size has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( 'Choose', 'elayne' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"-2rem","bottom":"0"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"},"shadow":"var:preset|shadow|large"},"backgroundColor":"primary-alt","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-primary-alt-background-color has-background" style="margin-top:-2rem;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);border-radius:16px;box-shadow:var(--wp--preset--shadow--large)">
			<!-- wp:heading {"level":3,"textAlign":"center","textColor":"base","fontSize":"large"} -->
			<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size"><?php esc_html_e( 'Mage', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":4,"textAlign":"center","textColor":"base","fontSize":"base"} -->
			<h4 class="wp-block-heading has-text-align-center has-base-color has-text-color has-base-font-size"><?php esc_html_e( 'What You\'ll Get', 'elayne' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-checkmark-list","textColor":"base"} -->
			<ul class="is-style-checkmark-list has-base-color has-text-color">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Edit up to 1,000 hours of podcast audio files.', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Set your own landing page', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( '24/7 support', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Advanced analytics', 'elayne' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:separator {"className":"is-style-dots","style":{"color":{"background":"rgba(255,255,255,0.3)"}}} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-dots" style="background-color:rgba(255,255,255,0.3);color:rgba(255,255,255,0.3)"/>
			<!-- /wp:separator -->

			<!-- wp:heading {"level":4,"textAlign":"center","textColor":"base","fontSize":"x-large"} -->
			<h4 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size">$480<span style="font-size:50%;opacity:0.7;">/month</span></h4>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"50px"}},"fontSize":"base"} -->
				<div class="wp-block-button has-custom-font-size has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px"><?php esc_html_e( 'Choose', 'elayne' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);border-radius:16px">
			<!-- wp:heading {"level":3,"textAlign":"center","textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Phantom', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":4,"textAlign":"center","fontSize":"base"} -->
			<h4 class="wp-block-heading has-text-align-center has-base-font-size"><?php esc_html_e( 'What You\'ll Get', 'elayne' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-checkmark-list","textColor":"main"} -->
			<ul class="is-style-checkmark-list has-main-color has-text-color">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Edit up to 4,000 hours of podcast audio files.', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Set your own landing page', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( '24/7 support', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Advanced analytics', 'elayne' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Set sponsor deals', 'elayne' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:separator {"backgroundColor":"border-light","className":"is-style-dots"} -->
			<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-dots"/>
			<!-- /wp:separator -->

			<!-- wp:heading {"level":4,"textAlign":"center","textColor":"primary","fontSize":"x-large"} -->
			<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-x-large-font-size">$600<span style="font-size:50%;">/month</span></h4>
			<!-- /wp:heading -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"4px"}},"fontSize":"base"} -->
				<div class="wp-block-button has-custom-font-size has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( 'Choose', 'elayne' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
