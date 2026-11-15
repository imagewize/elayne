<?php
/**
 * Title: Home Bold Industries Cards
 * Slug: elayne/home-bold-industries
 * Description: Six white cards with an inset photo, one per industry, each with a short description and a pill link to its demo
 * Categories: elayne/features, elayne/card-extended
 * Keywords: industries, verticals, cards, demos, photos, home, bold
 * Viewport Width: 1400
 * Block Types: core/group
 * Grid Config: 21rem (three per row at the wide size)
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/home-bold-industries","name":"Home Bold Industries Cards"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"align":"full","anchor":"industries","backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div id="industries" class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","className":"is-style-home-bold-head","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-home-bold-head"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Start from your kind of business', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"medium"} -->
<p class="has-main-accent-color has-text-color has-medium-font-size"><?php esc_html_e( 'Each set has its own colours, fonts and page sections, written for that trade. Open a demo to see the whole site.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"21rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-home-bold-card","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-bold-card has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/pan-seared-halibut.webp" alt="<?php echo esc_attr__( 'Pan-seared halibut on saffron rice', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"home-bold-card-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group home-bold-card-body"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Restaurants and cafés', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Menus, opening hours, reservations and events, in two styles.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"home-bold-pill"} -->
<div class="wp-block-buttons home-bold-pill"><!-- wp:button {"backgroundColor":"tertiary","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'View the restaurant demo', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-home-bold-card","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-bold-card has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/spa/spa-treatment-hot-stones.webp" alt="<?php echo esc_attr__( 'A hot stone massage', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"home-bold-card-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group home-bold-card-body"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Spa and wellness', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Treatments, booking and a small product shop.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"home-bold-pill"} -->
<div class="wp-block-buttons home-bold-pill"><!-- wp:button {"backgroundColor":"tertiary","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'View the spa demo', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-home-bold-card","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-bold-card has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/plumbing/hero-plumbing.webp" alt="<?php echo esc_attr__( 'Polished brass taps', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"home-bold-card-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group home-bold-card-body"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Home services', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Services, an emergency call bar, reviews and a quote form.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"home-bold-pill"} -->
<div class="wp-block-buttons home-bold-pill"><!-- wp:button {"backgroundColor":"tertiary","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'View the home services demo', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-home-bold-card","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-bold-card has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/why-nail-salon.webp" alt="<?php echo esc_attr__( 'A manicure in progress', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"home-bold-card-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group home-bold-card-body"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Nail salons', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Price list, reasons to visit, testimonials and booking.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"home-bold-pill"} -->
<div class="wp-block-buttons home-bold-pill"><!-- wp:button {"backgroundColor":"tertiary","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'View the salon demo', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-home-bold-card","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-bold-card has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/store/leather-bag.webp" alt="<?php echo esc_attr__( 'A leather bag with a tie and notebook', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"home-bold-card-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group home-bold-card-body"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Online shops', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Shop front, filters, product pages, cart and checkout.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"home-bold-pill"} -->
<div class="wp-block-buttons home-bold-pill"><!-- wp:button {"backgroundColor":"tertiary","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'View the shop demo', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-home-bold-card","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-home-bold-card has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/cafe-interior-about.webp" alt="<?php echo esc_attr__( 'A café interior', 'elayne' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"home-bold-card-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group home-bold-card-body"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Any other business', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Heroes, services, team, pricing, FAQ and contact pages.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"home-bold-pill"} -->
<div class="wp-block-buttons home-bold-pill"><!-- wp:button {"backgroundColor":"tertiary","textColor":"main"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-tertiary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Browse all patterns', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
