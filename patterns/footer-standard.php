<?php
/**
 * Title: Footer Standard
 * Slug: elayne/footer-standard
 * Description: A standard footer with brand blurb, social links, and navigation columns.
 * Categories: footer
 * Keywords: footer, standard
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"right":{},"bottom":{},"left":{}}},"backgroundColor":"base","textColor":"main","layout":{"inherit":true,"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-main-color has-base-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"metadata":{"name":"Footer Columns"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"level":0,"isLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Build polished pages with the Elayne block theme and the WordPress Site Editor.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"main","iconBackgroundColorValue":"#1F2937","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"metadata":{"name":"Nav Column"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Company', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'About', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Careers', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Brand Assets', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Contact', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"metadata":{"name":"Nav Column"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Resources', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Blog', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Contact', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Support Docs', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Get Help', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"metadata":{"name":"Nav Column"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php esc_html_e( 'Product', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Features', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Pricing', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Use Cases', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Demo', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Footer Subnav"},"align":"wide","style":{"spacing":{"padding":{"top":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<div class="wp-block-group alignwide has-secondary-color has-text-color has-link-color" style="padding-top:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© <?php echo esc_html( date( 'Y' ) ); ?> Powered by WordPress and <a href="https://imagewize.com/resources/elayne-theme">Elayne</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Download', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Visit Site', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Contact', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
