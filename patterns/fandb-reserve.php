<?php
/**
 * Title: F+B Reserve and Hours
 * Slug: elayne/fandb-reserve
 * Description: Deep cobalt reservation section with headline, CTA buttons, and opening hours table.
 * Categories: elayne/contact, elayne/food-beverage
 * Keywords: reserve, hours, booking, table, bistro, restaurant, kafe
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"metadata":{"categories":["elayne/contact","elayne/food-beverage"],"patternName":"elayne/fandb-reserve","name":"F+B Reserve and Hours"},"align":"full","className":"is-style-fandb-reserve","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"primary-alt","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-fandb-reserve has-primary-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:paragraph {"className":"fandb-eyebrow","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|border-light"}}} -->
<p class="fandb-eyebrow" style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--border-light)"><?php esc_html_e( 'Reservations', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"0.9","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|secondary"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--secondary);margin-top:0;margin-bottom:0;letter-spacing:-0.03em;line-height:0.9"><?php echo wp_kses_post( __( 'Hold a seat,<br><em>we\'ll keep the candle lit.</em>', 'elayne' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.5"},"color":{"text":"var:preset|color|primary-alt-accent"}}} -->
<p style="margin-top:0;margin-bottom:0;color:var(--wp--preset--color--primary-alt-accent);font-size:var(--wp--preset--font-size--medium);line-height:1.5"><?php esc_html_e( 'Tables are released eight weeks ahead. Walk-ins welcome at the bar — there are always two stools waiting.', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"border-light","textColor":"main","style":{"border":{"radius":"var:preset|border-radius|pill","width":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-main-color has-border-light-background-color has-text-color has-background wp-element-button" style="border-width:0px;border-radius:var(--wp--preset--border-radius--pill)"><?php esc_html_e( 'Book Online', 'elayne' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|secondary"},"border":{"color":"var:preset|color|secondary","radius":"var:preset|border-radius|pill","width":"1.5px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-color:var(--wp--preset--color--secondary);border-width:1.5px;border-radius:var(--wp--preset--border-radius--pill);color:var(--wp--preset--color--secondary)"><?php esc_html_e( 'Call to Reserve', 'elayne' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","className":"fandb-hours-table","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column fandb-hours-table" style="flex-basis:45%"><!-- wp:group {"className":"fandb-hours-row","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-hours-row" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-hours-day","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-day" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Mon – Wed', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-time","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-time" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '8:00 – 23:00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-hours-row fandb-hours-today","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-hours-row fandb-hours-today" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-hours-day","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-day" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Thursday', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-time","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-time" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '8:00 – 24:00 · Today', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-hours-row","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-hours-row" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-hours-day","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-day" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Fri – Sat', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-time","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-time" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '8:00 – 01:00', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-hours-row","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-hours-row" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-hours-day","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-day" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Sunday', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-time","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-time" style="margin-top:0;margin-bottom:0"><?php esc_html_e( '9:00 – 22:00 · Brunch only', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fandb-hours-row fandb-hours-closed","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group fandb-hours-row fandb-hours-closed" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"className":"fandb-hours-day","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-day" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Holidays', 'elayne' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-leader","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-leader" style="margin-top:0;margin-bottom:0"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fandb-hours-time","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="fandb-hours-time" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Closed', 'elayne' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
