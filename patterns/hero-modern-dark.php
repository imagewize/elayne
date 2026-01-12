<?php
/**
 * Title: Modern Hero - Dark
 * Slug: elayne/hero-modern-dark
 * Categories: elayne/hero
 * Keywords: hero, banner, cta, header, dark
 * Block Types: core/group
 * Description: A modern centered hero with dark gradient background, headline, tagline, CTA buttons and image below
 */
?>

<!-- wp:group {"metadata":{"categories":["banner"],"patternName":"elayne/hero-modern-dark","name":"Modern Hero - Dark"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"},"color":{"gradient":"linear-gradient(135deg,rgb(11,19,36) 0%,rgb(101,106,113) 100%)"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(135deg,rgb(11,19,36) 0%,rgb(101,106,113) 100%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 4.5rem)","fontWeight":"800","lineHeight":"1.1","letterSpacing":"-0.02em"}},"textColor":"white"} -->
		<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:clamp(2.75rem, 6vw, 4.5rem);font-weight:800;letter-spacing:-0.02em;line-height:1.1">Data to enrich your online business</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.7"}},"textColor":"white","fontSize":"medium"} -->
		<p class="has-text-align-center has-white-color has-text-color has-medium-font-size" style="font-size:1.25rem;line-height:1.7">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"white","textColor":"black","className":"has-custom-font-size","style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.875rem","bottom":"0.875rem"}},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
			<div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:8px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-size:1rem;font-weight:600">Get started</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"white","className":"has-custom-font-size","style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.875rem","bottom":"0.875rem"}},"typography":{"fontWeight":"600","fontSize":"1rem"},"color":{"background":"rgba(255, 255, 255, 0.1)"}}} -->
			<div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-white-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:8px;background-color:rgba(255, 255, 255, 0.1);padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-size:1rem;font-weight:600">Learn more →</a></div>
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
