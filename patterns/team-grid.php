<?php
/**
 * Title: Team Member Grid
 * Slug: elayne/team-grid
 * Description: Showcase your team with professional profiles in a clean three-column grid layout
 * Categories: elayne/features
 * Keywords: team, staff, people, about, employees, members, profiles
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/features"],"patternName":"elayne/team-grid","name":"Team Member Grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"},"blockGap":"0"}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Meet Our Team', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"textColor":"main-accent","fontSize":"medium"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large)"><?php esc_html_e( 'Dedicated professionals committed to delivering exceptional results for your business', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-1.webp" alt="<?php esc_attr_e( 'Team member photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"medium"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Sarah Johnson', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"base"} -->
<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Chief Executive Officer', 'elayne' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'With 15+ years of industry experience, Sarah leads our strategic vision and drives innovation across all operations.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt="<?php esc_attr_e( 'Team member photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"medium"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Michael Chen', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"base"} -->
<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Head of Operations', 'elayne' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'Michael ensures seamless execution and operational excellence, bringing efficiency and quality to every project.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-3.webp" alt="<?php esc_attr_e( 'Team member photo', 'elayne' ); ?>" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"medium"} -->
<h3 class="wp-block-heading has-main-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Emily Rodriguez', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"base"} -->
<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Client Success Director', 'elayne' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'Emily builds lasting client relationships and ensures every partnership delivers exceptional value and measurable success.', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
