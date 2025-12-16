=== Elayne WordPress Block Theme ===
Contributors: Rhand
Tags: block-patterns, block-styles, blog, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, one-column, rtl-language-support, template-editing, threaded-comments, translation-ready, wide-blocks
Requires at least: 6.6
Tested up to: 6.9
Requires PHP: 8.0
Stable tag: 1.0.0-beta.13
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Launch a professional business website with the Elayne WordPress block theme! Elayne features 21 beautiful pattern designs and a fully-customizable design system with Global Styles. Elayne integrates seamlessly with all of the powerful WordPress editor features, giving you the most lightweight and powerful website builder — no expensive page builder plugin required!

= Key Features =

* 21 Professional Patterns - All 100% original, created specifically for Elayne
* Flexible Layout System - Multiple page & post layout options (centered, sidebar, wide)
* Business/Corporate Focus - Professional patterns for modern businesses
* Industry-Specific Content - Pattern sets optimized for spa, real estate, and professional services
* Sophisticated Design - Clean, modern patterns with professional aesthetics
* Conversion Optimization - Built-in patterns designed to convert visitors into customers
* Full Site Editing (FSE) - Complete control over your site design
* Block Extensions - Enhanced navigation and post excerpt functionality
* Fluid Typography - Responsive font scaling with clamp()
* Custom Shadows - Multiple shadow presets for depth

= Pattern Collection =

**Header Patterns (1)**
* header-light-with-hamburger-menu - Header with hamburger navigation and social icons

**Hero Patterns (2)**
* hero-two-tone - Split background hero with contrasting colors
* hero-with-cta - Hero section with prominent call-to-action

**Call-to-Action & Contact (3)**
* cta-newsletter - Newsletter signup with email capture
* contact-info - Contact information display
* contact-side-by-side - Two-column contact layout

**Features & Services (3)**
* three-column-feature-grid - Grid layout for feature showcasing
* services-feature-cards - Service cards with icons and descriptions
* agency-services-showcase - Four-column agency services grid with custom icons

**Team & Testimonials (3)**
* team-grid - Team member grid with photos and bios
* testimonial-card - Single testimonial card layout
* client-success-stories - Enhanced testimonials with ratings and success metrics

**Statistics (2)**
* stats-showcase - Statistics display with visual emphasis
* stats-list - List-style statistics presentation

**Blog/Posts (3)**
* blog-post-columns-portrait - Portrait-oriented blog grid
* post-featured-two-column - Featured post two-column layout
* author-box - Author biography with avatar and social links

**Support & Information (2)**
* faq - Collapsible FAQ section with accordion functionality
* career-opportunities - Job listings for recruitment pages

**Events (1)**
* event-upcoming-grid - Responsive 3-column event grid with date badges and registration buttons

= Layout Templates =

**Page Layouts:**
* Centered (default) - Standard centered page with title
* Full Width - Full-width page without title (perfect for landing pages)
* Wide - Wide page with title and expanded content area
* Wide No Title - Wide page without title section
* Left Sidebar - Two-column layout (33.33% sidebar, 66.66% content)
* Right Sidebar - Two-column layout (66.66% content, 33.33% sidebar)

**Post Layouts:**
* Centered (default) - Standard centered post layout with comments
* Wide - Wide post layout for long-form content
* Left Sidebar - Two-column post with left sidebar
* Right Sidebar - Two-column post with right sidebar

**Blog Index:**
* Grid Layout (default) - Three-column post grid
* List Layout - Single-column list with excerpts

All sidebar layouts include comments sections and "Latest Posts" grids. Sidebars are hidden on mobile devices for optimal responsive design.

= Typography & Design =

* Primary Font: Open Sans (variable weight, 300-800)
* Professional Color Palette: Business-focused color scheme
* Custom Image Sizes: Optimized for portrait and landscape layouts
* Block Patterns: Organized into 8 custom categories

= Block Extensions =

**Navigation Block Enhancements**
* Clickable parent items - Parent menu items become clickable links (click text = navigate, click chevron = toggle submenu)
* Improved chevron positioning - Better inline positioning of chevrons on mobile devices

**Post Excerpt Block Enhancements**
* Link excerpt to post - Wrap entire excerpt in clickable link to post
* Underline link control - Toggle link underline styling on/off

= Technical Requirements =

* WordPress 6.6 or higher
* PHP 8.0 or higher
* Block theme architecture
* Full Site Editing (FSE) support

== Installation ==

1. In your WordPress admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support Full Site Editing? =

Yes! Elayne is built as a modern block theme with full support for WordPress Full Site Editing (FSE).

= Can I customize the colors and fonts? =

Yes, all theme settings including colors, fonts, and spacing can be customized through the WordPress Site Editor using theme.json settings.

= Are the patterns customizable? =

Absolutely! All patterns are built with WordPress blocks and can be fully customized using the block editor.

= What image sizes does the theme use? =

Elayne includes custom image sizes optimized for different layouts:
* elayne-portrait-small (380×570) - 2:3 aspect ratio
* elayne-portrait-medium (380×507) - 3:4 aspect ratio
* elayne-portrait-large (380×475) - 4:5 aspect ratio
* elayne-single-hero (700×400) - 16:9-ish landscape

== Changelog ==

= 1.0.0-beta.13 - 12/16/25 =
* ADDED: New "Events" category (elayne/events) for event-related patterns.
* ADDED: event-upcoming-grid pattern - Responsive 3-column event grid with date badges, time, location, and registration buttons.
* ADDED: Calendar-style date display (month, day, weekday), event type badges (Online/In-person), and dual CTA buttons.
* CHANGED: Moved theme documentation files from demo/web/app/themes/elayne/docs/ to docs/elayne/ for better project organization.
* TECHNICAL: Pattern count increased from 20 to 21 original patterns.
* TECHNICAL: Event pattern features responsive grid layout with minimumColumnWidth: 20rem and full translation support.

= 1.0.0-beta.12 - 12/16/25 =
* ADDED: New "Cards" category (elayne/card) for reusable card-style patterns like author boxes and contact cards.
* CHANGED: Fixed duplicate pattern categories by standardizing all patterns to use namespaced categories (elayne/*).
* CHANGED: Updated hero patterns (hero-modern-light, hero-modern-dark) to use elayne/hero instead of core categories (banner, featured).
* CHANGED: Updated blog/post patterns (blog-post-columns, blog-post-list, template-index-grid) to use elayne/posts instead of core "posts" category.
* CHANGED: Updated author-box pattern to use elayne/card category for better organization.
* CHANGED: Updated contact-side-by-side pattern to use elayne/contact category.
* FIXED: Resolved duplicate category display issue in pattern library (previously showed "Posts 2" and other duplicates).
* TECHNICAL: Pattern categories now consistently use theme namespace (elayne/*) while WordPress core categories (header, footer) remain for template parts.

= 1.0.0-beta.11 - 12/16/25 =
* CHANGED: Removed horizontal padding from header patterns (header-standard, header-mobile) for full-width alignment.
* CHANGED: Updated client-success-stories pattern with improved styling - adjusted font sizes, removed border styling, updated color references.
* CHANGED: Updated agency-services-showcase pattern with additional wrapper group for better layout structure.
* CHANGED: Adjusted header navigation font size in header-mobile pattern for better consistency.
* TECHNICAL: Improved semantic HTML structure and enhanced theme color palette compatibility.

= 1.0.0-beta.10 - 12/15/25 =
* ADDED: Three new color scheme styles - Teal Bay, Denim Copper, and Forest Sage accessible via Appearance > Editor > Styles.
* CHANGED: Updated default theme.json color palette to use warmer "Ink & Sand" color scheme (softer ink blue and warm sand tones).
* CHANGED: Original teal color scheme now available as "Teal Bay" style variation.
* FIXED: template-page-wide-no-title.php now allows full-width (alignfull) patterns to work correctly.
* FIXED: Removed incorrect alignwide wrapper that was boxing content and preventing edge-to-edge patterns.
* TECHNICAL: Implemented WordPress theme.json styles system for color variations (styles/teal-bay.json, styles/denim-copper.json, styles/forest-sage.json).
* TECHNICAL: Wide No Title template now properly supports full-width pattern layouts for landing pages.

= 1.0.0-beta.9 - 12/15/25 =
* ADDED: New "3xl" font size (xxx-large) to theme.json with responsive clamp sizing (5rem to 9rem).
* CHANGED: Simplified client-success-stories pattern markup with cleaner wrapper structure.
* CHANGED: Completed full-width pattern padding consistency across all alignfull patterns.
* TECHNICAL: Improved pattern code quality with cleaner markup and better maintainability.

= 1.0.0-beta.8 - 12/15/25 =
* CHANGED: Added horizontal padding to full-width patterns (client reviews, newsletter CTA, hero variants, pricing) to keep side gutters on smaller screens.
* CHANGED: Updated wide page templates to use constrained post content layouts so alignfull patterns can break out correctly.
* TECHNICAL: Added alignfull layout helper CSS inside post content to allow edge-to-edge blocks while respecting global padding.

= 1.0.0-beta.7 - 12/14/25 =
* ADDED: faq pattern - Collapsible FAQ section with accordion-style expandable questions and answers.
* ADDED: agency-services-showcase pattern - Four-column service grid with custom SVG icons (Web Design, Marketing, Strategy, E-commerce).
* ADDED: career-opportunities pattern - Job listings section with detailed position cards for recruitment pages.
* ADDED: client-success-stories pattern - Enhanced testimonial layout with star ratings and client information.
* ADDED: author-box pattern - Author biography card with avatar, bio, and social links.
* ADDED: Four custom service icons (icon-service-web.svg, icon-service-marketing.svg, icon-service-strategy.svg, icon-service-commerce.svg).
* CHANGED: Pattern renamings - feature-boxes-with-icon-dark → agency-services-showcase, testimonials-with-big-text → client-success-stories.
* CHANGED: Style updates to agency-services-showcase and career-opportunities patterns.
* TECHNICAL: Pattern count increased from 15 to 20 original patterns.

= 1.0.0-beta.6 - 12/13/25 =
* ADDED: pricing-comparison pattern - Three-column pricing grid with checkmark lists and highlighted recommended plan.
* ADDED: Checkmark list block style (.is-style-checkmark-list) with SVG icons for pricing and feature lists.
* ADDED: hero-modern-light pattern - Light variant of modern hero with base background color.
* ADDED: Dutch (nl_NL) translation files with 50+ translatable strings.
* CHANGED: Pattern renamings for clarity - contact-info → contact-details, footer-light → footer-standard, header-light-with-hamburger-menu → header-mobile, header-light-with-standard-menu → header-standard, hero-modern → hero-modern-dark.
* CHANGED: Updated template parts (header.html, footer.html) to reference renamed patterns.
* TECHNICAL: Added check-circle.svg icon, README banner image, and checkmark list CSS in style.css.

= 1.0.0-beta.5 - 12/12/25 =
* ADDED: Two style variations - "Gray & Gold" (Bodoni Moda serif + grayscale + gold) and "Orange" (Mona Sans + vibrant orange).
* ADDED: Bodoni Moda variable font family (400-900 weights) with italic variant for elegant typography.
* ADDED: Style variations system in styles/ directory - switch entire design via Site Editor → Styles.
* ADDED: hero-modern pattern - Modern centered hero with gradient background and dual CTAs.
* CHANGED: client-reviews-orange renamed to client-reviews - Now uses theme colors instead of hardcoded orange.
* CHANGED: feature-grid renamed to three-column-feature-grid with improved spacing and vertical rhythm.
* CHANGED: Pattern spacing improvements across blog-post-columns, hero-two-tone, hero-with-cta, contact-info, and cta-newsletter.
* TECHNICAL: Style variations follow theme.json v3 spec with complete color, typography, and block style definitions.

= 1.0.0-beta.4 - 12/11/25 =
* ADDED: Custom block styles system with automatic loading via wp_enqueue_block_style().
* ADDED: Block-specific styles directory (assets/styles/) for conditional CSS loading.
* ADDED: core-site-title.css - Bottom border decoration with centered underline effect.
* ADDED: core-group.css - Background blur variant and responsive row improvements.
* ADDED: elayne-portrait-xs image size (350×525, 2:3 ratio) for extra small layouts.
* ADDED: header-light-with-standard-menu pattern - Desktop-optimized header with inline navigation.
* ADDED: footer-simple pattern - Minimal single-line footer with centered menu.
* CHANGED: Site title styling with custom font weight (300) in header patterns.
* CHANGED: Pattern refinements across post templates and blog layouts.
* TECHNICAL: Block styles loaded conditionally (performance optimization).

= 1.0.0-beta.3 - 12/10/25 =
* ADDED: New page layout patterns - Left Sidebar complements existing Right Sidebar option.
* ADDED: New post layout patterns - Left Sidebar, Right Sidebar, and Wide layouts for flexible post presentation.
* ADDED: Blog index list layout - Alternative single-column blog layout to complement the grid layout.
* ADDED: blog-post-list pattern - Reusable post query loop for list-style archives.
* CHANGED: Expanded post layout options from 1 variant (centered) to 4 variants (centered, left sidebar, right sidebar, wide).
* CHANGED: Expanded page sidebar options from 1 variant (right) to 2 variants (left, right).
* CHANGED: Enhanced layout flexibility to match modern block theme capabilities.
* CHANGED: Social links now prioritize Mastodon in header/footer patterns; Twitter/Facebook removed.
* ADDED: Bundled Mastodon, Instagram, LinkedIn, and Bluesky SVG icons under `patterns/images`.
* ADDED: Synced shared pattern image assets into `patterns/images/` for consistent rendering.

= 1.0.0-beta.2 - 12/10/25 =
* ADDED: Development tooling for WordPress.org publication (composer.json with WPCS, phpcs.xml, package.json).
* ADDED: GitHub Actions workflow for automated theme review checks.
* ADDED: Composer scripts for linting and code standards validation.

= 1.0.0-beta.1 - 12/10/25 =
* NEW: Initial beta release of Elayne block theme.
* NEW: 15 original block patterns across 8 categories with custom image sizes and fluid typography.
* NEW: Block extensions for navigation and post excerpt blocks with enhanced linking and dropdown behavior.

== Copyright ==

Elayne WordPress Theme, Copyright 2025 Jasper Frumau
Elayne is distributed under the terms of the GNU GPL v2 or later.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.


## Workspace Images (CC0 Public Domain)

### computer-hands.webp
- **Source:** [StockSnap.io](https://stocksnap.io/photo/wacom-computer-LNYEQYRA6G)
- **Title:** Wacom Computer
- **Photographer:** [Negative Space](https://www.negativespace.co)
- **License:** [CC0 1.0 Universal (Public Domain)](https://creativecommons.org/publicdomain/zero/1.0/)
- **Attribution:** Not required (CC0)
- **Description:** Hands typing on laptop with bracelet, professional workspace

### desktop.webp
- **Source:** [StockSnap.io](https://stocksnap.io/photo/mac-desktop-UCEBZORVVB)
- **Title:** Mac Desktop
- **Photographer:** [Andrew Pons](https://be.net/ahpons)
- **License:** [CC0 1.0 Universal (Public Domain)](https://creativecommons.org/publicdomain/zero/1.0/)
- **Attribution:** Not required (CC0)
- **Description:** Modern desk setup with monitor, MacBook, keyboard, and mouse

### guy-laptop.webp
- **Source:** [StockSnap.io](https://stocksnap.io/photo/code-coding-IX9Z71L6PD)
- **Title:** Code Coding
- **Photographer:** [Anita Peeples](https://stocksnap.io/author/11915)
- **License:** [CC0 1.0 Universal (Public Domain)](https://creativecommons.org/publicdomain/zero/1.0/)
- **Attribution:** Not required (CC0)
- **Description:** Team working together in colorful office space with laptops

## Team Member Avatars (Pexels License - GPL-Compatible)

### avatar-1.webp
- **Source:** [Pexels](https://www.pexels.com/photo/man-in-blue-dress-shirt-and-black-formal-suit-1043473/)
- **Title:** Man in Blue Dress Shirt and Black Formal Suit
- **Photographer:** [Chloe Kala](https://www.pexels.com/@chloekalaartist/)
- **License:** [Pexels License](https://www.pexels.com/license/) (GPL-compatible)
- **Attribution:** Not required (Pexels License)
- **Description:** Professional man in business attire with sunglasses

### avatar-2.webp
- **Source:** [Pexels](https://www.pexels.com/photo/a-man-reading-the-newspaper-while-drinking-coffee-10131170/)
- **Title:** A Man Reading the Newspaper While Drinking Coffee
- **Photographer:** Ron Lach
- **License:** [Pexels License](https://www.pexels.com/license/) (GPL-compatible)
- **Attribution:** Not required (Pexels License)
- **Description:** Professional man in business attire reading newspaper

### avatar-3.webp
- **Source:** [Pexels](https://www.pexels.com/photo/a-woman-holding-a-phone-8067901/)
- **Title:** A Woman Holding a Phone
- **Photographer:** Alena Shekhovtcova
- **License:** [Pexels License](https://www.pexels.com/license/) (GPL-compatible)
- **Attribution:** Not required (Pexels License)
- **Description:** Professional woman in business casual attire

### avatar-4.webp
- **Source:** [Pexels](https://www.pexels.com/photo/man-in-blue-dress-shirt-and-black-formal-suit-1043473/)
- **Title:** Man in Blue Dress Shirt and Black Formal Suit
- **Photographer:** [Chloe Kala](https://www.pexels.com/@chloekalaartist/)
- **License:** [Pexels License](https://www.pexels.com/license/) (GPL-compatible)
- **Attribution:** Not required (Pexels License)
- **Description:** Professional man in business attire with sunglasses (same as avatar-1)

### avatar-5.webp
- **Source:** [Pexels](https://www.pexels.com/photo/woman-wearing-white-multi-colored-floral-top-1877913/)
- **Title:** Woman Wearing White Multi Colored Floral Top
- **Photographer:** [Chloe Kala](https://www.pexels.com/@chloekalaartist/)
- **License:** [Pexels License](https://www.pexels.com/license/) (GPL-compatible)
- **Attribution:** Not required (Pexels License)
- **Description:** Professional woman in casual floral attire

### avatar-7.webp
- **Source:** [Pexels](https://www.pexels.com/photo/woman-wearing-blue-shawl-lapel-suit-jacket-1036622/)
- **Title:** Woman Wearing Blue Shawl Lapel Suit Jacket
- **Photographer:** [Moose Photos](https://www.pexels.com/@moose-photos-170195/)
- **License:** [Pexels License](https://www.pexels.com/license/) (GPL-compatible)
- **Attribution:** Not required (Pexels License)
- **Description:** Professional woman in blue business suit

---

## Logo Images

**Status:** Logo images logo-1.webp, logo-2.webp, logo-3.webp, logo-4.webp, logo-5.webp are geometric designs created by theme author and do not require attribution or replacement.

Other assets:

- The Open Sans font is available via the SIL Open Font License 1.1: https://fonts.google.com/specimen/Open+Sans
- The Mona Sans font is available via the SIL Open Font License 1.1: https://github.com/github/mona-sans
- The Bitter font is available via the SIL Open Font License 1.1: https://fonts.google.com/specimen/Bitter

== Support ==

For support and documentation, visit https://imagewize.com
