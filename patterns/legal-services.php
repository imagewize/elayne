<?php
/**
 * Title: Legal Services Grid
 * Slug: elayne/legal-services
 * Description: Six-column responsive grid of legal practice areas with custom SVG icons
 * Categories: elayne/legal, elayne/features
 * Keywords: services, law, legal, attorney, practice areas, family law, business law
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/legal","elayne/features"],"patternName":"elayne/legal-services","name":"Legal Services Grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Our Legal Services', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"fontSize":"base"} -->
		<p class="has-text-align-center has-base-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large)"><?php esc_html_e( 'Comprehensive legal representation across multiple practice areas', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|large"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding:var(--wp--preset--spacing--large)">
				<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a56db","#1a56db"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/family-law.svg" alt="<?php esc_attr_e( 'Family Law', 'elayne' ); ?>" style="width:64px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Family Law', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Divorce, custody, adoption, and family mediation services with compassionate representation.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|large"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding:var(--wp--preset--spacing--large)">
				<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a56db","#1a56db"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/business-law.svg" alt="<?php esc_attr_e( 'Business Law', 'elayne' ); ?>" style="width:64px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Business Law', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Contracts, formation, compliance, and commercial litigation for businesses of all sizes.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|large"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding:var(--wp--preset--spacing--large)">
				<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a56db","#1a56db"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/real-estate-law.svg" alt="<?php esc_attr_e( 'Real Estate Law', 'elayne' ); ?>" style="width:64px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Real Estate Law', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Property transactions, landlord-tenant disputes, and title examination services.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|large"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding:var(--wp--preset--spacing--large)">
				<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a56db","#1a56db"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/estate-planning.svg" alt="<?php esc_attr_e( 'Estate Planning', 'elayne' ); ?>" style="width:64px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Estate Planning', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Wills, trusts, probate administration, and comprehensive asset protection strategies.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|large"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding:var(--wp--preset--spacing--large)">
				<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a56db","#1a56db"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/litigation.svg" alt="<?php esc_attr_e( 'Litigation', 'elayne' ); ?>" style="width:64px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Litigation', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Civil litigation, appeals, and alternative dispute resolution for complex legal matters.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|large"},"border":{"width":"1px","radius":"8px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding:var(--wp--preset--spacing--large)">
				<!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#1a56db","#1a56db"]}}} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/criminal-defense.svg" alt="<?php esc_attr_e( 'Criminal Defense', 'elayne' ); ?>" style="width:64px"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Criminal Defense', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'DUI, misdemeanors, felonies, and expungement with aggressive defense representation.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
