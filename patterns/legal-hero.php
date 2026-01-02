<?php
/**
 * Title: Legal Services Hero
 * Slug: elayne/legal-hero
 * Description: Professional hero section for law firm with call-to-action buttons
 * Categories: elayne/legal, elayne/hero
 * Keywords: hero, law, legal, attorney, services, consultation
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/legal","elayne/hero"],"patternName":"elayne/legal-hero","name":"Legal Services Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"textColor":"main","style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontSize":"xx-large","fontFamily":"open-sans"} -->
			<h1 class="wp-block-heading has-main-color has-text-color has-link-color has-open-sans-font-family has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--x-large);line-height:1.1"><?php esc_html_e( 'Trusted Legal Counsel for ', 'elayne' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e( 'Families and Businesses', 'elayne' ); ?></mark></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"typography":{"lineHeight":"1.6"}},"textColor":"main","fontSize":"medium","fontFamily":"open-sans"} -->
			<p class="has-main-color has-text-color has-open-sans-font-family has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large);line-height:1.6"><?php esc_html_e( 'Experienced attorneys providing personalized legal solutions since 1998. We combine deep legal expertise with a commitment to understanding your unique needs and protecting your interests.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px"><?php esc_html_e( 'Schedule Consultation', 'elayne' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-base-font-size"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:8px"><?php esc_html_e( 'Our Services', 'elayne' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/hero-law-office.webp" alt="<?php esc_attr_e( 'Professional legal consultation', 'elayne' ); ?>" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
