<?php
/**
 * Title: Portfolio Grid Masonry
 * Slug: elayne/portfolio-grid-masonry
 * Description: Showcase creative work in a visually engaging masonry grid layout with category filters
 * Categories: elayne/portfolio
 * Keywords: portfolio, projects, work, gallery, masonry, case studies, creative
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/portfolio"],"patternName":"elayne/portfolio-grid-masonry","name":"Portfolio Grid Masonry"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-main-color has-base-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","wideSize":"1400px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color has-link-color" style="font-size:11px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Portfolio', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","lineHeight":"1.1","letterSpacing":"-0.02em"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Our work', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'Creative projects that showcase design, strategy, and innovation.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"18px","right":"18px"}},"border":{"radius":"999px","width":"0px","style":"none"}},"backgroundColor":"primary","textColor":"base"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background" style="border-style:none;border-width:0px;border-radius:999px;padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;font-size:14px;font-weight:600"><?php esc_html_e( 'All', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"18px","right":"18px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;font-size:14px;font-weight:600"><?php esc_html_e( 'Branding', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"18px","right":"18px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;font-size:14px;font-weight:600"><?php esc_html_e( 'Web Design', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"18px","right":"18px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;font-size:14px;font-weight:600"><?php esc_html_e( 'Development', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"600"},"spacing":{"padding":{"top":"9px","bottom":"9px","left":"18px","right":"18px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;font-size:14px;font-weight:600"><?php esc_html_e( 'Marketing', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"portfolio-masonry-grid","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-masonry-grid">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"16px","width":"0px","style":"none"},"dimensions":{"minHeight":""}},"className":"portfolio-item","layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-item" style="border-style:none;border-width:0px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":320,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}},"typography":{"textDecoration":"none"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:22px;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><a href="#"><?php esc_html_e( 'Nordic Café Rebrand', 'elayne' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Branding', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Web Design', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"16px","width":"0px","style":"none"}},"className":"portfolio-item","layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-item" style="border-style:none;border-width:0px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":480,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}},"typography":{"textDecoration":"none"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:22px;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><a href="#"><?php esc_html_e( 'TechFlow Analytics', 'elayne' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Development', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"16px","width":"0px","style":"none"}},"className":"portfolio-item","layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-item" style="border-style:none;border-width:0px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":320,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}},"typography":{"textDecoration":"none"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:22px;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><a href="#"><?php esc_html_e( 'Urban Collective', 'elayne' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Marketing', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Web Design', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"16px","width":"0px","style":"none"}},"className":"portfolio-item","layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-item" style="border-style:none;border-width:0px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/wellness.webp","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":480,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/wellness.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}},"typography":{"textDecoration":"none"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:22px;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><a href="#"><?php esc_html_e( 'Wellness Studio', 'elayne' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Branding', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"16px","width":"0px","style":"none"}},"className":"portfolio-item","layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-item" style="border-style:none;border-width:0px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":320,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}},"typography":{"textDecoration":"none"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:22px;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><a href="#"><?php esc_html_e( 'Horizon Ventures', 'elayne' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Web Design', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Development', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"16px","width":"0px","style":"none"}},"className":"portfolio-item","layout":{"type":"default"}} -->
<div class="wp-block-group portfolio-item" style="border-style:none;border-width:0px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":320,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700","lineHeight":"1.2","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}},"typography":{"textDecoration":"none"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:22px;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><a href="#"><?php esc_html_e( 'Summit Partners', 'elayne' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Branding', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"999px"}},"backgroundColor":"base","textColor":"primary"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background" style="border-radius:999px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;font-weight:600"><?php esc_html_e( 'Marketing', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
