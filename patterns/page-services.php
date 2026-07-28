<?php
/**
 * Title: Agency Services Page
 * Slug: elayne/page-services
 * Description: Complete agency services overview page with page header, agency services showcase, and three-column feature grid
 * Categories: elayne/page-layouts
 * Block Types: core/post-content
 * Viewport Width: 1200
 * Keywords: page, services, agency, features, showcase
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"metadata":{"patternName":"elayne/page-services","name":"Agency Services Page"},"align":"full","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<?php include get_template_directory() . '/patterns/banner-page-header-accent.php'; ?>
	<?php include get_template_directory() . '/patterns/agency-services-showcase.php'; ?>
	<?php include get_template_directory() . '/patterns/three-column-feature-grid.php'; ?>
</div>
<!-- /wp:group -->
