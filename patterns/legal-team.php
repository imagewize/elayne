<?php
/**
 * Title: Legal Team - Attorney Profiles
 * Slug: elayne/legal-team
 * Description: Showcase law firm attorneys with professional profiles in a responsive grid
 * Categories: elayne/legal, elayne/team, elayne/card, elayne/card-profiles
 * Keywords: legal, attorneys, lawyers, team, staff, profiles, law firm
 * Viewport Width: 1200
 * Grid Config: 20rem (profile cards: attorney photo + name + title + description)
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/legal","elayne/team","elayne/card"],"patternName":"elayne/legal-team","name":"Legal Team - Attorney Profiles"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Our Attorneys', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"medium"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-medium-font-size"><?php esc_html_e( 'Experienced legal professionals dedicated to protecting your rights and achieving the best possible outcomes', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/attorney-1.webp" alt="<?php esc_attr_e( 'Attorney profile photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"level":3,"textColor":"main","fontSize":"medium"} -->
					<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size"><?php esc_html_e( 'Michael Harrison, J.D.', 'elayne' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Senior Partner, Family Law', 'elayne' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
					<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'With over 20 years of experience in family law, Michael provides compassionate representation in divorce, custody, and adoption matters.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/attorney-2.webp" alt="<?php esc_attr_e( 'Attorney profile photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"level":3,"textColor":"main","fontSize":"medium"} -->
					<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size"><?php esc_html_e( 'Sarah Mitchell, J.D.', 'elayne' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Partner, Business & Corporate Law', 'elayne' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
					<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Sarah specializes in business formation, contracts, and commercial litigation, helping businesses navigate complex legal challenges.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/legal/attorney-3.webp" alt="<?php esc_attr_e( 'Attorney profile photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:heading {"level":3,"textColor":"main","fontSize":"medium"} -->
					<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size"><?php esc_html_e( 'David Rodriguez, J.D.', 'elayne' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size"><strong><?php esc_html_e( 'Associate Attorney, Estate Planning', 'elayne' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
					<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'David focuses on wills, trusts, and estate administration, providing clients with comprehensive planning for their family\'s future.', 'elayne' ); ?></p>
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
