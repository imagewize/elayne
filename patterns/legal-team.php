<?php
/**
 * Title: Legal Team - Attorney Profiles
 * Slug: elayne/legal-team
 * Description: Showcase law firm attorneys with professional profiles in a responsive grid
 * Categories: elayne/legal, elayne/team
 * Keywords: legal, attorneys, lawyers, team, staff, profiles, law firm
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/legal","elayne/team"],"patternName":"elayne/legal-team","name":"Legal Team - Attorney Profiles"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"0"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Our Attorneys', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"textColor":"main-accent","fontSize":"medium"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large)"><?php esc_html_e( 'Experienced legal professionals dedicated to protecting your rights and achieving the best possible outcomes', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
		<div class="wp-block-group alignwide">
			<!-- Attorney 1 -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/attorney-1.webp" alt="<?php esc_attr_e( 'Attorney profile photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}},"textColor":"main","fontSize":"medium"} -->
					<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Michael Harrison, J.D.', 'elayne' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Senior Partner, Family Law', 'elayne' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"small"} -->
					<p class="has-main-accent-color has-text-color has-small-font-size" style="margin-top:0"><?php esc_html_e( 'With over 20 years of experience in family law, Michael provides compassionate representation in divorce, custody, and adoption matters.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- Attorney 2 -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/attorney-2.webp" alt="<?php esc_attr_e( 'Attorney profile photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}},"textColor":"main","fontSize":"medium"} -->
					<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Sarah Mitchell, J.D.', 'elayne' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Partner, Business & Corporate Law', 'elayne' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"small"} -->
					<p class="has-main-accent-color has-text-color has-small-font-size" style="margin-top:0"><?php esc_html_e( 'Sarah specializes in business formation, contracts, and commercial litigation, helping businesses navigate complex legal challenges.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- Attorney 3 -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/attorney-3.webp" alt="<?php esc_attr_e( 'Attorney profile photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}},"textColor":"main","fontSize":"medium"} -->
					<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'David Rodriguez, J.D.', 'elayne' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Associate Attorney, Estate Planning', 'elayne' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"small"} -->
					<p class="has-main-accent-color has-text-color has-small-font-size" style="margin-top:0"><?php esc_html_e( 'David focuses on wills, trusts, and estate administration, providing clients with comprehensive planning for their family\'s future.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
