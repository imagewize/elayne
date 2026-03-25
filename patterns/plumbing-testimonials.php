<?php
/**
 * Title: Plumbing Customer Testimonials
 * Slug: elayne/plumbing-testimonials
 * Description: Three-column testimonial grid with star ratings and review platform logos
 * Categories: elayne/plumbing, elayne/testimonial
 * Keywords: testimonials, reviews, customers, plumbing, google, yelp, ratings
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"name":"Plumbing Testimonials","patternName":"elayne/plumbing-testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"is-style-plumbing-section-label"} -->
		<p class="has-text-align-center is-style-plumbing-section-label"><?php esc_html_e( 'Real Reviews', 'elayne' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"white","fontSize":"large"} -->
		<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-large-font-size"><?php esc_html_e( 'What Our Customers Say', 'elayne' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"main-accent"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color"><?php esc_html_e( "Don't just take our word for it — here's what our neighbors think.", 'elayne' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"metadata":{"name":"Testimonial Card 1"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-5-stars.svg" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php esc_html_e( 'Fast response time and excellent service! Fixed our burst pipe in the middle of the night and saved us from major water damage. Professional, quick, and didn\'t overcharge.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"is-style-plumbing-avatar","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group is-style-plumbing-avatar">
					<!-- wp:paragraph {"textColor":"white","fontSize":"x-small"} -->
					<p class="has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'SJ', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"white","fontSize":"small"} -->
					<p class="has-white-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Sarah J.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
					<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Homeowner · Google Review', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Testimonial Card 2 — Featured"},"className":"plumbing-t-featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group plumbing-t-featured has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-5-stars.svg" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php esc_html_e( 'Professional, courteous, and reasonably priced. They installed our new water heater and explained everything clearly — no upselling, no runaround. Exactly what you want.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"is-style-plumbing-avatar","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group is-style-plumbing-avatar">
					<!-- wp:paragraph {"textColor":"white","fontSize":"x-small"} -->
					<p class="has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'MT', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"white","fontSize":"small"} -->
					<p class="has-white-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Michael T.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
					<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Business Owner · Yelp Review', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Testimonial Card 3"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"secondary","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-border-color has-border-light-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-5-stars.svg" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php esc_html_e( 'Reliable and trustworthy. We\'ve used them for all our plumbing needs for years and they never disappoint. Showed up on time and left the place spotless.', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"is-style-plumbing-avatar","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group is-style-plumbing-avatar">
					<!-- wp:paragraph {"textColor":"white","fontSize":"x-small"} -->
					<p class="has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'ER', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"white","fontSize":"small"} -->
					<p class="has-white-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Emily R.', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main-accent","fontSize":"x-small"} -->
					<p class="has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Property Manager · Google Review', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"top":"var:preset|spacing|large"}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;padding-top:var(--wp--preset--spacing--large)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-google-amber.svg" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '4.9 on Google', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-star-amber.svg" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '5.0 on Yelp', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/icon-users-amber.svg" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
			<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( '2,400+ Happy Customers', 'elayne' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
