<?php
/**
 * Title: Announcement Bar
 * Slug: elayne/banner-announcement-bar
 * Description: Slim top bar for important announcements, promotions, or notices
 * Categories: elayne/banner
 * Keywords: banner, announcement, alert, notice, promotion, bar
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/banner"],"patternName":"elayne/banner-announcement-bar","name":"Announcement Bar"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-star-celebration-white.svg" alt="" style="width:20px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"base","fontFamily":"open-sans"} -->
			<p class="has-text-align-center has-base-color has-text-color has-open-sans-font-family has-base-font-size"><strong><?php esc_html_e( 'New Service Launch:', 'elayne' ); ?></strong> <?php esc_html_e( 'Schedule your free consultation today', 'elayne' ); ?> <a href="#"><?php esc_html_e( 'Learn More →', 'elayne' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
