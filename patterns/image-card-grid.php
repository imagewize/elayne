<?php
/**
 * Title: Image Card Grid
 * Slug: elayne/image-card-grid
 * Description: Showcase content with image preview cards in a responsive grid layout. Perfect for demos, case studies, services, or featured content.
 * Categories: elayne/features, elayne/card, elayne/card-extended
 * Keywords: cards, grid, images, showcase, demos, case studies, services, features, portfolio, extended
 * Viewport Width: 1400
 * Block Types: core/group
 * Post Types: page, wp_template
 * Inserter: true
 * Grid Config: 19rem (complex cards: large image + title + description + CTA button)
 */
?>
<!-- wp:group {"metadata":{"name":"Image Card Grid","categories":["elayne/features","elayne/card"],"patternName":"elayne/image-card-grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"main-accent","fontSize":"x-small"} -->
<p class="is-style-eyebrow has-text-align-center has-main-accent-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Featured Content', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|xxx-large","fontWeight":"700","lineHeight":"1.2"}},"textColor":"main"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color" style="font-size:var(--wp--preset--font-size--xxx-large);font-weight:700;line-height:1.2"><?php esc_html_e( 'Discover Our Work', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.6"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:var(--wp--preset--font-size--large);line-height:1.6"><?php esc_html_e( 'Explore our featured projects and see how we deliver exceptional results for our clients.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Image Card 1"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|sm"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" alt="<?php esc_attr_e( 'Project preview', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--sm)"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"600"}},"textColor":"main"} -->
<h3 class="wp-block-heading has-main-color has-text-color" style="font-size:var(--wp--preset--font-size--x-large);font-weight:600"><?php esc_html_e( 'Digital Solutions', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'Modern web applications and digital experiences built with cutting-edge technologies and best practices.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small","fontStyle":"normal"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:var(--wp--preset--font-size--small);font-style:normal;font-weight:600"><?php esc_html_e( 'Learn More →', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image Card 2"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|sm"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="<?php esc_attr_e( 'Project preview', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--sm)"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"600"}},"textColor":"main"} -->
<h3 class="wp-block-heading has-main-color has-text-color" style="font-size:var(--wp--preset--font-size--x-large);font-weight:600"><?php esc_html_e( 'Strategic Consulting', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'Expert guidance and strategic planning to help your business achieve its goals and maximize growth potential.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small","fontStyle":"normal"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:var(--wp--preset--font-size--small);font-style:normal;font-weight:600"><?php esc_html_e( 'Learn More →', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image Card 3"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|sm"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" alt="<?php esc_attr_e( 'Project preview', 'elayne' ); ?>" style="border-radius:var(--wp--preset--border-radius--sm)"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|x-large","fontWeight":"600"}},"textColor":"main"} -->
<h3 class="wp-block-heading has-main-color has-text-color" style="font-size:var(--wp--preset--font-size--x-large);font-weight:600"><?php esc_html_e( 'Creative Design', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="line-height:1.6"><?php esc_html_e( 'Innovative design solutions that captivate your audience and elevate your brand identity across all touchpoints.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small","fontStyle":"normal"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium);font-size:var(--wp--preset--font-size--small);font-style:normal;font-weight:600"><?php esc_html_e( 'Learn More →', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
