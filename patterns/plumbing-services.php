<?php
/**
 * Title: Plumbing Services Grid
 * Slug: elayne/plumbing-services
 * Description: Six-card responsive grid of plumbing services with SVG icons
 * Categories: elayne/plumbing, elayne/features, elayne/card-simple
 * Keywords: services, plumbing, leak, drain, water heater, pipes, sewer, commercial
 * Viewport Width: 1200
 * Grid Config: 18rem (simple cards: icon + title + short description)
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/features","elayne/card-simple"],"patternName":"elayne/plumbing-services","name":"Plumbing Services Grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"is-style-plumbing-section-label","style":{"typography":{"fontWeight":"600","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
			<p class="has-text-align-center is-style-plumbing-section-label has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'What We Do', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"}},"textColor":"white","fontSize":"large"} -->
			<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-large-font-size" style="line-height:1.2"><?php esc_html_e( 'Complete Plumbing Solutions', 'elayne' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"base"} -->
			<p class="has-text-align-center has-main-accent-color has-text-color has-base-font-size"><?php esc_html_e( 'From minor repairs to full pipe replacement — every job done right, the first time.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-plumbing-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-plumbing-service-card has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-leak.svg" alt="<?php esc_attr_e( 'Leak Detection and Repair', 'elayne' ); ?>" style="width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"base"} -->
			<h3 class="wp-block-heading has-white-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Leak Detection & Repair', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Advanced electronic detection finds hidden leaks fast — in walls, floors, and underground lines.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-plumbing-featured-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"primary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-plumbing-featured-card has-border-color has-primary-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-drain.svg" alt="<?php esc_attr_e( 'Drain Cleaning', 'elayne' ); ?>" style="width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"base"} -->
			<h3 class="wp-block-heading has-white-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Drain Cleaning', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Hydro-jetting and snake services clear even the most stubborn clogs in drains and sewer lines.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-plumbing-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-plumbing-service-card has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-water-heater.svg" alt="<?php esc_attr_e( 'Water Heater Services', 'elayne' ); ?>" style="width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"base"} -->
			<h3 class="wp-block-heading has-white-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Water Heater Services', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Installation, repair, and replacement of tank and tankless water heaters — all brands.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-plumbing-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-plumbing-service-card has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-pipe.svg" alt="<?php esc_attr_e( 'Pipe Repair and Replacement', 'elayne' ); ?>" style="width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"base"} -->
			<h3 class="wp-block-heading has-white-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Pipe Repair & Replacement', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'From patching a small crack to full repiping — copper, PEX, and PVC solutions for every home.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-plumbing-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-plumbing-service-card has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-sewer.svg" alt="<?php esc_attr_e( 'Sewer Line Services', 'elayne' ); ?>" style="width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"base"} -->
			<h3 class="wp-block-heading has-white-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Sewer Line Services', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Video camera inspection, trenchless repair, and full sewer line replacement with minimal disruption.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-plumbing-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-plumbing-service-card has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-commercial.svg" alt="<?php esc_attr_e( 'Commercial Plumbing', 'elayne' ); ?>" style="width:40px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"white","fontSize":"base"} -->
			<h3 class="wp-block-heading has-white-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Commercial Plumbing', 'elayne' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Full-service commercial plumbing for offices, restaurants, and multi-unit properties of any size.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
