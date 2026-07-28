<?php
/**
 * Title: Agency About Page
 * Slug: elayne/page-about
 * Description: Complete agency about page with page header, overlapping feature columns, team grid, and stats showcase
 * Categories: elayne/page-layouts
 * Block Types: core/post-content
 * Viewport Width: 1200
 * Keywords: page, about, agency, team, stats, features
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"metadata":{"patternName":"elayne/page-about","name":"Agency About Page"},"align":"full","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<?php include get_template_directory() . '/patterns/banner-page-header-accent.php'; ?>
	<?php include get_template_directory() . '/patterns/overlapping-feature-columns.php'; ?>
	<?php include get_template_directory() . '/patterns/team-grid.php'; ?>
	<?php include get_template_directory() . '/patterns/stats-showcase.php'; ?>
</div>
<!-- /wp:group -->
