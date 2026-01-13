<?php
/**
 * Title: Modern Hero - Light
 * Slug: elayne/hero-modern-light
 * Categories: elayne/hero
 * Keywords: hero, banner, cta, header, light
 * Block Types: core/group
 * Description: A modern centered hero with light gradient background, headline, tagline, CTA buttons and image below
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 4.5rem)","fontWeight":"800","lineHeight":"1.1","letterSpacing":"-0.02em"}},"textColor":"main"} -->
		<h1 class="wp-block-heading has-text-align-center has-main-color has-text-color" style="font-size:clamp(2.75rem, 6vw, 4.5rem);font-weight:800;line-height:1.1;letter-spacing:-0.02em">Elevate your business presence online</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.7"}},"textColor":"main-accent","fontSize":"medium"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-medium-font-size" style="font-size:1.25rem;line-height:1.7">Create engaging digital experiences that connect with your audience. Showcase your expertise, build trust, and grow your business with a professional web presence.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.875rem","bottom":"0.875rem"}},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
			<div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:8px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-size:1rem;font-weight:600">Get started</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"backgroundColor":"tertiary","textColor":"main","style":{"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--border-light)"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.875rem","bottom":"0.875rem"}},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
			<div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background has-border-color has-custom-font-size wp-element-button" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-size:1rem;font-weight:600">Learn more →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
		<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri() . '/patterns/images/desktop.webp'); ?>" alt="Dashboard preview" style="border-radius:12px"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
