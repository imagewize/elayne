<?php
/**
 * Title: Home Image with Checklist
 * Slug: elayne/home-built-on-blocks
 * Description: A photo beside a heading, intro and a four-point checklist
 * Categories: elayne/features
 * Keywords: image, checklist, features, split
 * Viewport Width: 1200
 * Block Types: core/group
 */
?>
<!-- wp:group {"metadata":{"patternName":"elayne/home-built-on-blocks","name":"Home Image with Checklist"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|xs"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/fandb/cafe-interior-about.webp" alt="<?php echo esc_attr__( 'A café interior with wooden tables', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--xs)"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Built on WordPress blocks, and nothing else', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color"><?php esc_html_e( 'Elayne adds no plugin of its own and no settings screen. What you edit is what WordPress gives you.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark-list"} -->
<ul class="wp-block-list is-style-checkmark-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Fast by default: no build tools, and each section loads only its own CSS.', 'elayne' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Readable in every style: text and background pairs are checked for contrast.', 'elayne' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Three columns, then two, then one: grids reflow on tablets and phones.', 'elayne' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Ready to translate: every string in every pattern.', 'elayne' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
