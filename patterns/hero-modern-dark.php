<?php
/**
 * Title: Modern Hero - Dark
 * Slug: elayne/hero-modern-dark
 * Categories: banner, featured
 * Keywords: hero, banner, cta, header, dark
 * Block Types: core/group
 * Description: A modern centered hero with dark gradient background, headline, tagline, CTA buttons and image below
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--large)","bottom":"var(--wp--preset--spacing--x-large)","left":"var(--wp--preset--spacing--50)","right":"var(--wp--preset--spacing--50)"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"radial-gradient(ellipse at top, rgba(99, 102, 241, 0.15) 0%, transparent 50%), radial-gradient(ellipse at bottom, rgba(139, 92, 246, 0.15) 0%, transparent 50%), linear-gradient(180deg, rgb(15, 23, 42) 0%, rgb(30, 41, 59) 100%)"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background:radial-gradient(ellipse at top, rgba(99, 102, 241, 0.15) 0%, transparent 50%), radial-gradient(ellipse at bottom, rgba(139, 92, 246, 0.15) 0%, transparent 50%), linear-gradient(180deg, rgb(15, 23, 42) 0%, rgb(30, 41, 59) 100%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--50)">
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--50)"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">
        
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 4.5rem)","fontWeight":"800","lineHeight":"1.1","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--40)"}}},"textColor":"white"} -->
        <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:clamp(2.75rem, 6vw, 4.5rem);font-weight:800;line-height:1.1;letter-spacing:-0.02em">Data to enrich your online business</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--50)"}}},"textColor":"white","fontSize":"medium"} -->
        <p class="has-text-align-center has-white-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--50);font-size:1.25rem;line-height:1.7">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--30)"}}} -->
        <div class="wp-block-buttons">
            
            <!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.875rem","bottom":"0.875rem"}},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
            <div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:8px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-size:1rem;font-weight:600">Get started</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.875rem","bottom":"0.875rem"}},"typography":{"fontWeight":"600","fontSize":"1rem"},"color":{"background":"rgba(255, 255, 255, 0.1)"}},"textColor":"white"} -->
            <div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-white-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:8px;background-color:rgba(255, 255, 255, 0.1);padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-size:1rem;font-weight:600">Learn more →</a></div>
            <!-- /wp:button -->
            
        </div>
        <!-- /wp:buttons -->
        
    </div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"4rem"} -->
    <div style="height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group">

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
        <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri() . '/patterns/images/desktop.webp'); ?>" alt="Dashboard preview" style="border-radius:12px"/></figure>
        <!-- /wp:image -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->