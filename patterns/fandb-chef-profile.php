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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"primary","fontFamily":"heading"} -->
	<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-heading-font-family" style="margin-bottom:var(--wp--preset--spacing--large);font-size:2.5rem;font-weight:400">Meet Our Chef</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">

			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/chef-profile.webp" alt="Chef portrait" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"400"}},"textColor":"primary","fontFamily":"heading"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-heading-font-family" style="font-size:2rem;font-weight:400">Chef Alexandra Martinez</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontStyle":"italic"}},"textColor":"primary-accent","fontFamily":"body"} -->
				<p class="has-primary-accent-color has-text-color has-body-font-family" style="font-size:1.125rem;font-style:italic">Executive Chef &amp; Culinary Director</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"border-light","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"}},"textColor":"main","fontFamily":"body"} -->
				<p class="has-main-color has-text-color has-body-font-family" style="font-size:1rem;line-height:1.7">With over 15 years of culinary experience across three continents, Chef Alexandra brings a unique fusion of traditional techniques and modern innovation to every dish. Her passion for seasonal, locally-sourced ingredients shines through in her carefully crafted menus.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"}},"textColor":"main","fontFamily":"body"} -->
				<p class="has-main-color has-text-color has-body-font-family" style="font-size:1rem;line-height:1.7">Trained at Le Cordon Bleu Paris and having worked in Michelin-starred kitchens throughout Europe, Chef Alexandra's culinary philosophy centers on celebrating the natural flavors of premium ingredients while honoring sustainable farming practices.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">

					<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"600"}},"textColor":"primary","fontFamily":"body"} -->
					<h4 class="wp-block-heading has-primary-color has-text-color has-body-font-family" style="font-size:1.125rem;font-weight:600">Awards &amp; Recognition</h4>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"typography":{"fontSize":"0.9375rem"}},"textColor":"main-accent","fontFamily":"body"} -->
					<ul class="has-main-accent-color has-text-color has-body-font-family" style="font-size:0.9375rem">
						<!-- wp:list-item -->
						<li>James Beard Award Finalist (2023)</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Michelin Rising Star Chef (2021)</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Best New Restaurant - Culinary Excellence Awards (2020)</li>
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
