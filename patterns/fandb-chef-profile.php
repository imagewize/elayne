<?php
/**
 * Title: Chef Profile
 * Slug: elayne/fandb-chef-profile
 * Description: Two-column layout with chef portrait photo and professional biography for restaurants and cafes
 * Categories: elayne/food-beverage, elayne/team
 * Keywords: chef, staff, team, profile, biography, restaurant, culinary
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage","elayne/team"],"patternName":"elayne/fandb-chef-profile","name":"Chef Profile"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"primary","fontFamily":"heading","fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-heading-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--large);font-weight:400"><?php esc_html_e( 'Meet Our Chef', 'elayne' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/chef-profile.webp" alt="<?php echo esc_attr__( 'Chef portrait', 'elayne' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"400"}},"textColor":"primary","fontFamily":"heading","fontSize":"medium"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-heading-font-family has-medium-font-size" style="font-weight:400"><?php esc_html_e( 'Chef Alexandra Martinez', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"primary-accent","fontFamily":"body","fontSize":"base"} -->
				<p class="has-primary-accent-color has-text-color has-body-font-family has-base-font-size" style="font-style:italic"><?php echo wp_kses_post( __( 'Executive Chef &amp; Culinary Director', 'elayne' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"border-light","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"main","fontFamily":"body","fontSize":"small"} -->
				<p class="has-main-color has-text-color has-body-font-family has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'With over 15 years of culinary experience across three continents, Chef Alexandra brings a unique fusion of traditional techniques and modern innovation to every dish. Her passion for seasonal, locally-sourced ingredients shines through in her carefully crafted menus.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"main","fontFamily":"body","fontSize":"small"} -->
				<p class="has-main-color has-text-color has-body-font-family has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Trained at Le Cordon Bleu Paris and having worked in Michelin-starred kitchens throughout Europe, Chef Alexandra\'s culinary philosophy centers on celebrating the natural flavors of premium ingredients while honoring sustainable farming practices.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">

					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontFamily":"body","fontSize":"base"} -->
					<h4 class="wp-block-heading has-primary-color has-text-color has-body-font-family has-base-font-size" style="font-weight:600"><?php echo wp_kses_post( __( 'Awards &amp; Recognition', 'elayne' ) ); ?></h4>
					<!-- /wp:heading -->

					<!-- wp:list {"textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
					<ul class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size">
						<!-- wp:list-item -->
						<li><?php esc_html_e( 'James Beard Award Finalist (2023)', 'elayne' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Michelin Rising Star Chef (2021)', 'elayne' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Best New Restaurant - Culinary Excellence Awards (2020)', 'elayne' ); ?></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
