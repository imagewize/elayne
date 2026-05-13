<?php
/**
 * Title: Hours & Location
 * Slug: elayne/fandb-hours-location
 * Description: Two-column layout with hours of operation and location information for restaurants and cafes
 * Categories: elayne/food-beverage
 * Keywords: hours, location, contact, address, phone, map, restaurant, cafe
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage"],"patternName":"elayne/fandb-hours-location","name":"Hours & Location"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"primary","fontFamily":"heading","fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-heading-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--large);font-weight:400"><?php esc_html_e( 'Visit Us', 'elayne' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:heading {"level":3,"textColor":"primary","fontFamily":"decorative","fontSize":"medium"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-decorative-font-family has-medium-font-size"><?php esc_html_e( 'Hours of Operation', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:paragraph {"textColor":"main","fontFamily":"body","fontSize":"base"} -->
					<p class="has-main-color has-text-color has-body-font-family has-base-font-size"><?php echo wp_kses_post( __( '<strong>Monday – Friday</strong><br>11:00 AM – 10:00 PM', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main","fontFamily":"body","fontSize":"base"} -->
					<p class="has-main-color has-text-color has-body-font-family has-base-font-size"><?php echo wp_kses_post( __( '<strong>Saturday</strong><br>10:00 AM – 11:00 PM', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main","fontFamily":"body","fontSize":"base"} -->
					<p class="has-main-color has-text-color has-body-font-family has-base-font-size"><?php echo wp_kses_post( __( '<strong>Sunday</strong><br>10:00 AM – 9:00 PM', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
					<p class="has-main-accent-color has-text-color has-body-font-family has-x-small-font-size" style="font-style:italic"><?php esc_html_e( 'Kitchen closes 30 minutes before closing time', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"border-light"} -->
				<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
				<!-- /wp:separator -->

				<!-- wp:heading {"level":3,"textColor":"primary","fontFamily":"decorative","fontSize":"medium"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-decorative-font-family has-medium-font-size"><?php esc_html_e( 'Contact Information', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:paragraph {"textColor":"main","fontFamily":"body","fontSize":"base"} -->
					<p class="has-main-color has-text-color has-body-font-family has-base-font-size"><?php echo wp_kses_post( __( '<strong>Phone</strong><br>(555) 123-4567', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main","fontFamily":"body","fontSize":"base"} -->
					<p class="has-main-color has-text-color has-body-font-family has-base-font-size"><?php echo wp_kses_post( __( '<strong>Email</strong><br>example@example.com', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"main","fontFamily":"body","fontSize":"base"} -->
					<p class="has-main-color has-text-color has-body-font-family has-base-font-size"><?php echo wp_kses_post( __( '<strong>Address</strong><br>123 Main Street<br>Your City, ST 12345', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:button {"backgroundColor":"border-light","textColor":"primary-alt","style":{"typography":{"fontWeight":"600"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-alt-color has-border-light-background-color has-text-color has-background wp-element-button" style="font-weight:600"><?php esc_html_e( 'Get Directions', 'elayne' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:heading {"level":3,"textColor":"primary","fontFamily":"decorative","fontSize":"medium"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-decorative-font-family has-medium-font-size"><?php esc_html_e( 'Location', 'elayne' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"main-accent","fontFamily":"body","fontSize":"small"} -->
				<p class="has-main-accent-color has-text-color has-body-font-family has-small-font-size"><?php esc_html_e( 'We\'re located in the heart of downtown, easily accessible by public transit and with nearby parking options available.', 'elayne' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"2px"}},"borderColor":"border-light","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

					<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
					<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php echo wp_kses_post( __( '<em>Map placeholder</em><br>Replace this section with your Google Maps embed or preferred map solution', 'elayne' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"textColor":"border-light","fontSize":"large"} -->
					<p class="has-text-align-center has-border-light-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);line-height:1">📍</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontFamily":"body","fontSize":"x-small"} -->
					<p class="has-text-align-center has-main-accent-color has-text-color has-body-font-family has-x-small-font-size"><?php esc_html_e( 'To add a map: Replace this group with an HTML block containing your Google Maps iframe embed code', 'elayne' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"textColor":"primary","fontFamily":"body","fontSize":"base"} -->
				<h4 class="wp-block-heading has-primary-color has-text-color has-body-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Follow Us', 'elayne' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","iconBackgroundColor":"primary-accent","iconBackgroundColorValue":"#169179","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"className":"is-style-fill"} -->
				<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-fill">
					<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
					<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
					<!-- wp:social-link {"url":"https://twitter.com","service":"x"} /-->
					<!-- wp:social-link {"url":"https://yelp.com","service":"yelp"} /-->
				</ul>
				<!-- /wp:social-links -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
