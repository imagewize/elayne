<?php
/**
 * Title: Main Site Homepage
 * Slug: elayne/page-homepage
 * Description: Complete main site homepage composition with hero, services stack, agency showcase, client stories, logo wall, testimonials, and newsletter CTA
 * Categories: elayne/page-layouts
 * Block Types: core/post-content
 * Viewport Width: 1200
 * Keywords: page, homepage, main, hero, services, showcase, testimonials, newsletter
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"metadata":{"patternName":"elayne/page-homepage","name":"Main Site Homepage"},"align":"full","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<?php include get_template_directory() . '/patterns/main-hero.php'; ?>
	<?php include get_template_directory() . '/patterns/main-services-stack.php'; ?>
	<?php include get_template_directory() . '/patterns/agency-services-showcase.php'; ?>
	<?php include get_template_directory() . '/patterns/client-success-stories.php'; ?>
	<?php include get_template_directory() . '/patterns/client-logo-wall.php'; ?>
	<?php include get_template_directory() . '/patterns/testimonials-grid.php'; ?>
	<?php include get_template_directory() . '/patterns/cta-newsletter.php'; ?>
</div>
<!-- /wp:group -->
