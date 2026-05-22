<?php
/**
 * Title: F+B Tonight's Menu
 * Slug: elayne/fandb-menu
 * Description: Editorial menu section with two-column menu grid, dotted leader lines, section heading, and a full-menu CTA.
 * Categories: elayne/food-beverage, elayne/features
 * Keywords: menu, food, drinks, bistro, restaurant, kafe, wine bar
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/food-beverage","elayne/features"],"patternName":"elayne/fandb-menu","name":"F+B Menu"},"align":"full","className":"is-style-fandb-menu","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-fandb-menu has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|main","width":"1.5px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"end"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--main);border-bottom-width:1.5px;margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-eyebrow","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
<p class="fandb-eyebrow" style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--primary)"><?php esc_html_e( 'A la carte · Updated daily', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"0.92"},"color":{"text":"var:preset|color|main"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--main);margin-top:0;margin-bottom:0;line-height:0.92"><?php echo wp_kses_post( __( "Tonight's <em>service.</em>", 'elayne' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"600","letterSpacing":"0.2em","textTransform":"uppercase","fontSize":"var:preset|font-size|x-small"},"color":{"text":"var:preset|color|main-accent"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main-accent);font-size:var(--wp--preset--font-size--x-small);font-weight:600;letter-spacing:0.2em;text-transform:uppercase"><?php esc_html_e( 'Service', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontFamily":"var:preset|font-family|heading","fontWeight":"700","letterSpacing":"-0.02em","fontSize":"var:preset|font-size|x-large"},"color":{"text":"var:preset|color|main"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main);font-family:var(--wp--preset--font-family--heading);font-size:var(--wp--preset--font-size--x-large);font-weight:700;letter-spacing:-0.02em">17:30 – 23:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"fandb-menu-col-title","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-col-title" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Small Plates and Snacks', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Burrata, Stone Fruit', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">145</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( __( 'grilled peach, basil oil, sourdough crisp <span class="fandb-menu-tag fandb-menu-tag-veg">VEG</span>', 'elayne' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Hearth-Roast Carrots', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">95</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( __( 'whipped tahini, dukkah, pomegranate <span class="fandb-menu-tag fandb-menu-tag-veg">VEG</span>', 'elayne' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Oyster Trio', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">165</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'cucumber granita, fermented chilli, mignonette', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Beef Tartare', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">175</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'smoked egg yolk, capers, grilled milk bread', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"fandb-menu-col-title","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-col-title" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'From the Fire', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( __( 'Hanger Steak <span class="fandb-menu-tag">SPECIAL</span>', 'elayne' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">295</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'charred shallot, bone marrow butter, frites', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Whole Daurade', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">265</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'salt-baked, charred lemon, salsa verde', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Ember Cabbage', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">125</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( __( 'brown butter, anchovy, lemon zest <span class="fandb-menu-tag fandb-menu-tag-veg">VEG</span>', 'elayne' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-menu-item","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-menu-item" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-menu-item-name","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-name" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Wood-Fired Focaccia', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-price","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-price" style="margin-top:0;margin-bottom:0">65</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-menu-item-desc","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-menu-item-desc" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( __( 'rosemary, sea salt, cultured butter <span class="fandb-menu-tag fandb-menu-tag-veg">VEG</span>', 'elayne' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|main","width":"1.5px"},"bottom":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--main);border-top-width:1.5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|main"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--main);font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Menu changes daily with what the morning market brought in.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View Full Menu', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
