<?php
/**
 * Title: Footer with Navigation Columns
 * Slug: elayne/footer-with-nav-columns
 * Description: Two-column footer layout with site info/social on left and multi-column navigation menu on right
 * Categories: elayne/footer
 * Keywords: footer, navigation, columns, social, menu, links
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px"},"blockGap":"var:preset|spacing|large"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"base","textColor":"main","layout":{"inherit":true,"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-main-color has-base-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"metadata":{"name":"Footer Columns"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"level":0,"isLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Experience relaxation and rejuvenation at Velora Spa and Retreat. Discover our luxurious treatments and unwind in a serene atmosphere. Your wellness journey starts here.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"main","iconBackgroundColorValue":"#14111f","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"metadata":{"name":"Nav Column"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600">About Us</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p>Our Story</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Team</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Careers</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Contact</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"metadata":{"name":"Nav Column"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600">Services</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p>Massages</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Facials</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Body Treatments</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Wellness Classes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"metadata":{"name":"Nav Column"}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600">Visit Us</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p>Book Now</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pricing</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Gift Cards</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Memberships</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Footer Subnav"},"align":"wide","style":{"spacing":{"padding":{"top":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<div class="wp-block-group alignwide has-secondary-color has-text-color has-link-color" style="padding-top:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© 2025 <strong>·</strong> Powered by WordPress and <a href="https://imagewize.com/moiraine">Moiraine</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p>Privacy Policy</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Terms of Service</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Spa Etiquette</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->