<?php
/**
 * Title: Nail Salon Services Grid
 * Slug: elayne/nail-salon-services
 * Description: Six-card responsive grid of nail salon services with SVG icons
 * Categories: elayne/salon, elayne/features, elayne/card-simple
 * Keywords: services, nail salon, manicure, gel, acrylic, pedicure, nail art, paraffin
 * Viewport Width: 1200
 * Grid Config: 18rem (simple cards: icon + title + short description)
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/features","elayne/card-simple"],"patternName":"elayne/nail-salon-services","name":"Nail Salon Services Grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Our Services', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"}},"textColor":"main","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-large-font-size" style="line-height:1.2"><?php esc_html_e( 'Crafted for Every Occasion', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"base"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-base-font-size"><?php esc_html_e( 'From classic manicures to custom nail art — choose the treatment that speaks to you.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-nail-salon-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nail-salon-service-card has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-nail-polish.svg" alt="<?php esc_attr_e( 'Classic Manicure', 'elayne' ); ?>" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"base"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Classic Manicure', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Nail shaping, cuticle care, and your choice of polish for flawless, lasting color.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-nail-salon-featured-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nail-salon-featured-card has-border-color has-primary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-gel-nails.svg" alt="<?php esc_attr_e( 'Gel Nails', 'elayne' ); ?>" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"base"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Gel Nails', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Long-lasting gel polish that stays chip-free for up to three weeks. Vivid colors, brilliant shine.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-nail-salon-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nail-salon-service-card has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-acrylic.svg" alt="<?php esc_attr_e( 'Acrylic Extensions', 'elayne' ); ?>" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"base"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Acrylic Extensions', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Custom-length acrylics sculpted and filed to your preference — natural to dramatic.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-nail-salon-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nail-salon-service-card has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-nail-art.svg" alt="<?php esc_attr_e( 'Nail Art', 'elayne' ); ?>" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"base"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Nail Art', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Hand-painted designs, decals, ombre, and 3D elements — express your unique personal style.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-nail-salon-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nail-salon-service-card has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-pedicure.svg" alt="<?php esc_attr_e( 'Spa Pedicure', 'elayne' ); ?>" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"base"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Spa Pedicure', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Soothing foot soak, scrub, callus treatment, and polish — total relaxation for tired feet.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-nail-salon-service-card","style":{"spacing":{"padding":"var:preset|spacing|large","blockGap":"var:preset|spacing|small"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-nail-salon-service-card has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding:var(--wp--preset--spacing--large)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/nail-salon/icon-paraffin.svg" alt="<?php esc_attr_e( 'Paraffin Treatment', 'elayne' ); ?>" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"main","fontSize":"base"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Paraffin Treatment', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Warm paraffin wax deeply nourishes and softens skin — the ultimate luxury add-on.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Learn more', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
