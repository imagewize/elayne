<?php
/**
 * Title: Header with Social, Logo, and Hamburger (Light)
 * Slug: elayne/header-social-logo-hamburger-light
 * Description: Clean light header with left social icons, centered logo, and hamburger menu
 * Categories: header
 * Keywords: header, navigation, menu, logo, social, centered, hamburger, light
 * Block Types: core/template-part/header
 * Viewport Width: 1200
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-color has-base-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group has-main-color has-text-color has-link-color">

			<!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-resized is-style-default"><a href="https://facebook.com/cafejpcoen" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-facebook-fandb.svg" alt="Facebook" style="object-fit:cover;width:24px;height:24px"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-resized is-style-default"><a href="https://instagram.com/cafejpcoen" target="_blank" rel="noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-instagram-fandb.svg" alt="Instagram" style="object-fit:cover;width:24px;height:24px"/></a></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:group -->

		<!-- wp:site-logo {"width":112,"shouldSyncIcon":false,"className":"is-style-default"} /-->

		<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"base","overlayTextColor":"main","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<!-- wp:navigation-link {"label":"Home","url":"/"} /-->
			<!-- wp:navigation-link {"label":"Menu","url":"/menu"} /-->
			<!-- wp:navigation-link {"label":"Events","url":"/events"} /-->
			<!-- wp:navigation-link {"label":"Contact","url":"/contact"} /-->
		<!-- /wp:navigation -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
