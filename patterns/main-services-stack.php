<?php
/**
 * Title: Main — Services Stack
 * Slug: elayne/main-services-stack
 * Description: Editorial numbered services list with hover slide-in effect
 * Categories: elayne/features
 * Keywords: main-services, services, what we build, editorial
 * Viewport Width: 1200
 * Block Types: core/group
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/main-services-stack","name":"Main - Services Stack"},"align":"wide","className":"is-style-editorial-services-stack","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-editorial-services-stack" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"editorial-section-kicker","textColor":"accent-warm","style":{"typography":{"fontWeight":"600"}},"fontSize":"xx-small"} -->
<p class="editorial-section-kicker has-accent-warm-color has-text-color has-xx-small-font-size" style="font-weight:600"><?php esc_html_e( '§ What we build', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.03em","textTransform":"uppercase"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="letter-spacing:-0.03em;text-transform:uppercase"><?php echo wp_kses_post( __( 'Four things, <em class="has-accent-warm-color has-text-color has-serif-font-family">done well</em>.', 'elayne' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"textColor":"main-accent","fontSize":"medium"} -->
<p class="has-main-accent-color has-text-color has-medium-font-size"><?php esc_html_e( 'Not a service menu — a working method. Each engagement is bounded, written down, and shipped against a real deadline.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:group {"className":"editorial-service-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group editorial-service-list"><!-- wp:group {"className":"is-style-editorial-service-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-editorial-service-row"><!-- wp:paragraph {"className":"editorial-service-num","fontFamily":"serif","textColor":"main-accent","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"medium"} -->
<p class="editorial-service-num has-serif-font-family has-main-accent-color has-text-color has-medium-font-size" style="font-style:italic;font-weight:300"><?php esc_html_e( '01', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group editorial-service-body"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="letter-spacing:-0.02em;text-transform:uppercase"><?php esc_html_e( 'FSE theme builds', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Custom block themes in the Elayne lineage. Token-driven, pattern-first, no page builders. Shipped from JSON to production.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-tags","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group editorial-service-tags"><!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'theme.json', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Block patterns', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Style variations', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"editorial-service-go","fontFamily":"serif","textColor":"main-accent","fontSize":"medium"} -->
<p class="editorial-service-go has-serif-font-family has-main-accent-color has-text-color has-medium-font-size"><?php echo esc_html( "\u{2197}\u{FE0E}" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"is-style-editorial-service-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-editorial-service-row"><!-- wp:paragraph {"className":"editorial-service-num","fontFamily":"serif","textColor":"main-accent","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"medium"} -->
<p class="editorial-service-num has-serif-font-family has-main-accent-color has-text-color has-medium-font-size" style="font-style:italic;font-weight:300"><?php esc_html_e( '02', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group editorial-service-body"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="letter-spacing:-0.02em;text-transform:uppercase"><?php esc_html_e( 'Headless + Sage', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'When the editor is not enough — Sage 11, Acorn, Blade, Tailwind. The same care, the developer-mode version.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-tags","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group editorial-service-tags"><!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Sage 11', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Bedrock', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Trellis', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"editorial-service-go","fontFamily":"serif","textColor":"main-accent","fontSize":"medium"} -->
<p class="editorial-service-go has-serif-font-family has-main-accent-color has-text-color has-medium-font-size"><?php echo esc_html( "\u{2197}\u{FE0E}" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"is-style-editorial-service-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-editorial-service-row"><!-- wp:paragraph {"className":"editorial-service-num","fontFamily":"serif","textColor":"main-accent","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"medium"} -->
<p class="editorial-service-num has-serif-font-family has-main-accent-color has-text-color has-medium-font-size" style="font-style:italic;font-weight:300"><?php esc_html_e( '03', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group editorial-service-body"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="letter-spacing:-0.02em;text-transform:uppercase"><?php esc_html_e( 'Vertical kits', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Pre-composed pattern libraries for legal, food and beverage, spa, plumbing, salons, publication, store. Drop in, rewrite the copy, launch.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-tags","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group editorial-service-tags"><!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( '9 verticals', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Style variations', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"editorial-service-go","fontFamily":"serif","textColor":"main-accent","fontSize":"medium"} -->
<p class="editorial-service-go has-serif-font-family has-main-accent-color has-text-color has-medium-font-size"><?php echo esc_html( "\u{2197}\u{FE0E}" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"is-style-editorial-service-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-editorial-service-row"><!-- wp:paragraph {"className":"editorial-service-num","fontFamily":"serif","textColor":"main-accent","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"medium"} -->
<p class="editorial-service-num has-serif-font-family has-main-accent-color has-text-color has-medium-font-size" style="font-style:italic;font-weight:300"><?php esc_html_e( '04', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-body","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group editorial-service-body"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.02em"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="letter-spacing:-0.02em;text-transform:uppercase"><?php esc_html_e( 'Performance + SEO', 'elayne' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Audits that read like editorials. Concrete fixes. Core Web Vitals you can hand to a stakeholder without translation.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"editorial-service-tags","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group editorial-service-tags"><!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'CWV', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Technical SEO', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-editorial-pill"} -->
<p class="is-style-editorial-pill"><?php esc_html_e( 'Hardening', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"editorial-service-go","fontFamily":"serif","textColor":"main-accent","fontSize":"medium"} -->
<p class="editorial-service-go has-serif-font-family has-main-accent-color has-text-color has-medium-font-size"><?php echo esc_html( "\u{2197}\u{FE0E}" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
