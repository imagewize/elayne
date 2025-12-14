# Changelog

All notable changes to the Elayne WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

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
