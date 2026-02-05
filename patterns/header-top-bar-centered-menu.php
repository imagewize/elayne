<?php
/**
 * Title: Header with Top Bar and Centered Menu
 * Slug: elayne/header-top-bar-centered-menu
 * Description: Header with social icons, centered logo, cart/login, and a centered menu below
 * Categories: header
 * Keywords: spa, wellness, header, nav, social, logo, cart, login, spa
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<header class="wp-block-group alignfull has-base-background-color has-background has-link-color" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
  <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
    
    <!-- wp:social-links {"iconColor":"main","iconColorValue":"#000000","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only">
      <!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
      <!-- wp:social-link {"url":"https://bsky.app","service":"bluesky"} /-->
    </ul>
    <!-- /wp:social-links -->
    
    <!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontWeight":"600","fontSize":"1.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontFamily":"heading"} /-->
    
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
    <div class="wp-block-group">
      
      <!-- wp:navigation {"overlayMenu":"never","icon":"user","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"flex","orientation":"horizontal"}} -->
      <!-- wp:navigation-link {"label":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
      <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
    
  </div>
  <!-- /wp:group -->
  
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
  <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small)">
      <!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center"},"className":"mobile-centered-nav"} /-->
  </div>
  <!-- /wp:group -->
  
</header>
<!-- /wp:group -->