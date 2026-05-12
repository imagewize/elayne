<?php
/**
 * Title: Product Engraving Option
 * Slug: elayne/woocommerce/woo-product-engraving-option
 * Description: Add-on personalised engraving selector — clickable bordered box with icon, description, and add-on price. Toggle selected state via JavaScript.
 * Categories: elayne/woocommerce
 * Keywords: product, engraving, personalisation, add-on, option, monogram
 * Viewport Width: 800
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"className":"elayne-engraving-option","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-product-engraving-option","name":"Product Engraving Option"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"top":"0","bottom":"var:preset|spacing|medium"}},"border":{"width":"1px","color":"var:preset|color|border-light","radius":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group elayne-engraving-option has-border-color" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:0;margin-top:0;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"className":"elayne-engraving-icon","sizeSlug":"full","linkDestination":"none","style":{"color":{"text":"main-accent"}}} -->
<figure class="wp-block-image elayne-engraving-icon size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-star-celebration.svg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"main","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h6 class="wp-block-heading has-main-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e( 'Add Personalised Engraving', 'elayne' ); ?></h6>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"xx-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-main-accent-color has-text-color has-xx-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( 'Monogram or initials — foil embossed in gold or silver', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"elayne-engraving-price","textColor":"orange","fontSize":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="elayne-engraving-price has-orange-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400"><?php esc_html_e( '+$35', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
