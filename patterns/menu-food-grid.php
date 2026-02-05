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
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family" style="font-size:3rem;font-style:normal;font-weight:400">Food Menu</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"base","textColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-main-color has-base-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500">Appetizers</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Bruschetta</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€8.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Toasted bread with tomatoes, garlic, and basil</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Calamari Fritti</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€12.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Crispy fried squid with lemon aioli</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Caesar Salad</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€9.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontFamily":"body"} -->
<p class="has-main-accent-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Romaine lettuce, parmesan, croutons</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"primary-alt-accent","textColor":"primary-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-primary-alt-color has-primary-alt-accent-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary-alt"}}}},"textColor":"primary-alt","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-primary-alt-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500">Mains</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Grilled Salmon</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€24.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"primary-alt","fontFamily":"body"} -->
<p class="has-primary-alt-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Fresh Atlantic salmon with seasonal vegetables</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Beef Tenderloin</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€28.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"primary-alt","fontFamily":"body"} -->
<p class="has-primary-alt-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">8oz tenderloin with truffle mashed potatoes</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Mushroom Risotto</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€18.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"primary-alt","fontFamily":"body"} -->
<p class="has-primary-alt-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Creamy arborio rice with wild mushrooms</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"primary-alt","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-base-color has-primary-alt-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|border-light"}}}},"textColor":"border-light","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-border-light-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500">Desserts</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Tiramisu</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€7.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontFamily":"body"} -->
<p class="has-base-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Classic Italian coffee-flavored dessert</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"color":{"background":"rgba(255,255,255,0.3)"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small);background-color:rgba(255,255,255,0.3);color:rgba(255,255,255,0.3)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Chocolate Lava Cake</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€8.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontFamily":"body"} -->
<p class="has-base-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Warm chocolate cake with vanilla ice cream</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"color":{"background":"rgba(255,255,255,0.3)"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small);background-color:rgba(255,255,255,0.3);color:rgba(255,255,255,0.3)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Crème Brûlée</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€7.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontFamily":"body"} -->
<p class="has-base-color has-text-color has-body-font-family" style="margin-top:0;font-size:0.8125rem">Vanilla custard with caramelized sugar crust</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px"}},"backgroundColor":"tertiary","textColor":"primary-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-section has-primary-alt-color has-tertiary-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"decorative"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-decorative-font-family" style="font-size:1.75rem;font-style:normal;font-weight:500">Sides</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Truffle Fries</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€6.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Grilled Vegetables</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€5.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-alpha-channel-opacity menu-separator","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background menu-separator" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"menu-item","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group menu-item"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="has-body-font-family" style="font-size:0.9375rem;font-weight:500">Garlic Bread</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"menu-price","style":{"typography":{"fontSize":"0.9375rem","fontWeight":"500"}},"fontFamily":"body"} -->
<p class="menu-price has-body-font-family" style="font-size:0.9375rem;font-weight:500">€4.50</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
