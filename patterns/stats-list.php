<?php
/**
 * Title: Stats List with CTA
 * Slug: elayne/stats-list
 * Description: Two-column section with promotional content and feature list
 * Categories: elayne/call-to-action, elayne/features
 * Keywords: stats, list, features, cta, testimonial, showcase
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","hasParallax":true,"dimRatio":80,"overlayColor":"main","isUserOverlayColor":true,"metadata":{"name":"Stats List"},"align":"full","className":"is-style-blur-image-less","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"0","left":"0"}}}} -->
<div class="wp-block-cover alignfull has-parallax is-style-blur-image-less" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:0;padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Stats List Content"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"metadata":{"name":"Content Section"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Deploy faster', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'A better workflow', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size"><?php esc_html_e( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"CTA Section"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="#"><?php esc_html_e( 'Live demo', 'elayne' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Testimonial"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full is-avatar is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded-full is-avatar is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Moiraine completely transformed how we build WordPress sites. The pattern library is incredible and performance is unmatched.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '— Sarah Chen, Creative Director', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"metadata":{"name":"Features List"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Feature - Push to Deploy"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"dimensions":{"minHeight":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-package.svg" alt="" style="width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"base","fontSize":"base"} -->
<p class="has-base-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Push to deploy.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Feature - SSL Certificates"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"dimensions":{"minHeight":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-lightning.svg" alt="" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"base","fontSize":"base"} -->
<p class="has-base-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'SSL certificates.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Feature - Database Backups"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"dimensions":{"minHeight":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-star.svg" alt="" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"base","fontSize":"base"} -->
<p class="has-base-color has-text-color has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Database backups.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
