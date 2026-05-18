<?php
/**
 * Title: Main — Hero
 * Slug: elayne/main-hero
 * Description: Main — Hero
 * Categories: elayne/hero
 * Keywords: main-hero, hero, editorial
 * Viewport Width: 1200
 * Block Types: core/group
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/main-hero","name":"Main - Hero"},"align":"wide","className":"main-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide main-hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:paragraph {"className":"is-style-editorial-eyebrow","style":{"color":{"text":"var:preset|color|main-accent"}},"fontSize":"x-small"} -->
<p class="is-style-editorial-eyebrow has-text-color has-x-small-font-size" style="color:var(--wp--preset--color--main-accent)"><?php esc_html_e( 'A theme for serious work — v4.0', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"width":"85%"} -->
<div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"level":1,"className":"is-style-editorial-hero-heading","style":{"typography":{"letterSpacing":"-0.035em","textTransform":"uppercase"}},"fontSize":"display"} -->
<h1 class="wp-block-heading is-style-editorial-hero-heading has-display-font-size" style="letter-spacing:-0.035em;text-transform:uppercase"><span class="line"><?php esc_html_e( 'Quietly', 'elayne' ); ?></span>
<span class="line"><em class="has-accent-warm-color has-text-color has-serif-font-family"><?php esc_html_e( 'opinionated', 'elayne' ); ?></em></span>
<span class="line"><?php esc_html_e( 'design system.', 'elayne' ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%","className":"editorial-hero-stats","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column editorial-hero-stats" style="flex-basis:15%"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<strong>v4.0.2</strong><br>Released this week', 'elayne' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<strong>9 verticals</strong><br>From legal to nail salons', 'elayne' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|large"},"padding":{"top":"var:preset|spacing|medium"}},"border":{"top":{"color":"var:preset|color|border-light","style":"solid","width":"1px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="border-top-color:var(--wp--preset--color--border-light);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--medium)"><!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|main-accent"}},"fontSize":"medium"} -->
<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--main-accent)"><?php echo wp_kses_post( __( 'Elayne is a <strong>Full Site Editing</strong> theme built for studios and operators who would rather ship than wrestle a builder. Patterns that compose. Tokens that scale. Typography that earns the page.', 'elayne' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Get the theme →', 'elayne' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'View patterns', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
