<?php
/**
 * Title: Stay Connected Newsletter
 * Slug: elayne/woocommerce/woo-newsletter
 * Description: Newsletter signup section with journal title and subscription form
 * Categories: elayne/woocommerce
 * Keywords: newsletter, subscribe, stay connected, journal, email, form
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @package Elayne
 * @version 1.0.0
 */
?>
<!-- wp:group {"align":"full","metadata":{"categories":["elayne/woocommerce"],"patternName":"elayne/woocommerce/woo-newsletter","name":"Stay Connected Newsletter"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"small","fontStyle":"normal","fontWeight":"400","letterSpacing":"0.22em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"gold","fontFamily":"var:preset|font-family|heading"} -->
<p class="has-text-align-center has-gold-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--small);font-style:normal;font-weight:400;letter-spacing:0.22em;text-transform:uppercase">
<span style="display:inline-block;width:60px;height:1px;background:var(--wp--preset--color--gold)"></span>
<?php esc_html_e( 'Stay Connected', 'elayne' ); ?>
<span style="display:inline-block;width:60px;height:1px;background:var(--wp--preset--color--gold)"></span>
</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.1","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"textColor":"base","fontSize":"x-large","fontFamily":"var:preset|font-family|heading"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-var-preset-font-family-heading-font-family has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;font-style:normal;font-weight:300;line-height:1.1;letter-spacing:-0.01em"><?php esc_html_e( 'The Elayne', 'elayne' ); ?> <em style="color:var(--wp--preset--color--gold)"><?php esc_html_e( 'Journal', 'elayne' ); ?></em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"300","lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"textColor":"main-accent","fontSize":"medium"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;font-weight:300;line-height:1.8;font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Craft insights, new arrivals, and exclusive offers for the discerning professional.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<?php if ( function_exists( 'wpcf7_contact_form' ) ) : ?>
<!-- wp:contact-form-7/contact-form-selector -->
<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7]</div>
<!-- /wp:contact-form-7/contact-form-selector -->
<?php else : ?>
<!-- wp:search {"className":"elayne-woo-newsletter-search","label":"","showLabel":false,"placeholder":"Your email address","buttonText":"Subscribe","buttonPosition":"button-inside","buttonUseIcon":false,"layout":{"type":"flex","flexWrap":"nowrap"}} /-->
<?php endif; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
