<?php
/**
 * Title: Generic Contact Page
 * Slug: elayne/page-contact
 * Description: Complete contact page with page header and contact form section
 * Categories: elayne/page-layouts
 * Block Types: core/post-content
 * Viewport Width: 1200
 * Keywords: page, contact, form, get in touch
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"metadata":{"patternName":"elayne/page-contact","name":"Generic Contact Page"},"align":"full","layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<?php include get_template_directory() . '/patterns/banner-page-header-accent.php'; ?>
	<?php include get_template_directory() . '/patterns/contact-with-form.php'; ?>
</div>
<!-- /wp:group -->
