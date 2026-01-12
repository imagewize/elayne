<?php
/**
 * Title: Stats Showcase with CTA
 * Slug: elayne/stats-showcase
 * Description: Two-column section combining promotional content with modern statistics display
 * Categories: elayne/call-to-action, elayne/features
 * Keywords: stats, statistics, metrics, data, cta, testimonial, showcase, details
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","hasParallax":true,"dimRatio":80,"overlayColor":"main","isUserOverlayColor":true,"metadata":{"name":"Stats Showcase","categories":["elayne/call-to-action","elayne/features"],"patternName":"elayne/stats-showcase"},"align":"full","className":"is-style-blur-image-less","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"0"}}} -->
<div class="wp-block-cover alignfull has-parallax is-style-blur-image-less" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp)"></div><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Stats Showcase Content"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Content Section"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"main-accent","fontSize":"x-small"} -->
<p class="has-main-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Trusted by Thousands', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Built for performance and designed for results', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size"><?php esc_html_e( 'Join the growing community of professionals who trust Moiraine to power their WordPress sites. Beautiful design meets exceptional performance.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"CTA Section"},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="#"><?php esc_html_e( 'View Documentation', 'elayne' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-dotted","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-dotted"/>
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

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Stats Grid"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Stat Card - Active Sites"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"border":{"radius":"8px"},"dimensions":{"minHeight":"40px"}},"backgroundColor":"main-accent","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-main-accent-background-color has-background" style="border-radius:8px;min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"24px","height":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-users.svg" alt="" style="width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"tertiary","fontSize":"x-small"} -->
<p class="has-tertiary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'Active Sites', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-accent-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( '10K+', 'elayne' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Stat Card - Performance"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"border":{"radius":"8px"},"dimensions":{"minHeight":"40px"}},"backgroundColor":"primary-accent","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-accent-background-color has-background" style="border-radius:8px;min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"24px","height":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-lightning.svg" alt="" style="width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-primary-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'Performance', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"textColor":"base","fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( '100', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-primary-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'PageSpeed Score', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Stat Card - Rating"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"border":{"radius":"8px"},"dimensions":{"minHeight":"40px"}},"backgroundColor":"primary-accent","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-accent-background-color has-background" style="border-radius:8px;min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"24px","height":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-star.svg" alt="" style="width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-primary-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'User Rating', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"textColor":"base","fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( '5.0', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-primary-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( '★★★★★', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Stat Card - Patterns"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Icon Container"},"style":{"spacing":{"padding":{"top":"8px","right":"8px","bottom":"8px","left":"8px"}},"border":{"radius":"8px"},"dimensions":{"minHeight":"40px"}},"backgroundColor":"primary-accent","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-accent-background-color has-background" style="border-radius:8px;min-height:40px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:image {"width":"24px","height":"24px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/icon-package.svg" alt="" style="width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-primary-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'Pattern Library', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1","fontStyle":"normal"}},"textColor":"base","fontSize":"xx-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( '38', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1","fontStyle":"normal"}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-primary-accent-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'Ready to use', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
