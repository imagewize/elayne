<?php
/**
 * Title: Upcoming Events Grid
 * Slug: elayne/event-upcoming-grid
 * Description: Display upcoming events in a responsive 3-column grid with event details
 * Categories: elayne/events
 * Keywords: events, calendar, upcoming, workshops, webinars, conferences
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/events"],"patternName":"elayne/event-upcoming-grid","name":"Upcoming Events Grid"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-main-color has-base-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:group {"layout":{"type":"constrained","wideSize":"1260px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color has-link-color" style="font-size:11px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'What\'s on', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","lineHeight":"1.1","letterSpacing":"-0.02em"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Upcoming events', 'elayne' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}},"typography":{"lineHeight":"1.6"}},"textColor":"main-accent","fontSize":"base"} -->
<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:var(--wp--preset--spacing--small);line-height:1.6"><?php esc_html_e( 'Workshops, webinars, and meetups you can join.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"32px"} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-light","backgroundColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-contrast-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"10px","right":"10px"},"blockGap":"3px"},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:12px;padding-right:10px;padding-bottom:12px;padding-left:10px">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'DEC', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"32px","fontWeight":"800","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
<p class="has-text-align-center" style="font-size:32px;font-weight:800;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '19', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","fontWeight":"500"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:12px;font-weight:500"><?php esc_html_e( 'Fri', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"primary-accent","backgroundColor":"primary-accent","textColor":"primary"} -->
<p class="has-primary-color has-primary-accent-background-color has-text-color has-background has-border-color has-primary-accent-border-color" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:11px;padding-bottom:5px;padding-left:11px;font-size:12px;font-weight:600"><?php esc_html_e( 'Online', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color" style="font-size:13px;font-weight:500"><?php esc_html_e( '10:30 – 12:00 SGT', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"700","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"10px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:10px;font-size:19px;font-weight:700;letter-spacing:-0.01em;line-height:1.3"><?php esc_html_e( 'Oceanarium Edu Tour', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"14px"}}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color" style="margin-bottom:14px;font-size:14px;line-height:1.6"><?php esc_html_e( 'A guided learning session with activities and Q&A. Suitable for kids & parents.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","textColor":"main-accent"} -->
<p class="has-main-accent-color has-tertiary-background-color has-text-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:7px;padding-right:11px;padding-bottom:7px;padding-left:11px;font-size:13px;font-weight:500"><?php esc_html_e( '📍 Marina Bay / Sentosa', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","textColor":"main-accent"} -->
<p class="has-main-accent-color has-tertiary-background-color has-text-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:7px;padding-right:11px;padding-bottom:7px;padding-left:11px;font-size:13px;font-weight:500"><?php esc_html_e( '📅 Limited seats', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"11px","bottom":"11px"}},"typography":{"fontSize":"14px","fontWeight":"600"}},"borderColor":"primary-accent"} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-border-color has-primary-accent-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:11px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:11px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Register', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"contrast","textColor":"main","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"11px","bottom":"11px"}},"typography":{"fontSize":"14px","fontWeight":"600"}},"borderColor":"border-light","className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-main-color has-contrast-background-color has-text-color has-background has-border-color has-border-light-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:11px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:11px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Details', 'elayne' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-light","backgroundColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-contrast-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"10px","right":"10px"},"blockGap":"3px"},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:12px;padding-right:10px;padding-bottom:12px;padding-left:10px">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'JAN', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"32px","fontWeight":"800","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
<p class="has-text-align-center" style="font-size:32px;font-weight:800;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '06', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","fontWeight":"500"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:12px;font-weight:500"><?php esc_html_e( 'Tue', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"primary","backgroundColor":"primary","textColor":"base"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-border-color has-primary-border-color" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:11px;padding-bottom:5px;padding-left:11px;font-size:12px;font-weight:600"><?php esc_html_e( 'In-person', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color" style="font-size:13px;font-weight:500"><?php esc_html_e( '19:00 – 21:00', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"700","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"10px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:10px;font-size:19px;font-weight:700;letter-spacing:-0.01em;line-height:1.3"><?php esc_html_e( 'WordPress Performance Night', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"14px"}}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color" style="margin-bottom:14px;font-size:14px;line-height:1.6"><?php esc_html_e( 'Fast sites, Core Web Vitals, caching, and real-case speed audits.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","textColor":"main-accent"} -->
<p class="has-main-accent-color has-tertiary-background-color has-text-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:7px;padding-right:11px;padding-bottom:7px;padding-left:11px;font-size:13px;font-weight:500"><?php esc_html_e( '📍 Amsterdam, NL', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","textColor":"main-accent"} -->
<p class="has-main-accent-color has-tertiary-background-color has-text-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:7px;padding-right:11px;padding-bottom:7px;padding-left:11px;font-size:13px;font-weight:500"><?php esc_html_e( '🔔 Free entry', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"11px","bottom":"11px"}},"typography":{"fontSize":"14px","fontWeight":"600"}},"borderColor":"primary-accent"} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-border-color has-primary-accent-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:11px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:11px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Get tickets', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"contrast","textColor":"main","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"11px","bottom":"11px"}},"typography":{"fontSize":"14px","fontWeight":"600"}},"borderColor":"border-light","className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-main-color has-contrast-background-color has-text-color has-background has-border-color has-border-light-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:11px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:11px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Details', 'elayne' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-light","backgroundColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-contrast-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"10px","right":"10px"},"blockGap":"3px"},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:12px;padding-right:10px;padding-bottom:12px;padding-left:10px">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'FEB', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"32px","fontWeight":"800","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
<p class="has-text-align-center" style="font-size:32px;font-weight:800;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( '14', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","fontWeight":"500"}},"textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color" style="font-size:12px;font-weight:500"><?php esc_html_e( 'Sat', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"primary-accent","backgroundColor":"primary-accent","textColor":"primary"} -->
<p class="has-primary-color has-primary-accent-background-color has-text-color has-background has-border-color has-primary-accent-border-color" style="border-width:1px;border-radius:999px;padding-top:5px;padding-right:11px;padding-bottom:5px;padding-left:11px;font-size:12px;font-weight:600"><?php esc_html_e( 'Online', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color" style="font-size:13px;font-weight:500"><?php esc_html_e( '16:00 – 17:30', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"700","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"10px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:10px;font-size:19px;font-weight:700;letter-spacing:-0.01em;line-height:1.3"><?php esc_html_e( 'SEO for SMEs: Quick Wins', 'elayne' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"14px"}}},"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color" style="margin-bottom:14px;font-size:14px;line-height:1.6"><?php esc_html_e( 'A practical checklist you can apply today. Includes Q&A and templates.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","textColor":"main-accent"} -->
<p class="has-main-accent-color has-tertiary-background-color has-text-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:7px;padding-right:11px;padding-bottom:7px;padding-left:11px;font-size:13px;font-weight:500"><?php esc_html_e( '📍 Live stream', 'elayne' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"11px","right":"11px"}},"border":{"radius":"999px","width":"1px"}},"borderColor":"border-light","backgroundColor":"tertiary","textColor":"main-accent"} -->
<p class="has-main-accent-color has-tertiary-background-color has-text-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:999px;padding-top:7px;padding-right:11px;padding-bottom:7px;padding-left:11px;font-size:13px;font-weight:500"><?php esc_html_e( '🔔 Recording included', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"11px","bottom":"11px"}},"typography":{"fontSize":"14px","fontWeight":"600"}},"borderColor":"primary-accent"} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-border-color has-primary-accent-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:11px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:11px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Save seat', 'elayne' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"contrast","textColor":"main","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"11px","bottom":"11px"}},"typography":{"fontSize":"14px","fontWeight":"600"}},"borderColor":"border-light","className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:14px;font-weight:600"><a class="wp-block-button__link has-main-color has-contrast-background-color has-text-color has-background has-border-color has-border-light-border-color wp-element-button" style="border-width:1px;border-radius:10px;padding-top:11px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:11px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Details', 'elayne' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
