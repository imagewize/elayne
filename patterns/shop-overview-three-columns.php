<?php
/**
 * Title: Shop Overview Three Columns
 * Slug: elayne/shop-overview-three-columns
 * Description: Displays shop products in a three-column layout with a shop button
 * Categories: elayne/features, elayne/spa, elayne/card, elayne/card-simple
 * Keywords: spa, wellness, shop, products, columns, ecommerce, spa, simple
 * Viewport Width: 1280
 * Block Types: core/columns
 * Post Types: page, wp_template
 * Inserter: true
 * Grid Config: 18rem (simple cards: product image + title + description)
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/features","elayne/spa","elayne/card","elayne/card-simple"],"patternName":"elayne/shop-overview-three-columns","name":"Shop Overview Three Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Shop', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"var:preset|border-radius|sm","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-style:none;border-width:0px;border-radius:var(--wp--preset--border-radius--sm);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"width":"300px","height":"400px","align":"center","style":{"border":{"radius":"var:preset|border-radius|sm"}}} -->
<figure class="wp-block-image aligncenter is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/serum.webp' ) ); ?>" alt="<?php esc_attr_e( 'Product 1', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--sm);width:300px;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Essential Serum', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600">$24.99</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"var:preset|border-radius|sm","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-style:none;border-width:0px;border-radius:var(--wp--preset--border-radius--sm);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"width":"300px","height":"400px","align":"center","style":{"border":{"radius":"var:preset|border-radius|sm"}}} -->
<figure class="wp-block-image aligncenter is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/bath-salt.webp' ) ); ?>" alt="<?php esc_attr_e( 'Product 2', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--sm);width:300px;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Bath Salts', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600">$19.99</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"var:preset|border-radius|sm","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-style:none;border-width:0px;border-radius:var(--wp--preset--border-radius--sm);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"width":"300px","height":"400px","align":"center","style":{"border":{"radius":"var:preset|border-radius|sm"}}} -->
<figure class="wp-block-image aligncenter is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/massage-oil.webp' ) ); ?>" alt="<?php esc_attr_e( 'Product 3', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--sm);width:300px;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Massage Oil', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600">$29.99</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Shop Now', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
