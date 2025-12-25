<?php
/**
 * Title: Shop Overview Three Columns
 * Slug: elayne/shop-overview-three-columns
 * Description: Displays shop products in a three-column layout with a shop button
 * Categories: elayne/features, elayne/spa
 * Keywords: spa, wellness, shop, products, columns, ecommerce, spa
 * Viewport Width: 1280
 * Block Types: core/columns
 * Post Types: page, wp_template
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large)">Shop</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--large)">
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}}} -->
    <div class="wp-block-column" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"5px","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:image {"align":"center","width":300,"height":400,"style":{"border":{"radius":"5px"}}} -->
            <figure class="wp-block-image aligncenter is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/serum.webp' ) ); ?>" alt="Product 1" style="border-radius:5px" width="300" height="400"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}}} -->
            <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-small)">Essential Serum</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
            <p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600">$24.99</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}}} -->
    <div class="wp-block-column" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"5px","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:image {"align":"center","width":300,"height":400,"style":{"border":{"radius":"5px"}}} -->
            <figure class="wp-block-image aligncenter is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/bath-salt.webp' ) ); ?>" alt="Product 2" style="border-radius:5px" width="300" height="400"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}}} -->
            <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-small)">Bath Salts</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
            <p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600">$19.99</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}}} -->
    <div class="wp-block-column" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"5px","width":"0px","style":"none"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:image {"align":"center","width":300,"height":400,"style":{"border":{"radius":"5px"}}} -->
            <figure class="wp-block-image aligncenter is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'patterns/images/spa/shop/massage-oil.webp' ) ); ?>" alt="Product 3" style="border-radius:5px" width="300" height="400"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}}} -->
            <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-small)">Massage Oil</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
            <p class="has-text-align-center has-primary-color has-text-color" style="font-weight:600">$29.99</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
    <!-- wp:button {"style":{"border":{"radius":"5px"}}} -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:5px">Shop Now</a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->