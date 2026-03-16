<?php
/**
 * Title: Food Menu Grid
 * Slug: elayne/menu-food-grid
 * Description: Four-section responsive food menu with color-coded categories (Appetizers, Mains, Desserts, Sides)
 * Categories: elayne/food-beverage, elayne/card-extended
 * Keywords: menu, food, appetizers, entrees, mains, desserts, sides, restaurant, cafe, dining
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"400","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family" style="font-size:3rem;font-style:normal;font-weight:400"><?php esc_html_e( 'Food Menu', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","textColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-main-color has-base-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500"><?php esc_html_e( 'Appetizers', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Bruschetta', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€8.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Toasted bread with tomatoes, garlic, and basil', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Calamari Fritti', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€12.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Crispy fried squid with lemon aioli', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Caesar Salad', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€9.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Romaine lettuce, parmesan, croutons', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"primary-alt-accent","textColor":"primary-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-primary-alt-color has-primary-alt-accent-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary-alt"}}}},"textColor":"primary-alt","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-primary-alt-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500"><?php esc_html_e( 'Mains', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Grilled Salmon', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€24.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"primary-alt","fontFamily":"body"} -->
<p class="has-primary-alt-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Fresh Atlantic salmon with seasonal vegetables', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Beef Tenderloin', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€28.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"primary-alt","fontFamily":"body"} -->
<p class="has-primary-alt-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( '8oz tenderloin with truffle mashed potatoes', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Mushroom Risotto', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€18.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"primary-alt","fontFamily":"body"} -->
<p class="has-primary-alt-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Creamy arborio rice with wild mushrooms', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"primary-alt","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-base-color has-primary-alt-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|border-light"}}}},"textColor":"border-light","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-border-light-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500"><?php esc_html_e( 'Desserts', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Tiramisu', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€7.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontFamily":"body"} -->
<p class="has-base-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Classic Italian coffee-flavored dessert', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"color":{"background":"rgba(255,255,255,0.3)"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small);background-color:rgba(255,255,255,0.3);color:rgba(255,255,255,0.3)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Chocolate Lava Cake', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€8.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontFamily":"body"} -->
<p class="has-base-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Warm chocolate cake with vanilla ice cream', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"color":{"background":"rgba(255,255,255,0.3)"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small);background-color:rgba(255,255,255,0.3);color:rgba(255,255,255,0.3)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Crème Brûlée', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€7.00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontFamily":"body"} -->
<p class="has-base-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem"><?php esc_html_e( 'Vanilla custard with caramelized sugar crust', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"tertiary","textColor":"primary-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-primary-alt-color has-tertiary-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500"><?php esc_html_e( 'Sides', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Truffle Fries', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€6.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Grilled Vegetables', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€5.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( 'Garlic Bread', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500"><?php esc_html_e( '€4.50', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
