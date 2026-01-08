# Changelog

All notable changes to the Elayne WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.5.0] - 2026-01-08

### Added

**New Header Pattern - Header Double Bar:**
- Two-bar header design with top contact bar and bottom navigation
- Top bar features email, phone, and search overlay trigger (right-aligned)
- Bottom bar includes left-aligned logo with navigation menu
- Top bar hides on mobile for optimal responsive experience
- Utilizes Elayne Blocks Search Overlay Trigger for enhanced search functionality
- Includes SVG icons for email, phone, and search (Eva Icons, MIT licensed)

**New Icon Assets:**
- Added icon-email.svg, icon-phone.svg, and icon-search.svg from Eva Icons collection
- Icons use `currentColor` for automatic theme color inheritance
- Licensed under MIT License (GPL-compatible)

### Changed

**Header Pattern Refinements:**
- Reduced site title font size in "Header Top Bar Centered Menu" from 2.5rem to 1.8rem for better proportion

**Documentation Updates:**
- Updated pattern count from 73 to 74 patterns in README.md and readme.txt
- Updated Headers & Footers category from 7 to 8 patterns
- Added Elayne Blocks Search Overlay Trigger to companion plugin description
- Enhanced companion plugin documentation with detailed block descriptions

### Fixed

**Inline Icon Alignment:**
- Fixed vertical alignment issues for small inline icons (e.g., 20×20px images)
- Applied `display: inline-flex` and `align-items: center` to resized image blocks
- Ensures icons align properly with adjacent text in header patterns

### Technical

**CSS Improvements:**
- Added new section in core-image.css for inline icon alignment fixes
- Targets `.wp-block-image.is-resized` elements to prevent baseline misalignment
- Zero margin on resized image figures to eliminate unwanted spacing",

## [1.4.2] - 2026-01-07

### Changed

**Legal Hero Split Layout:**
- Converted from CSS columns to CSS grid layout for better responsive control
- Improved mobile layout: image appears first, followed by content, then reviews
- Enhanced desktop layout: content spans full height in left column, image and reviews stack in right column
- Reduced top/bottom padding from `xxx-large` to `large` for more compact section spacing

**Legal Pattern Spacing Adjustments:**
- Reduced vertical padding in multiple legal patterns (services, testimonials, contact) from `xxx-large` to `large` or `xx-large` for better visual rhythm
- More balanced spacing throughout legal template sections

### Technical

**Code Quality Improvements:**
- Removed organizational HTML comments from legal pattern files (legal-team.php, legal-stats.php, legal-testimonials.php)
- Fixed block validation issues caused by HTML comments between opening tags and WordPress block comments
- Added comprehensive documentation in CLAUDE.md about HTML comment restrictions in block patterns
- Cleaner pattern markup improves WordPress block validation and prevents console errors",

## [1.4.1] - 2026-01-06

### Added

**Developer Installation Documentation:**
- Added detailed developer installation instructions in CONTRIBUTING.md
- Included GitHub repository clone commands for theme and Elayne Blocks plugin
- Added activation instructions via WordPress admin

**CSS Effects Documentation:**
- Documented 32 interactive block styles across 4 categories (Button, Card/Group, Image, Text/Link)
- Added technical implementation details: pure CSS, hardware-accelerated, accessibility features
- Explained browser compatibility and print optimization

### Changed

**README.md Structure:**
- Streamlined installation section with link to detailed developer guide in CONTRIBUTING.md
- Condensed pattern library description from detailed list to concise summary format
- Simplified style variations from detailed descriptions to compact list format
- Restructured typography section with complete font details and design system overview
- Condensed "Working with Full Site Editing" section to "Getting Started" with streamlined guidance
- Simplified Elayne Blocks plugin section with concise feature list

**Font Licensing Documentation:**
- Expanded font licensing section in readme.txt with detailed information for all 6 fonts
- Added complete font details: license type, source URLs, weights, variants, and usage context
- Organized fonts with clear headings: Open Sans, Cormorant Garamond, Quicksand, Bodoni Moda, Mona Sans, Bitter
- Specified which style variations use which fonts

### Technical

**Documentation Organization:**
- Moved developer-specific content from README.md to CONTRIBUTING.md
- Separated user-facing documentation from contributor/developer documentation
- Improved information hierarchy and discoverability",

## [1.4.0] - 2026-01-06

### Added - CSS Effect System
**New Interactive Block Styles:**
- **Button Effects:** 6 new animation styles including Arrow Slide (arrow slides right on hover), Gradient Shift (animated gradient background), Shimmer (light sweep effect), Glow (glowing shadow), Border Draw (outline fills on hover), and Slide Up (background slides from bottom)
- **Card/Group Effects:** 7 new interactive styles including Elevate on Hover (card lifts with shadow), Glow Border (animated gradient border), Image Zoom (zoom nested images), Tilt Card (3D perspective tilt), Scale Hover (subtle scale up), Border Pulse (pulsing border animation), and Slide Border (border slides from edges)
- **Image Effects:** 9 new hover styles including Zoom Hover, Grayscale to Color, Rotate Icon, Blur, Brightness, Sepia, Lift Shadow, Border Reveal, and Tilt 3D
- **Text/Link Effects:** 10 new typography styles including Animated Underline (expands from left), Animated Underline Center (expands from center), Gradient Text (gradient clipped to text), Gradient Text Animated (shifting gradient), Highlight Fade (background appears on hover), Link Hover Shift (slides right with underline), Underline Slide (animated heading underline), Fade In (text fades in with upward movement), and Animated Markers (list markers slide on hover)

**Effect System Features:**
- Pure CSS animations with hardware acceleration for smooth 60fps performance
- Comprehensive accessibility support with enhanced focus states and reduced motion preferences
- Print stylesheet optimization (removes all effects for clean printing)
- RTL language support for text/link effects
- Cross-browser compatibility with fallbacks for unsupported features

### Changed - Typography Improvements
**Link Styling:**
- Removed default underline from all links (modern, cleaner appearance)
- Added medium font weight (500) to paragraph links for better visual hierarchy
- Links now only show underline on hover state

### Technical
**New Stylesheet Files:**
- Added `assets/styles/core-button.css` - Button effect system (260 lines)
- Added `assets/styles/core-image.css` - Image effect system (231 lines)
- Added `assets/styles/core-paragraph.css` - Text/link effect system (348 lines)
- Updated `assets/styles/core-group.css` - Complete rewrite with card/group effects (271 lines, previously 73 lines)

**Block Style Registration:**
- Added `elayne_register_effect_block_styles()` function in `functions.php`
- Registers 32 new block style variations across 6 core blocks
- Supports core/button, core/group, core/image, core/paragraph, core/heading, and core/list blocks

**Performance Optimizations:**
- Uses CSS `will-change` property for transform-heavy animations
- Leverages GPU acceleration via `transform` and `opacity` transitions
- Media query for hover capability detection (`@media (hover: hover) and (pointer: fine)`)
- Automatic animation disabling for `prefers-reduced-motion` users",

## [1.3.3] - 2026-01-03

### Changed

**Pattern Library Count Update:**
- Updated pattern count from 72 to 73 professionally designed patterns
- Headers & Footers category expanded from 6 to 7 patterns
- Added standard header with phone number to header variations

**README.md Documentation Completion:**
- Completed documentation restructure started in 1.3.2
- Finalized separation of user-facing documentation (README.md) from developer documentation (CONTRIBUTING.md)
- Pattern library section now reflects accurate counts across all categories",

## [1.3.2] - 2026-01-03

### Changed

**Navigation Styling:**
- Removed underline decoration from current menu items and hovered parent menu buttons for cleaner appearance

**Firefox Link Rendering:**
- Added browser-specific fix to standardize link underline thickness at 0.1rem in Firefox

### Added

**New Header Pattern:**
- Added "Header Standard with Phone Number" pattern (header-standard-with-tel-number) with logo, inline navigation, and phone number
- Phone number displays on mobile only, with full navigation visible on desktop
- Includes responsive visibility classes (hide-on-desktop/hide-on-mobile)

### Technical

**CSS Enhancements:**
- Added media query for .hide-on-desktop class (min-width: 782px)
- Added Firefox-specific @-moz-document rule for consistent link underline thickness",

## [1.3.1] - 2026-01-02

### Added

**CONTRIBUTING.md Developer Guide:**
- Comprehensive developer documentation covering technical requirements, project structure, and contribution guidelines
- Detailed pattern development guidelines including responsive grid layouts and horizontal padding best practices
- Industry vertical pattern creation guidelines with naming conventions and image organization
- Translation, code standards, and testing checklists for contributors

**Legal Services Industry Vertical:**
- New legal-focused patterns and content optimized for law firms and legal professionals
- Legal Blue style variation with professional navy blue and gold palette
- Legal-specific images stored in `patterns/images/legal/` directory

### Changed

**README.md Documentation Restructure:**
- Condensed pattern library section from detailed 100+ line listing to concise category-based overview
- Simplified documentation by moving developer details to CONTRIBUTING.md
- Pattern count updated from 47 to 72 patterns with reorganized category counts
- Industry verticals section now includes Legal Services alongside Spa & Wellness and Real Estate

### Technical

**Documentation Organization:**
- Separated user-facing documentation (README.md) from developer documentation (CONTRIBUTING.md) for better organization

## [1.3.0] - 2026-01-02

### Added

**New Vertical Pattern Categories:**
- Added Legal Services category (`elayne/legal`) with professional law firm patterns
- Added Fintech & Technology category (`elayne/fintech`) for financial and tech businesses
- Added Beauty & Salon category (`elayne/salon`) for beauty and wellness services
- Added Retail & E-commerce category (`elayne/retail`) for online and physical stores

**Legal Services Patterns:**
- Legal Services Hero (`elayne/legal-hero`) - Professional hero section with call-to-action buttons
- Legal Hero with Statistics (`elayne/legal-hero-with-stats`) - Premium hero with integrated statistics and gradient background
- Legal Hero Split Layout (`elayne/legal-hero-split`) - Split-screen hero with trust badge, features, and client reviews
- Legal Contact Information (`elayne/legal-contact`) - Contact details with office location, phone, email, and hours

**Legal Services Assets:**
- Added 6 custom SVG icons for practice areas: business law, criminal defense, estate planning, family law, litigation, and real estate law
- Added 3 attorney portrait images (WebP format) for team sections
- Added professional law office hero image (WebP format)

### Technical

**Pattern System Enhancements:**
- Extended pattern category registration to support vertical-specific content organization
- All new patterns include proper metadata, categories, keywords, and viewport width settings
- Legal patterns feature responsive layouts with grid-based column systems

## [1.2.5] - 2025-12-31

### Added

**Pattern URL Documentation:**
- Added comprehensive documentation about pattern URL behavior and database content
- Documented how `get_template_directory_uri()` returns environment-specific URLs that get hardcoded into database
- Included troubleshooting steps for mixed content warnings when moving content between environments
- Added search-replace commands for URL sanitization when deploying content to production
- Cross-referenced main CLAUDE.md documentation for URL sanitization workflows

### Technical

**Logo Asset Cleanup:**
- Removed unused PNG logo files in multiple sizes (16x16, 32x32, 48x48)
- Removed dark, outline, primary, and white logo variants
- Theme now uses SVG logos exclusively for better scalability and performance

## [1.2.4] - 2025-12-31

### Changed - Navigation and post metadata styling

**Navigation Chevron Spacing:**
- Reduced gap between parent menu text and chevron from 0.5rem to 0.25rem
  - Updated `.moiraine-nav-parent-wrapper` gap property in core-navigation.css
  - Updated `.moiraine-nav-toggle` margin-left in overlay mode
  - Tighter, more compact visual appearance for navigation menus
  - Consistent spacing across desktop and mobile overlay modes

**Post Author and Date Alignment:**
- Added CSS fixes for vertical alignment of post author and post date blocks
  - `.wp-block-post-author` now uses flexbox with `align-items: center`
  - `.wp-block-post-author__content` aligns author name with avatar center
  - `.wp-block-post-date` aligns with author name when in flex container
  - Prevents misaligned metadata in post layouts

### Technical

- Navigation spacing improvements enhance visual consistency
- Post metadata alignment fixes improve readability in sidebar and post layouts
- CSS changes isolated to core-navigation.css and style.css

## [1.2.3] - 2025-12-30

### Changed - License update

**License Version Update:**
- Updated theme license from GPL v2 to GPL v3
  - style.css: Changed license from "GNU General Public License v2 or later" to "GNU General Public License v3 or later"
  - License URI updated from https://www.gnu.org/licenses/gpl-2.0.html to https://www.gnu.org/licenses/gpl-3.0.html
  - Added full GPL v3 license text to LICENSE.md file
  - Removed redundant license section from README.md (license details now in LICENSE.md)
  - readme.txt updated to reflect GPL v3 licensing

### Technical

- Theme now consistently uses GPL v3 across all files
- LICENSE.md contains complete GPL v3 license text (674 lines)
- Copyright notice in style.css and readme.txt updated accordingly

## [1.2.2] - 2025-12-29

### Fixed - Mobile spacing and pattern refinements

**Pattern Fixes:**
- **services-feature-cards** - Fixed missing horizontal padding on mobile
  - Added `var:preset|spacing|medium` to left/right padding on outer full-width group
  - Prevents edge-to-edge content on mobile devices
  - Corrects regression from version 1.2.1 where horizontal padding was incorrectly removed
  - Pattern now follows Elayne responsive padding standard

**Pattern Improvements:**
- **three-column-feature-grid** - Code formatting and spacing refinements
  - Removed background colors from individual feature cards (cleaner tertiary background)
  - Adjusted bottom margin spacing from `xx-large` to `large` for better vertical rhythm
  - Changed grid `blockGap` from `x-large` to `0` for consistent card spacing
  - Added `blockGap: 0` to individual cards for tighter content spacing
  - Improved code formatting with cleaner indentation
  - More maintainable markup structure

### Technical

- Mobile spacing now consistent across all full-width patterns
- Constrained layout containers require horizontal padding for proper mobile display
- Pattern code quality improvements for better maintainability

## [1.2.1] - 2025-12-28

### Changed - Responsive layout improvements

**Pattern Responsiveness Enhancements:**
- **shop-overview-three-columns** - Converted from 3-column layout to grid layout with `minimumColumnWidth: 280px`
  - Responsive breakpoints: 3 columns (desktop) → 2 columns (tablet) → 1 column (mobile)
  - Smoother responsive behavior across all device sizes
  - Better user experience with proper tablet layout
- **team-grid** - Converted from columns to grid layout with `minimumColumnWidth: 280px`
  - Proper 3-2-1 column responsive flow
  - Improved tablet display (2 columns instead of cramped 3)
- **stats-showcase** - Converted stats grid from columns to grid layout with `minimumColumnWidth: 280px`
  - Better responsive behavior for statistics cards
- **stats-list** - Converted feature list from columns to grid layout with `minimumColumnWidth: 280px`
  - Improved mobile and tablet display
- **services-feature-cards** - Removed horizontal padding from outer container (padding: 0)
  - Full-width background now extends properly on all screen sizes
  - Removed redundant backgroundColor from outer group (already on constrained inner group)
- **career-opportunities** - Removed horizontal padding from outer container (padding: 0)
  - Consistent with other full-width patterns
- **template-page-centered** - Changed default alignment to "full" for better pattern display
  - Patterns with full-width backgrounds now work correctly
- **wellness-cover-highlight** - Removed default backgroundColor (uses cover block background)
  - Cleaner pattern structure

**Header Pattern Updates:**
- **header-standard** - Major responsive improvements
  - Added horizontal padding (left/right: `var:preset|spacing|medium`) to header container
  - Changed navigation flexWrap from "wrap" to "nowrap" for better mobile behavior
  - Added "hide-on-mobile" class to social links (hidden on mobile, shown on desktop)
  - Removed unnecessary wrapper group around site title
  - Simplified header structure for better mobile display
  - Navigation and site title now properly aligned on all screen sizes

**Navigation Improvements:**
- Added `.hide-on-mobile` CSS rule to `core-navigation.css`
  - Hides elements with this class on screens ≤781px
  - Used for social links in header-standard pattern
  - Provides cleaner mobile header layout

**Template Parts:**
- Updated default header (`parts/header.html`) from header-mobile to header-standard
  - header-standard now properly optimized for both desktop and mobile
  - Single header pattern for all screen sizes
  - Simplified theme architecture

### Technical - Responsive layout standardization

- Converted 5 patterns from `wp:columns` to grid layout with `minimumColumnWidth`
- Grid layouts provide automatic 3→2→1 column responsive behavior
- Eliminated cramped 3-column layouts on tablet devices
- Full-width pattern padding now consistently applied only to constrained inner groups
- Header pattern now uses single responsive design instead of separate mobile/desktop variants

## [1.2.0] - 2025-12-27

### Added - WooCommerce integration

**WooCommerce Product Archive Support:**
- **Custom Product Archive Template** - New `templates/archive-product.html` template for WooCommerce shop pages
  - Responsive 3-2-1 column grid layout (3 desktop, 2 tablet, 1 mobile)
  - Product collection block with breadcrumbs, sorting, and pagination
  - Review testimonial pattern at bottom of shop page
  - Integrates seamlessly with WooCommerce product displays
  - Uses Elayne design system (spacing, colors, typography)

**Responsive Product Grid CSS:**
- Custom CSS Grid override for WooCommerce Product Collection block
  - Overrides WooCommerce's default flexbox layout with CSS Grid
  - Responsive breakpoints: 3 columns (>1024px), 2 columns (641px-1024px), 1 column (≤640px)
  - Properly sized columns using `grid-template-columns: repeat(n, 1fr)`
  - Removes WooCommerce's width constraints on list items (`width: auto !important`)
  - Better responsive behavior than WooCommerce's default (which uses flexbox + percentage widths)
  - Defined in `style.css` lines 223-246

### Technical - WooCommerce implementation

- Template references `elayne/two-column-review` pattern for social proof
- CSS targets `.wc-block-product-template.is-flex-container` for grid conversion
- Uses `!important` declarations to override WooCommerce's inline styles
- Grid gap adjusts responsively (2rem desktop, 1.5rem tablet, 1rem mobile)
- Compatible with WooCommerce Product Collection block (modern block-based approach)
- No JavaScript required - pure CSS solution

## [1.1.2] - 2025-12-27

### Added - Elayne branding and logo assets

**New Logo Assets:**
- **Elayne Logo Collection** - Complete logo system in multiple formats and sizes
  - Primary gold logo (SVG + PNG): elayne-logo-primary.svg, elayne-logo-primary.png
  - Dark logo (SVG + PNG): elayne-logo-dark.svg, elayne-logo-dark.png
  - White logo (SVG + PNG): elayne-logo-white.svg, elayne-logo-white.png
  - Outline logo (SVG + PNG): elayne-logo-outline.svg, elayne-logo-outline.png
  - Favicon sizes (16x16, 32x32, 48x48 PNG) for all logo variants
  - All logos stored in `assets/images/logos/` directory
  - SVG format for scalability, PNG with drop shadows for raster use
  - Gold color (#D4AF37) for premium branding

**README Updates:**
- Updated README.md with Elayne logo header
  - Replaced text banner with centered SVG logo
  - Cleaner, more professional presentation
  - Logo at 120x140px for optimal display

### Changed - Pattern and CSS refinements

**Pattern Updates:**
- **portfolio-grid-masonry** - Layout and link styling improvements
  - Changed from CSS Grid to true masonry layout using CSS columns
  - Added `portfolio-masonry-grid` class with column-count: 3
  - Responsive breakpoints: 2 columns (tablet), 1 column (mobile)
  - Portfolio item titles now have hover underline effect
  - Added text-decoration: none to default state for cleaner appearance
  - Better visual hierarchy with improved link states
- **card-call-to-action** - Code cleanup and formatting
  - Simplified markup with cleaner indentation
  - Removed unnecessary shadow styling (uses default card styling)
  - More maintainable code structure
- **team-grid** - Code formatting improvements
  - Cleaner indentation for better readability
- **stats-showcase** - Minor spacing adjustments
  - Improved consistency with other patterns

**CSS Enhancements:**
- **core-navigation.css** - Underline styling refinements
  - Added `text-decoration-thickness: 1px` to navigation links
  - Consistent underline thickness across all navigation states
  - Applied to both standard navigation and clickable parent links
  - Better visual consistency for hover states
- **style.css** - Portfolio masonry layout system
  - Added `.portfolio-masonry-grid` class with CSS column layout
  - Three-column masonry on desktop (column-count: 3)
  - Two-column on tablet (max-width: 1024px)
  - Single-column on mobile (max-width: 640px)
  - Prevents column breaks within portfolio items (break-inside: avoid)
  - Configurable column gap (16px default)

### Technical

- Total logo files: 20 (4 variants × 4 sizes + 4 SVG originals)
- Logo design features lily flower symbolism for elegance and sophistication
- All PNG logos include subtle drop shadows for depth
- SVG logos provide scalability for all screen sizes
- Masonry layout uses CSS columns (no JavaScript required)
- Improved pattern code maintainability with consistent formatting

## [1.1.1] - 2025-12-26

### Added - Enhanced navigation system with clickable parents

**Navigation Enhancements:**
- **Clickable Parent Menu Items** - Parent menu items can now be both clickable links AND dropdown toggles
  - Click text to navigate to parent page
  - Click chevron to toggle submenu
  - Uses `hasClickableParents` attribute on Navigation block
  - Preserves WordPress Interactivity API compatibility
  - Includes fallback JavaScript for enhanced compatibility
- **Improved Chevron Positioning** - Better chevron icon placement in navigation menus
  - Chevron icons properly nested inside buttons for HTML5 validation
  - Cleaner DOM structure for accessibility
  - Uses `hasImprovedChevrons` attribute on Navigation block
- **Custom Navigation Styles** - Comprehensive navigation styling system
  - New `assets/styles/core-navigation.css` with organized CSS architecture
  - Desktop dropdown styling with shadows and borders
  - Mobile overlay menu styling
  - CSS custom properties for consistent spacing and sizing
  - Responsive design for all viewport sizes
- **Navigation Frontend Script** - Client-side enhancement for navigation functionality
  - Automatically enqueued for all pages
  - Handles clickable parent conversion
  - Fixes HTML5 validation issues
  - Lightweight (no dependencies)

### Changed - Pattern and style refinements

**Pattern Updates:**
- **header-standard** - Updated site title styling
  - Changed font weight from 300 (light) to 600 (semi-bold) for better visibility
  - Adjusted font size from "medium" to "base" for consistency
  - Removed custom "has-bottom-border" class
  - Added `hasClickableParents` and `hasImprovedChevrons` to navigation block
- **footer-simple** - Updated footer link colors
  - Changed default text color from "secondary" to "main" for better contrast
  - Updated link hover color from "main" to "primary" for better visual feedback
- **stats-showcase** - Improved avatar styling
  - Removed hardcoded width/height (60px) from avatar image
  - Added `is-avatar` class for consistent avatar sizing via theme.json
  - Uses `var(--wp--custom--avatar-size)` for centralized sizing
  - Maintains `is-style-rounded-full` and `is-style-rounded` classes

### Technical

- Frontend JavaScript uses vanilla DOM manipulation (no dependencies)
- CSS organized with table of contents and clear sections
- WordPress Interactivity API attributes preserved on converted elements
- HTML5 validation improved by proper chevron icon nesting
- Navigation enhancements work with all WordPress themes (not theme-specific)
- Avatar sizing now centralized via theme.json custom properties

## [1.1.0] - 2025-12-25

### Added - Spa & Wellness style variation and patterns

**New Style Variation:**
- **Spa & Wellness** - Elegant spa and wellness color scheme with sophisticated typography
  - Cormorant Garamond serif font for elegant headings with refined letterforms
  - Quicksand sans-serif for clean, friendly body text
  - Soothing spa color palette: Teal (#5BBCD6), Ocean Sage (#2D4A4E), soft accent tones
  - Three custom duotone presets (Spa Teal, Ocean Sage, High Contrast)
  - Three gradient presets (Spa Teal, Ocean Depth, Peaceful Sky)
  - Perfect for spas, wellness centers, yoga studios, and health retreats
  - Accessible via Appearance > Editor > Styles

**New Fonts:**
- **Cormorant Garamond** - Elegant serif typeface (variable weight 300-700) with italic variant
- **Quicksand** - Modern rounded sans-serif (variable weight 300-700)
- Self-hosted WOFF2 format for optimal performance

**New Patterns (13):**

*Header Patterns (1):*
- **header-top-bar-centered-menu** - Header with centered logo and navigation menu with top bar
  - Clean centered layout
  - Optional top announcement bar
  - Perfect for spa and wellness sites

*Footer Patterns (1):*
- **footer-with-nav-columns** - Two-column footer with site info/social and multi-column navigation
  - Site title, description, and social links on left
  - Three navigation columns on right (About, Services, Visit)
  - Copyright and legal links at bottom
  - Flexible layout for any business type

*Hero Patterns (1):*
- **spa-home-hero** - Hero section with overlapping colored box on image background
  - Dramatic overlapping layout
  - Image on left, content box overlaps on right
  - Perfect for spa homepages and landing pages

*Call-to-Action Patterns (1):*
- **spa-booking-cta** - Booking call-to-action with form integration
  - Encourages appointment bookings
  - Form-ready layout
  - Conversion-optimized design

*Features Patterns (4):*
- **two-column-feature** - Two-column feature section with image and content
  - Balanced 50/50 layout
  - Image on left, content on right
  - Versatile for services, features, about sections
- **overlapping-feature-columns** - Feature columns with overlapping image effect
  - Modern overlapping design
  - Image overlaps content box
  - Creates visual depth and interest
- **overlapping-feature-columns-reversed** - Reversed overlapping feature columns
  - Mirror layout of overlapping-feature-columns
  - Content on left, image overlaps from right
  - Provides layout variety
- **wellness-cover-highlight** - Full-width wellness cover section with highlight box
  - Dramatic full-width cover image
  - Overlay content box
  - Perfect for hero sections and feature highlights

*Testimonials & Reviews (3):*
- **testimonials-grid** - Three-column testimonial grid with star ratings
  - Client testimonials in card layout
  - Star ratings for credibility
  - Professional presentation
- **two-column-review** - Two-column review section with image and testimonial
  - Client photo with testimonial
  - Quote-style formatting
  - Personal touch for reviews
- **review-text-image-overlap** - Review with overlapping text and image
  - Text overlaps image for visual interest
  - Modern magazine-style layout
  - Engaging testimonial presentation

*Blog/Posts Patterns (1):*
- **four-column-wellness-posts** - Four-column grid for wellness blog posts
  - Compact grid layout
  - Perfect for blog archives and related posts
  - Optimized for wellness content

*Shop/E-commerce Patterns (1):*
- **shop-overview-three-columns** - Three-column product grid for spa/wellness shops
  - Product showcase layout
  - Image-focused cards
  - Perfect for WooCommerce integration

**New Pattern Images:**
- Added spa-focused images in `patterns/images/spa/` directory:
  - **Treatment images**: back-massage.webp, spa-treatment-hot-stones.webp, spa-treatment-landscape.webp, spa-treatment-zoomed.webp, yoga-pose.webp
  - **Client avatars**: avatar-1.webp, avatar-2.webp, avatar-3.webp, avatar-4.webp, review-profile.webp
  - **Product images** (shop subdirectory): bath-salt.webp, massage-oil.webp, serum.webp, supplements.webp
  - All images optimized WebP format for fast loading

**CSS Enhancements:**
- Added overlapping columns styling (`.is-style-overlap-columns`, `.is-style-overlap-columns-reversed`)
  - Creates modern overlapping layouts on desktop (min-width: 782px)
  - Second column overlaps first by -10% with z-index layering
  - Centered vertical alignment for visual balance
- Enhanced spa post grid styling for consistent image display
- Added cart icon styling with hover effects and transitions
- Mobile navigation adjustments for centered logo and menu button

### Changed - Pattern organization and categories

- Pattern count increased from 34 to 47 total patterns
- Enhanced pattern library with spa and wellness industry focus
- Improved layout variety with overlapping column techniques
- Better responsive design across all new patterns
- Updated palette tokens to use `primary-alt` and add `primary-alt-accent` across style variations
- Added Spa & Wellness pattern category for easier pattern browsing

### Technical

- Total style variations: 5 (Ink & Sand, Teal Bay, Denim Copper, Forest Sage, Spa & Wellness)
- All new patterns follow Elayne design system with theme color tokens
- Variable fonts provide flexible typography and better performance
- Self-hosted fonts ensure GDPR compliance and fast loading
- CSS improvements for modern overlapping layouts
- All content fully translatable with proper text domain

## [1.0.3] - 2025-12-24

### Changed - Avatar styling improvements

- Added custom avatar size configuration in theme.json (`settings.custom.avatarSize: "80px"`)
- Updated stats-list pattern avatar styling to use theme.json custom variable instead of hardcoded pixel values
- CSS now references `var(--wp--custom--avatar-size)` for consistent, maintainable avatar sizing across the theme
- Avatar images properly sized at 80x80px with circular shape using WordPress core `is-style-rounded` class
- Removed redundant custom CSS for rounded styling (WordPress core handles this via `border-radius: 9999px`)

### Technical - CSS architecture

- Centralized avatar size definition in theme.json for single source of truth
- More maintainable CSS with semantic variable naming
- Better integration with WordPress theme.json design token system
- Leverages WordPress core block styles instead of custom CSS for rounded images

## [1.0.2] - 2025-12-24

### Changed - Hero pattern style refinements

- Updated **hero-modern-dark** pattern with improved styling:
  - Simplified background gradient from complex radial/linear combo to cleaner diagonal linear gradient (135deg)
  - Changed from `radial-gradient(ellipse at top, rgba(99, 102, 241, 0.15) 0%, transparent 50%), radial-gradient(ellipse at bottom, rgba(139, 92, 246, 0.15) 0%, transparent 50%), linear-gradient(180deg, rgb(15, 23, 42) 0%, rgb(30, 41, 59) 100%)` to `linear-gradient(135deg,rgb(11,19,36) 0%,rgb(101,106,113) 100%)`
  - Added top spacer (50px) before heading for better vertical rhythm
  - Added bottom spacer (4rem) after hero image for consistent spacing
  - Reformatted code indentation for better maintainability (tabs instead of spaces)

### Technical - Pattern code quality

- Improved hero-modern-dark pattern markup with cleaner indentation
- Enhanced visual consistency with simplified gradient approach
- Better vertical spacing throughout pattern

## [1.0.1] - 2025-12-24

### Added - Hero page template

- Added **template-page-hero** (slug: `elayne/template-page-hero`) for pages that start with a full-width hero and need no top padding.

## [1.0.0] - 2025-12-23

### Added - New Portfolio and Pages Patterns

**New Portfolio Category Patterns:**
- **portfolio-grid-masonry** (slug: `elayne/portfolio-grid-masonry`) - Masonry-style portfolio grid
  - Showcases creative work in visually engaging grid layout
  - Category filter pills (All, Branding, Web Design, Development, Marketing)
  - Variable height cards (320px and 480px) for dynamic masonry effect
  - Project cards with overlay titles and category tags
  - Rounded corners (16px) and professional card design
  - Perfect for agencies, designers, and creative professionals
  - Uses existing pattern images (desktop.webp, computer-hands.webp, guy-laptop.webp, wellness.webp)

- **case-study-detailed** (slug: `elayne/case-study-detailed`) - Comprehensive project case study
  - Structured storytelling format: Challenge, Approach, Results
  - Hero cover image with project title and metadata
  - Three-phase approach section with numbered steps
  - Results metrics display (3-column stats grid)
  - Client testimonial quote with border accent
  - Project gallery (WordPress gallery block)
  - Services provided tags (pill-style badges)
  - Full-width CTA section at bottom
  - Perfect for showcasing detailed client work and case studies

**New Pages Category Patterns:**
- **page-coming-soon** (slug: `elayne/page-coming-soon`) - Pre-launch/maintenance page
  - Full-height centered layout (100vh min-height)
  - Site logo at top (200px width)
  - Large "Coming Soon" heading (4rem)
  - Countdown timer display (Days, Hours, Minutes, Seconds)
  - Email notification signup CTA
  - Social media links (Twitter, LinkedIn, Instagram)
  - Clean, minimal design on base background
  - Perfect for product launches and website maintenance

**New Call-to-Action Patterns:**
- **card-call-to-action** (slug: `elayne/card-call-to-action`) - Modular CTA component
  - Compact card design (400px max width)
  - Shadow and rounded corners for depth
  - Centered heading and description
  - Full-width button (100% width)
  - Perfect for landing pages, blog sidebars, and conversion sections
  - Reusable component for various page contexts

**New Features Patterns:**
- **client-logo-wall** (slug: `elayne/client-logo-wall`) - Client logo showcase
  - "Trusted by Leading Brands" heading section
  - Responsive grid layout (minimum 10rem columns)
  - 12 logo placeholders in duotone effect
  - Rounded card container (8px border-radius)
  - "View Our Portfolio" CTA button
  - Builds credibility and social proof
  - Uses existing logo images (logo-1 through logo-6)

**New Template:**
- **landing-page.html** template - Full-screen landing page without header/footer
  - Referenced by `template-landing-page.php` pattern
  - Zero margins on main container
  - Perfect for coming soon pages and dedicated landing pages
  - Allows full creative control without site chrome

**New Pattern Image:**
- Added `wellness.webp` - Meditation/wellness scene for portfolio masonry pattern

### Changed - Pattern count and categories

- Pattern count increased from 21 to 26 original content patterns (34 total including templates)
- Added new "Portfolio" category (elayne/portfolio) with 2 patterns
- Added new "Pages" category (elayne/pages) with 1 pattern
- Enhanced "Call-to-Action" category with card component
- Enhanced "Features" category with client logo wall

### Changed - Documentation and assets

- Updated README.md with new pattern descriptions and categorization
- Optimized readme-banner.png size (1.45MB → 236KB, 84% reduction)
- Updated pattern listings in documentation

### Technical

- Total patterns: 50 files (34 content patterns + 16 template patterns)
- New template type: Landing Page (full-screen, no header/footer)
- All new patterns follow Elayne design system
- Fully translatable with proper text domain
- Responsive grid layouts with modern CSS
- Pattern categories properly registered in functions.php

## [1.0.0-beta.13] - 2025-12-16

### Added - New event pattern and category

- Added new "Events" category (elayne/events) for event-related patterns.
- Added **event-upcoming-grid** pattern (slug: `elayne/event-upcoming-grid`) - Responsive 3-column event grid
  - Displays upcoming events with date badges, time, location, and registration buttons
  - Calendar-style date display with month, day, and weekday
  - Event type badges (Online/In-person) with custom styling
  - Time display with timezone support
  - Location and capacity information with emoji icons
  - Dual CTA buttons (Register/Details, Get tickets/Details, Save seat/Details)
  - Card-based design with rounded corners and borders
  - Perfect for workshops, webinars, conferences, and community events
  - Fully translatable content with proper text domain

### Changed - Documentation organization

- Moved theme documentation files from `demo/web/app/themes/elayne/docs/` to `docs/elayne/`
  - Follows same pattern as other theme documentation in project root
  - Includes pattern analysis, implementation summaries, and planning documents
  - Better organization for project-wide documentation access

### Technical

- Pattern count increased from 20 to 21 original patterns
- Event pattern features responsive grid layout with `minimumColumnWidth: 20rem`
- All event content properly localized with `esc_html_e()` for translations
- Event category added to theme pattern registration in functions.php

## [1.0.0-beta.12] - 2025-12-16

### Added - New pattern category

- Added "Cards" category (elayne/card) for reusable card-style patterns.
- Provides better organization for card components like author boxes, contact cards, and other card-based layouts.

### Changed - Pattern category cleanup

- Fixed duplicate pattern categories by standardizing all patterns to use namespaced categories (elayne/*).
- Updated hero patterns to use elayne/hero category instead of WordPress core categories (banner, featured).
- Updated blog/post patterns to use elayne/posts category instead of core "posts" category.
- Updated author-box pattern to use elayne/card category for better categorization.
- Updated contact-side-by-side pattern to use elayne/contact category.

### Fixed - Pattern organization

- Resolved duplicate category display issue in pattern library.
- All patterns now properly organized under registered theme categories.
- Eliminated confusion from mixing WordPress core categories with theme categories.

### Technical - Category system

- Pattern categories now consistently use theme namespace (elayne/*) for custom patterns.
- WordPress core categories (header, footer) still used appropriately for template parts.
- Improved pattern discoverability and organization in Site Editor.

## [1.0.0-beta.11] - 2025-12-16

### Changed - Header and pattern refinements

- Removed horizontal padding from header patterns (header-standard, header-mobile) to allow full-width alignment.
- Updated client-success-stories pattern with improved styling:
  - Adjusted star rating font sizes (large → medium for main testimonial, large → base for supporting testimonials).
  - Removed border styling from testimonial cards for cleaner appearance.
  - Changed secondary color references to main-accent for better consistency.
  - Added is-style-rounded class to avatar images.
  - Fixed hardcoded image URLs to use proper template directory function.
- Updated agency-services-showcase pattern with additional wrapper group for improved layout structure.
- Adjusted header navigation font size (medium → base) in header-mobile pattern.

### Technical - Pattern markup improvements

- Improved semantic HTML structure with proper wrapper elements.
- Enhanced compatibility with theme color palette by using consistent color tokens.
- Better responsive behavior for header elements with full-width alignment.

## [1.0.0-beta.10] - 2025-12-15

### Added - Color styles

- Added three new color scheme styles: Teal Bay, Denim Copper, and Forest Sage.
- Each style provides a complete alternative color palette accessible via Appearance > Editor > Styles.

### Changed - Default color palette

- Updated default theme.json color palette to use warmer "Ink & Sand" color scheme.
- Changed from bright teal/cyan to softer ink blue and warm sand tones for more sophisticated default appearance.
- Original teal color scheme now available as "Teal Bay" style variation.

### Fixed - Template layout issues

- Fixed template-page-wide-no-title.php to allow full-width (alignfull) patterns to work correctly.
- Removed incorrect alignwide wrapper that was boxing content and preventing edge-to-edge patterns.
- Template now matches template-page-full.php structure with vertical padding but no horizontal constraints.

### Technical - Template architecture

- Wide No Title template now properly supports full-width pattern layouts for landing pages.
- Maintains vertical spacing (top/bottom padding) while allowing horizontal edge-to-edge content.
- Implemented WordPress theme.json styles system for color variations.
- Created styles/teal-bay.json, styles/denim-copper.json, and styles/forest-sage.json.

## [1.0.0-beta.9] - 2025-12-15

### Added - Typography enhancements

- Added new "3xl" font size (xxx-large) to theme.json with responsive clamp sizing (5rem to 9rem).

### Changed - Pattern markup cleanup

- Simplified client-success-stories pattern markup with cleaner wrapper structure and removed redundant inline styles.
- Completed full-width pattern padding consistency - ensured all full-width patterns have horizontal padding on left/right sides.

### Technical - Full-width pattern refinements

- All alignfull patterns now consistently include horizontal padding (left/right) for proper edge gutters on all screen sizes.
- Improved pattern code quality with cleaner markup and better maintainability.

## [1.0.0-beta.8] - 2025-12-15

### Changed - Full-width layout refinements

- Added horizontal padding to full-width patterns (client reviews, newsletter CTA, hero variants, pricing) to preserve side gutters on smaller screens.
- Updated wide page templates to use constrained post content layouts so alignfull patterns can break out correctly without unintended max-width constraints.

### Technical - Alignfull support inside post content

- Added layout helper CSS that lets alignfull blocks inside post content span edge-to-edge while respecting global padding.

## [1.0.0-beta.7] - 2025-12-14

### Added - New patterns for agencies and professional services

**New Patterns:**
- **faq** (slug: `elayne/faq`) - Collapsible FAQ section with accordion-style questions
  - Uses WordPress Details block for native accordion functionality
  - 9 pre-written agency-focused questions and answers
  - Rounded card design on tertiary background
  - Contact CTA section at bottom
  - Perfect for service pages, support sections, and informational content
- **agency-services-showcase** (slug: `elayne/agency-services-showcase`) - Four-column service grid with custom icons
  - Showcases Web Design & Development, Digital Marketing, Brand Strategy, and E-commerce
  - Custom SVG icons for each service
  - Grid layout with responsive cards
  - Professional presentation for agency offerings
- **career-opportunities** (slug: `elayne/career-opportunities`) - Job listings section for recruitment
  - Detailed job position cards with role, type, and location
  - Multiple job listings with consistent formatting
  - Call-to-action for applications
  - Ideal for careers/jobs pages
- **client-success-stories** (slug: `elayne/client-success-stories`) - Enhanced testimonial layout with ratings
  - Featured main testimonial with star ratings
  - Supporting testimonials grid
  - Client names, titles, and company information
  - Professional presentation for case studies and reviews
- **author-box** (slug: `elayne/author-box`) - Author biography card
  - Avatar with rounded border
  - Author name and bio
  - Social media links (Twitter, LinkedIn, Facebook, Instagram, GitHub)
  - Perfect for blog posts and team pages

**New Assets:**
- Added 4 custom service icons in `patterns/images/`:
  - `icon-service-web.svg` - Web design and development icon
  - `icon-service-marketing.svg` - Digital marketing icon
  - `icon-service-strategy.svg` - Brand strategy icon
  - `icon-service-commerce.svg` - E-commerce solutions icon

### Changed - Pattern renamings for clarity

**Pattern Renamings:**
- **feature-boxes-with-icon-dark** → **agency-services-showcase** (slug: `elayne/agency-services-showcase`)
  - Better reflects professional agency use case
  - More descriptive name for service showcases
- **testimonials-with-big-text** → **client-success-stories** (slug: `elayne/client-success-stories`)
  - Clearer purpose for success stories and case studies
  - Emphasizes results and client satisfaction

### Changed - Pattern refinements

**Pattern Improvements:**
- **agency-services-showcase** - Style updates for improved visual hierarchy
- **career-opportunities** - Enhanced spacing and layout improvements
- Various minor pattern refinements for consistency

### Technical

- Pattern count increased from 15 to 20 original patterns
- All new patterns follow Elayne design system
- Service icons optimized for web delivery (SVG format)
- Improved pattern metadata and categorization

## [1.0.0-beta.6] - 2025-12-13

### Added - New pricing pattern and checkmark list style

**New Pattern:**
- **pricing-comparison** (slug: `elayne/pricing-comparison`) - Three-column pricing comparison grid
  - Monthly/annual toggle capability
  - Feature comparison with checkmark lists
  - Highlighted recommended plan (center column elevated with shadow)
  - Three pricing tiers (Guardian/Free, Mage/$480, Phantom/$600)
  - Rounded corners and modern card design
  - Perfect for SaaS products, membership sites, and subscription services

**New Block Style:**
- **Checkmark List** (`.is-style-checkmark-list`) - Custom list style with checkmark icons
  - Uses SVG checkmark icon from `patterns/images/check-circle.svg`
  - Flex layout with proper spacing
  - Works with any list block
  - Used in pricing comparison pattern
  - Defined in `style.css`

### Added - Hero pattern light variant

**New Pattern:**
- **hero-modern-light** (slug: `elayne/hero-modern-light`) - Light variant of modern hero
  - Light background (base color) instead of dark gradient
  - Large centered headline with responsive typography (clamp-based sizing)
  - Tagline with medium font size
  - Dual CTA buttons (primary solid, secondary with border)
  - Hero image below content with rounded corners
  - Fully responsive with fluid spacing
  - Complements existing `hero-modern-dark` pattern

### Changed - Pattern renaming for clarity

**Pattern Renamings:**
- **contact-info** → **contact-details** (slug: `elayne/contact-details`)
  - More descriptive name for contact information display
  - Better reflects pattern purpose (office hours, phone, email, address)
- **footer-light** → **footer-standard** (slug: `elayne/footer-standard`)
  - Renamed for consistency with header naming convention
  - Matches standard footer pattern naming
- **header-light-with-hamburger-menu** → **header-mobile** (slug: `elayne/header-mobile`)
  - Simplified name reflects mobile-first design
  - Clearer purpose (hamburger menu = mobile navigation)
- **header-light-with-standard-menu** → **header-standard** (slug: `elayne/header-standard`)
  - Simplified name for desktop navigation
  - Better consistency with footer naming
- **hero-modern** → **hero-modern-dark** (slug: `elayne/hero-modern-dark`)
  - Clarifies dark background variant
  - Distinguishes from new light variant

### Added - Dutch language support

**Internationalization:**
- Added Dutch (nl_NL) translation files
  - `languages/nl_NL.po` - Translation strings
  - `languages/nl_NL.mo` - Compiled translations
  - `languages/elayne.pot` - Translation template with 50+ translatable strings
- Full theme translation coverage
  - All pattern text translatable
  - Button labels, headings, descriptions
  - Contact information, testimonials, team content
  - Pricing table content

### Changed - Template part references

**Template Updates:**
- Updated `parts/header.html` to reference `header-standard` instead of `header-light-with-standard-menu`
- Updated `parts/footer.html` to reference `footer-standard` instead of `footer-light`
- Maintains consistency with renamed patterns

### Technical

- Added checkmark SVG icon asset (`patterns/images/check-circle.svg`)
- Added README banner image (`assets/images/readme-banner.png`)
- Pattern metadata updated to reflect new naming conventions
- All pattern slugs follow consistent `elayne/pattern-name` format
- CSS additions for checkmark list style in `style.css`

## [1.0.0-beta.5] - 2025-12-12

### Added - Style variations system

**Two New Style Variations:**
- **Gray & Gold** - Sophisticated grayscale palette with gold accents
  - Bodoni Moda serif font for elegant headings
  - Open Sans for clean body text
  - Professional gray tones (#1a1a1a, #f8f8f8) with gold accent (#FFD700)
  - Ideal for luxury brands, professional services, and upscale businesses
  - Includes 5 duotone presets (Primary, Secondary, Accent, Neutral, High Contrast)
- **Orange** - Vibrant orange-focused color scheme
  - Mona Sans variable font for modern headings
  - Open Sans for body text, Bitter for serif elements
  - Bold orange palette (#e65c00) with warm accents
  - Perfect for creative agencies, startups, and energetic brands
  - Includes 3 duotone presets (Primary, Secondary, High Contrast)

**New Bodoni Moda Font:**
- Variable font family (weights 400-900)
- Includes italic variant
- Classic serif typeface for elegant, sophisticated designs
- Self-hosted WOFF2 format for optimal performance

**Style Variations Implementation:**
- Style variations stored in `styles/` directory
- Users can switch entire design system via Site Editor → Styles
- Each variation includes complete color palette, typography, and block styles
- Fully compatible with Global Styles interface

### Added - New hero pattern

**New Pattern:**
- **hero-modern** (slug: `elayne/hero-centered`) - Modern centered hero with gradient background
  - Dramatic gradient background (dark slate with purple/indigo accents)
  - Large centered headline with responsive typography (clamp-based sizing)
  - Dual CTA buttons (primary solid, secondary translucent)
  - Hero image below content with rounded corners
  - Fully responsive with fluid spacing
  - Perfect for SaaS products, tech startups, and modern web apps

### Changed - Pattern refinements

**Pattern Improvements:**
- **client-reviews-orange** → **client-reviews** - Renamed and refactored to use theme colors
  - Now follows theme color palette instead of hardcoded orange (#ff6b35)
  - Uses `primary-dark` background color for better theme compatibility
  - Maintains same layout and structure
  - Better integration with style variations
- **three-column-feature-grid** - Renamed from `feature-grid` for clarity
  - Added top/bottom spacers for improved vertical rhythm
  - Added margin reset (top/bottom: 0) for cleaner full-width sections
  - Pattern metadata updated to match new name
  - Slug changed to `elayne/three-column-feature-grid`
- **blog-post-columns** and **blog-post-columns-portrait** - Spacing improvements
  - Removed hardcoded horizontal padding from group wrapper
  - Cleaner full-width alignment
  - Better responsive behavior

**Pattern Metadata Updates:**
- Updated hero-two-tone and hero-with-cta with proper metadata structure
- Improved contact-info and cta-newsletter pattern spacing
- Enhanced consistency across all pattern files

### Technical

- Style variations follow WordPress theme.json v3 specification
- Variable fonts provide better performance and flexible typography
- All patterns now use theme color tokens for better customization
- Pattern naming convention standardized (hyphenated slugs, descriptive titles)

## [1.0.0-beta.4] - 2025-12-11

### Added - Custom block styles system

**Block Style Infrastructure:**
- New block-specific styles directory (`assets/styles/`)
- Automatic block style loading system via `wp_enqueue_block_style()`
- Only loads styles when blocks are used (performance optimization)
- Supports custom styling for core blocks

**Custom Block Styles:**
- **core-site-title.css** - Bottom border decoration for site title/logo
  - Centered underline effect (50% width)
  - Hover opacity transition
  - Editor-compatible styles
- **core-group.css** - Enhanced group block styling
  - Removes default global padding from full-width sections
  - Background blur style variant (`is-style-background-blur`)
  - Responsive row improvements with mobile stacking (`elayne-row-stack`)
  - Flexible alignment utilities

**New Image Size:**
- **elayne-portrait-xs** (350×525) - 2:3 aspect ratio for extra small portrait layouts
  - Complements existing portrait size family
  - Optimized for smaller grid displays

### Added - New header and footer patterns

**New Header Pattern:**
- **header-light-with-standard-menu** - Header with logo, inline navigation, and social icons
  - Alternative to hamburger menu variant
  - Desktop-optimized with inline navigation
  - Mobile responsive with overlay menu
  - Includes social media links (Mastodon, Instagram, Bluesky)
  - Clean, minimal design with border separator

**New Footer Pattern:**
- **footer-simple** - Minimal footer with single-line menu navigation
  - Centered horizontal layout with separator dots
  - Copyright year, site name, and essential links
  - Lightweight alternative to complex footer layouts
  - Responsive text sizing

### Changed - Site title styling enhancements

- Added custom typography styling to site titles in header patterns
  - Font weight: 300 (light) for refined appearance
  - Uses primary font family from theme.json
  - Applied to both hamburger and standard menu headers
  - Consistent with modern, clean design aesthetic

### Changed - Pattern refinements

- Updated post template patterns for improved consistency
- Refined blog post column patterns with better spacing
- Enhanced sidebar template styling
- Improved single post template structure

### Technical

- Block styles loaded conditionally via `wp_enqueue_block_style()` API
- Automatic style discovery from `assets/styles/` directory
- Pattern-based architecture for custom block styling
- Maintains WordPress 6.6+ block theme standards

## [1.0.0-beta.3] - 2025-12-10

### Added - Additional layout template patterns

**New Page Layout Patterns:**
- **template-page-left-sidebar** - Page layout with left sidebar (33.33% sidebar, 66.66% content)
  - Complements existing right sidebar layout
  - Tertiary background color on sidebar area
  - Full-width featured image support
  - Consistent spacing with theme design system

**New Post Layout Patterns:**
- **template-post-left-sidebar** - Post layout with left sidebar (33.33% sidebar, 66.66% content)
  - Post metadata (category, title, author, date)
  - Featured image and post content
  - Post tags display
  - Full comments section with tertiary background
  - Latest posts grid (3-column) at bottom
  - Sidebar hidden on mobile devices
- **template-post-right-sidebar** - Post layout with right sidebar (66.66% content, 33.33% sidebar)
  - Mirror layout of left sidebar variant
  - Same post metadata and content structure
  - Full comments and latest posts sections
  - Responsive sidebar behavior
- **template-post-wide** - Wide post layout with expanded content area
  - Wide-aligned title, featured image, and content
  - Post metadata (category, author, date)
  - Post tags display
  - Full comments section with tertiary background
  - Latest posts grid (3-column) at bottom
  - Optimized for long-form content and visual storytelling

**New Blog Index Pattern:**
- **template-index-list** - Single-column list layout for blog posts
  - Alternative to grid layout (Elayne's default)
  - Full-width post entries with featured images
  - Category, title, author, and date metadata
  - Post excerpt display
  - Horizontal separator between posts
  - Query pagination at bottom
  - References new `blog-post-list` pattern

**Supporting Pattern:**
- **blog-post-list** - Reusable single-column blog post query loop
  - Can be used independently in page/post content
  - Fully customizable query parameters
  - Responsive design with proper spacing
  - Insertable pattern (appears in block inserter)

**Layout Enhancements:**
- Enhanced layout flexibility to match Ollie theme capabilities
- Expanded post layout options from 1 variant (centered) to 4 variants (centered, left sidebar, right sidebar, wide)
- Expanded page sidebar options from 1 variant (right) to 2 variants (left, right)
- Added blog index layout options: grid (existing) and list (new)

**Technical Implementation:**
- All new patterns follow Elayne design system (spacing, colors, typography)
- Template patterns marked with `Inserter: false` (not shown in block inserter)
- Proper `Template Types` metadata for automatic template picker integration
- Consistent comment section implementation across all post layouts
- Latest posts section included in all post sidebar/wide layouts
- Mobile-responsive with sidebar hidden via `elayne-hide-on-mobile` class
- Uses theme preset spacing variables and color palette

### Added - Social assets and pattern media
- Bundled SVGs for Mastodon, Instagram, LinkedIn, and Bluesky under `patterns/images/`
- Synced shared pattern assets into a new `patterns/images/` directory for consistent rendering
  - All pattern images now stored in centralized location for better maintainability
  - Ensures consistent image paths across all patterns
  - Simplifies theme distribution and updates

### Changed - Social links
- Swapped social links in header/footer patterns to Mastodon-first and removed Twitter/Facebook
  - Reflects shift toward open-source, decentralized social platforms
  - Header pattern updated: header-light-with-hamburger-menu
  - Footer patterns updated to match new social media strategy
  - Maintains professional social presence while supporting federated platforms

## [1.0.0-beta.2] - 2025-12-10

### Added - Development tooling for theme publication

**Development Infrastructure:**
- composer.json with WordPress Coding Standards (WPCS) support
- phpcs.xml configuration for code quality checks
- package.json with theme metadata
- Composer scripts: `lint`, `wpcs:scan`, `wpcs:fix`
  - `composer lint` - Run PHP linting for syntax errors
  - `composer wpcs:scan` - Scan for WordPress Coding Standards violations
  - `composer wpcs:fix` - Automatically fix WPCS violations where possible

**GitHub Actions workflow for automated theme review checks:**
- Runs WordPress theme-review-action on pull requests and pushes
- Tests accessibility-ready compliance
- Validates theme against WordPress.org requirements
- Automates quality assurance workflow
- Ensures consistent code quality before deployment

### Technical
- Added php-parallel-lint/php-parallel-lint for PHP syntax checking
- Added wp-coding-standards/wpcs v3.0.0 for WordPress coding standards
- Added phpcompatibility/phpcompatibility-wp for PHP compatibility checks
- Configured automated CI/CD for theme quality assurance
- Ensures WordPress.org compliance through automated checks

## [1.0.0-beta.1] - 2025-12-10

### Added - Initial beta release

**Core Theme Features:**
- Full Site Editing (FSE) support with WordPress 6.6+
- 15 original block patterns across 8 categories
- Custom pattern categories for organized content blocks
- theme.json for global styles and settings
- HTML templates: index, single, page, front-page, home
- Template parts: header, footer
- Block-specific styles
- Functions.php with theme setup and customizations
- RTL language support
- Translation-ready with text domain 'elayne'

**Block Patterns (15):**

*Header Patterns (1):*
- **header-light-with-hamburger-menu** - Header with hamburger navigation and social icons
  - Mobile-first responsive design
  - Integrated social media links
  - Clean, professional appearance

*Hero Patterns (2):*
- **hero-two-tone** - Split two-tone hero with dual CTA buttons and contrasting backgrounds
  - Eye-catching split-screen design
  - Dual call-to-action buttons for multiple conversion paths
  - Customizable background colors for brand alignment
- **hero-with-cta** - Centered business hero with primary CTA button and supporting description
  - Classic centered layout for professional services
  - Single focused call-to-action
  - Supporting descriptive text for context

*Call-to-Action & Contact (3):*
- **cta-newsletter** - Newsletter/lead capture CTA with headline, description, and full-width submit button
  - Optimized for email list building
  - Full-width design for maximum visibility
  - Clear value proposition
- **contact-info** - Modern contact info row with office hours, phone/email card, and address/location card
  - Three-column layout for organized information
  - Office hours, contact methods, and physical location
  - Professional card-based design
- **contact-side-by-side** - Two-column contact layout with form and contact information
  - Balanced layout for contact pages
  - Integrated contact form
  - Side-by-side information display

*Features & Services (2):*
- **feature-grid** - Three-column feature/service grid with icon circles and supporting text
  - Showcases key features or services
  - Icon-based visual hierarchy
  - Responsive grid layout
- **services-feature-cards** - Service cards with icons and descriptions
  - Professional service presentation
  - Card-based design for visual separation
  - Icon + title + description format

*Team & Testimonials (3):*
- **team-grid** - Three-column team grid with avatars, names, and job titles
  - Professional team member showcase
  - Avatar-based visual identity
  - Name and role information
- **testimonial-card** - Single testimonial card with quote and client attribution
  - Featured testimonial display
  - Client attribution and credibility
  - Quote-based design
- **client-reviews-orange** - Triple testimonial row on bold orange background with circular avatars
  - Multi-testimonial display
  - Bold brand color (customizable)
  - Circular avatar design for visual interest

*Statistics (2):*
- **stats-showcase** - Two-column section combining promotional content with statistics display (4 stat cards in 2x2 grid)
  - Data-driven credibility
  - Promotional content + statistics combination
  - 2x2 grid layout for metrics
- **stats-list** - Two-column section with promotional content and feature list (3 feature items with icons)
  - Feature highlights with supporting content
  - Icon-based visual hierarchy
  - Two-column balanced layout

*Blog/Posts (2):*
- **blog-post-columns-portrait** - Three-column blog post grid with portrait-oriented featured images
  - Portrait image format (2:3 aspect ratio)
  - Three-column responsive grid
  - Optimized for blog archives and portfolio displays
- **post-featured-two-column** - Single featured post with portrait image (2:3) and large excerpt
  - Featured post highlight
  - Portrait image + large excerpt format
  - 40/60 column split for visual balance

**Block Extensions:**

*Navigation Block Enhancements:*
- **Clickable parent items** - Parent menu items become clickable links (click text = navigate, click chevron = toggle submenu)
  - Improves user experience by making parent items functional
  - Separates navigation (text click) from submenu toggle (chevron click)
  - Maintains WordPress Interactivity API compatibility
- **Improved chevron positioning** - Better inline positioning of chevrons on mobile devices
  - Fixes mobile menu alignment issues
  - Chevrons align properly next to menu text
  - Touch-friendly spacing on mobile devices

*Post Excerpt Block Enhancements:*
- **Link excerpt to post** - Wrap entire excerpt in clickable link to post
  - Increases clickable area for better UX
  - Makes entire excerpt interactive, not just "Read more"
  - Improves accessibility and usability
- **Underline link control** - Toggle link underline styling on/off
  - Designer control over link styling
  - Clean typography options
  - Maintains accessibility while offering design flexibility

**Custom Image Sizes:**
- `elayne-portrait-small` (380×570) - 2:3 aspect ratio for portrait blog/portfolio grids
- `elayne-portrait-medium` (380×507) - 3:4 aspect ratio for medium portrait layouts
- `elayne-portrait-large` (380×475) - 4:5 aspect ratio for larger portrait displays
- `elayne-single-hero` (700×400) - 16:9-ish landscape for single post/page hero images
  - All sizes optimized for WordPress regeneration
  - Maintains consistent aspect ratios across layouts
  - Balances quality and performance

**Typography & Design:**
- Fluid typography system with responsive font scaling using clamp()
  - Automatically scales typography based on viewport
  - Maintains readability across all devices
  - No breakpoint-based media queries needed
- Open Sans variable font (weights 300-800)
  - Wide range of font weights for design flexibility
  - Single font file for better performance
  - Professional, clean typography
- Professional business-focused color palette
  - Curated color scheme for business websites
  - High contrast for accessibility
  - Customizable through Global Styles
- Custom shadow presets for visual depth
  - Multiple shadow options for elevation
  - Consistent visual hierarchy
  - Easy to apply through block settings

**Block Extensions Implementation:**
- Block extensions directory (assets/js/block-extensions/) with:
  - **navigation.js** - Enhanced navigation block controls
    - Inspector panel controls for clickable parents and chevron positioning
    - Frontend JavaScript for DOM manipulation
    - Preserves WordPress Interactivity API
  - **post-excerpt.js** - Enhanced post excerpt block controls
    - Inspector panel controls for excerpt linking and underline control
    - CSS class application
    - Accessible link wrapping
- Block extensions PHP handler (inc/block-extensions.php) for server-side rendering
  - Server-side block filtering
  - Attribute persistence
  - CSS class injection

### Technical
- Minimum WordPress version: 6.6
- Minimum PHP version: 8.0
- Tested up to WordPress 6.9
- GPL v2+ licensed
- Clean block theme architecture
- No jQuery dependencies
- Optimized for performance
  - Minimal CSS and JavaScript
  - Efficient asset loading
  - No external dependencies beyond WordPress core

---

## Version History

### [1.0.0-beta.1] - Initial Beta Release
First beta release of Elayne business block theme with 15 professional patterns, block extensions, and comprehensive design system.

---

**Note**: For detailed information about pattern usage and customization, see the theme documentation at https://imagewize.com
