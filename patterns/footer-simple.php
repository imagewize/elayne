<?php
/**
 * Title: Footer Simple
 * Slug: elayne/footer-simple
 * Description: A minimal footer with single-line menu navigation
 * Categories: footer
 * Keywords: footer, simple, minimal
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer Simple"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|main"}}}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"base","textColor":"secondary","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-secondary-color has-base-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">© <?php echo esc_html( date( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">·</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="#"><?php esc_html_e( 'About', 'elayne' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">·</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="#"><?php esc_html_e( 'Contact', 'elayne' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">·</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="#"><?php esc_html_e( 'Privacy', 'elayne' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">·</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="#"><?php esc_html_e( 'Terms', 'elayne' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
