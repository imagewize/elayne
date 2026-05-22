# Contributing to Elayne

Thank you for your interest in contributing to Elayne! This guide provides technical information for developers who want to extend or contribute to the theme.

## Technical Requirements

- **WordPress 6.6+** required
- **PHP 8.0+** required
- **Full Site Editing (FSE)** compatible
- **Block theme** architecture
- **Elayne Blocks plugin** (optional, for enhanced functionality)

## Developer Installation

For developers who want to contribute or extend the theme:

```bash
# Clone the theme repository
cd wp-content/themes/
git clone https://github.com/imagewize/elayne.git

# Or download from GitHub releases
# https://github.com/imagewize/elayne/releases

# Activate via WordPress admin: Appearance → Themes → Elayne → Activate
```

### Installing Elayne Blocks Plugin (Optional)

```bash
# Clone the plugin repository
cd wp-content/plugins/
git clone https://github.com/imagewize/elayne-blocks.git

# Activate via WordPress admin: Plugins → Elayne Blocks → Activate
```

## Theme Features

- **Translation Ready**: Full internationalization support
- **Modern PHP 8.0+**: Clean, well-documented code
- **Child Theme Support**: Extend without modifying core
- **No Build Required**: Works out of the box
- **Custom Pattern Categories**: Organized pattern library

### Typography

**Fonts:** Mona Sans (primary) • Open Sans • Bitter (serif) • Monospace — all variable weight with fluid responsive scaling.

Style variations include additional fonts: Bricolage Grotesque, Instrument Sans & Instrument Serif (Bistro) • Anton & Asap Condensed (Food & Beverage) • Cormorant Garamond & Quicksand (Spa & Wellness, Nail Salon) • Bodoni Moda (Publicist)

## Project Structure

```
elayne/
├── assets/
│   ├── fonts/          # Open Sans and other fonts
│   ├── images/         # Theme images and logos
│   └── styles/         # Block-specific styles
├── languages/          # Translation files
├── parts/              # Template parts (header, footer)
├── patterns/           # Block patterns (125+ content patterns)
│   ├── images/         # Pattern-specific images
│   │   ├── legal/      # Legal vertical images
│   │   └── spa/        # Spa/wellness vertical images
│   ├── legal-*.php     # Legal industry patterns
│   ├── spa-*.php       # Spa/wellness industry patterns
│   └── *.php           # General patterns
├── templates/          # Page templates (index, single, page)
├── functions.php       # Theme setup and functionality
├── style.css           # Theme stylesheet and metadata
└── theme.json          # Global styles and settings
```

## Custom Image Sizes

Elayne registers custom image sizes optimized for various layouts:

- **Portrait Small** (380×570) - 2:3 aspect ratio
- **Portrait Medium** (380×507) - 3:4 aspect ratio
- **Portrait Large** (380×475) - 4:5 aspect ratio
- **Single Hero** (700×400) - 16:9-ish landscape

## Pattern Library

Elayne includes **125+ professionally designed patterns** across multiple categories:

**Core Patterns:** Hero Sections (6) • Headers & Footers (11) • Banners (4) • Call-to-Action (11) • Contact (2) • Features (18) • Testimonials (7) • Statistics (1) • Team (1) • Blog & Posts (6)

> Hero sections include the `main-hero` pattern for agency and corporate homepages alongside `hero-modern-light` and the full set of industry-specific heroes. Features includes the `main-services-stack` pattern — an editorial numbered services list with hover slide-in effect, pill tags, and two-column header.

**Specialized:** Cards (13) • Events (1) • Portfolio (2) • Pages (11)

**Industry Verticals:** Spa & Wellness (10) • Legal Services (7) • Food & Beverage (14) • Home Improvement (9) • Nail Salon (7)

**WooCommerce Store:** 24 patterns covering the full shopping journey — shop landing, category archives, product detail pages, cart, checkout, and more (requires WooCommerce plugin)

**Templates:** 19 page, post, and WooCommerce templates

## Pattern Categories

Elayne registers custom pattern categories for better organization:

- **Hero** - Hero sections and banners
- **Features** - Feature showcases and service displays
- **Call To Action** - CTAs and conversion-focused patterns
- **Testimonials** - Client testimonials and reviews
- **Team** - Team member displays
- **Statistics** - Stats and metrics displays
- **Contact** - Contact forms and information
- **Cards** - Card-based layouts
- **Events** - Event listings and displays
- **Portfolio** - Portfolio showcases and case studies
- **Pages** - Full page layouts (pre-launch, maintenance)
- **Posts** - Blog-related patterns
- **Shop** - E-commerce and product displays

## Industry Verticals

Elayne provides specialized pattern sets for specific industries:

- **Food & Beverage** - Restaurant and café patterns with hero, marquee strip, menu display, reservations, chef story, event grids, hours/location info, testimonials, and specialized header with top bar (14 patterns). Includes two style variations: classic "Food & Beverage" (emerald/cream, Anton/Asap Condensed) and "Bistro" (ink-blue editorial palette, Bricolage Grotesque/Instrument Sans/Instrument Serif) for modern restaurants and wine bars
- **Legal Services** - Professional attorney profiles, practice area showcases, case statistics, client testimonials, and contact patterns optimized for law firms (7 patterns)
- **Home Improvement** - Full-site pattern set for home improvement businesses: header, hero, services grid, stats bar, why-us, testimonials, emergency CTA, contact, and footer (9 patterns). Includes a navy/amber style variation with emergency-red accents
- **Spa & Wellness** - Relaxing color palettes, treatment showcases, booking CTAs, and wellness posts (10 patterns)
- **Nail Salon** - Elegant rose/blush pattern set for nail studios: hero, services grid, stats bar, why-us, testimonials, booking CTA, and contact (7 patterns). Includes a "Nail Salon" style variation with Cormorant Garamond/Quicksand fonts and a rose & warm-white color palette
- **WooCommerce Store** - Complete e-commerce vertical (24 patterns) covering the full shopping journey: shop landing, category hero & toolbar, product gallery with colour swatches & style options, engraving option, trust badges, accordion tabs, add-to-cart section, mobile sticky ATC bar, cart, checkout, ticker, featured products, testimonials, and newsletter (requires WooCommerce plugin)

> **Contact Form 7 support:** The `Contact With Form` and `Home Improvement Contact Section` patterns include a live contact form when [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) is active. Without it, styled placeholder fields are shown automatically — no broken layouts.

> **WooCommerce attribute filters:** The product category and shop archive templates include an unconfigured attribute filter placeholder in the sidebar. Select the block in **Appearance → Editor → Templates** and choose which product attribute to filter by — no hardcoded IDs, fully compatible with any store configuration.

## CSS Effects & Block Styles

Elayne includes **32 interactive block styles** organized into 4 categories:

- **Button Effects** (6 styles) - Arrow Slide, Gradient Shift, Shimmer, Glow, Border Draw, Slide Up
- **Card & Group Effects** (7 styles) - Elevate on Hover, Glow Border, Image Zoom, Tilt Card, Scale Hover, Border Pulse, Slide Border
- **Image Effects** (9 styles) - Zoom Hover, Grayscale to Color, Rotate Icon, Blur, Brightness, Sepia, Lift Shadow, Border Reveal, Tilt 3D
- **Text & Link Effects** (10 styles) - Animated Underline, Gradient Text, Highlight Fade, Link Hover Shift, and more

**Editorial Identity Styles** — 13 additional block styles for the editorial brand system: `brand-logo` (animated site title), `status-pill` (pulsing paragraph label), `editorial-eyebrow`, `editorial-pill`, `editorial-hero-heading` (staggered animation), `editorial-footer-wordmark`, and seven editorial group layout styles (`editorial-services-stack`, `editorial-service-row`, `editorial-work-grid`, `editorial-work-card`, `editorial-pull-quote`, `editorial-stats`, `editorial-cta`)

### Technical Implementation

All effects are implemented with these considerations:

- **Pure CSS**: Zero JavaScript for maximum performance
- **Hardware-accelerated**: Uses `transform` and `opacity` for smooth 60fps animations
- **Accessibility**: Respects `prefers-reduced-motion` media query
- **Print-optimized**: Effects disabled for clean printing (`@media print`)
- **Browser compatibility**: Works across all modern browsers (Chrome, Firefox, Safari, Edge)

Effects are registered as block styles in `functions.php` and styled in `assets/styles/` directory.

## Pattern Development Guidelines

### Responsive Grid Layouts

When creating patterns with multi-column content (team members, features, products, etc.), use grid layout with `minimumColumnWidth` for proper responsive behavior:

**CORRECT - Using grid:**
```html
<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
<div class="wp-block-group alignwide">
  <!-- wp:group -->
  <div class="wp-block-group">...content...</div>
  <!-- Automatically adjusts: 3 cols (desktop) → 2 cols (tablet) → 1 col (mobile) -->
```

**AVOID - Using columns:**
```html
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
  <!-- wp:column -->
  <div class="wp-block-column">...content...</div>
  <!-- Creates cramped 3-column layout on tablets -->
```

**Choosing `minimumColumnWidth` values:**
- **280px-300px**: Smaller cards (product images, compact text)
- **320px**: Medium feature cards with icons and descriptions
- **20rem (320px)**: Larger pricing cards with extensive content

### Responsive Horizontal Padding

For patterns with full-width backgrounds (`align="full"`), apply horizontal padding to the outer container:

- **Standard padding**: `var:preset|spacing|medium` (~24px on mobile)
- Apply to outer group with `backgroundColor`, NOT inner nested groups
- For Cover blocks: Apply padding to `wp:cover`, NOT inner `wp:group`

**Example:**
```html
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"custom-background"} -->
<div class="wp-block-group alignfull has-custom-background-background-color has-background">
  <!-- Inner content without additional padding -->
</div>
<!-- /wp:group -->
```

## Industry Vertical Development

When creating patterns for specific industries:

1. **Naming Convention**: Use prefix format: `{industry}-{pattern-type}.php`
   - Examples: `legal-hero.php`, `spa-services.php`, `legal-testimonials.php`
   - **Exception — Home Improvement**: Files, slugs, CSS classes, and the style JSON are all named `plumbing-*` internally (e.g. `plumbing-hero.php`, `elayne/plumbing-hero`, `styles/plumbing.json`). The display label was renamed to "Home Improvement" in May 2026; internal identifiers were intentionally kept to avoid database migration.

2. **Image Organization**: Store images in `patterns/images/{industry}/`
   - Legal: `patterns/images/legal/`
   - Spa: `patterns/images/spa/`

3. **Pattern Metadata**: Include industry in pattern categories
   ```php
   /**
    * Title: Legal Hero Section
    * Slug: elayne/legal-hero
    * Categories: hero
    */
   ```

4. **Color Schemes**: Consider industry-appropriate colors from style variations
   - Legal: Professional neutrals (Ink & Sand, Gray & Gold)
   - Spa: Calming tones (Spa & Wellness variation)

## Style Variations

Elayne includes **8 pre-configured style variations** — switch your entire site's look with one click in **Appearance → Editor → Styles**:

- **Ink & Sand** (Default) - Modern, clean aesthetic
- **Bistro** - Ink-blue editorial palette with Bricolage Grotesque & Instrument Sans for modern restaurants and wine bars
- **Food & Beverage** - Emerald & cream with Anton/Asap Condensed fonts
- **Home Improvement** - Navy, amber & emergency-red for trade service businesses
- **Spa & Wellness** (Teal & Sage) - Calming, wellness-focused
- **Legal Blue** - Professional, trustworthy
- **Publicist** - Indigo & violet with Bodoni Moda serif for publications & blogs
- **Nail Salon** - Rose & warm-white with Cormorant Garamond/Quicksand fonts for beauty businesses

Variations are defined in the `styles/` directory. Each includes color palette, typography settings, spacing scale, and shadow presets. To create a new style variation:

1. Create a new JSON file in `styles/` directory
2. Define color palette, typography, and spacing
3. Theme.json will automatically detect the new variation

## Theme.json Configuration

The `theme.json` file controls:

- **Settings**: Available tools in the editor (colors, typography, spacing)
- **Styles**: Default styling for blocks and elements
- **Custom templates**: Template definitions
- **Custom template parts**: Header, footer definitions

Refer to [WordPress Theme.json Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) for detailed configuration options.

## Translation

Elayne is translation-ready. All user-facing strings use WordPress internationalization functions:

```php
__( 'Text', 'elayne' )         // Translate text
_e( 'Text', 'elayne' )         // Echo translated text
esc_html__( 'Text', 'elayne' ) // Escape and translate
```

Translation files are stored in `languages/` directory.

## Code Standards

- Follow WordPress Coding Standards for PHP, HTML, CSS, and JavaScript
- Use WordPress core functions when available
- Maintain semantic HTML markup
- Ensure all patterns are accessible (WCAG 2.1 Level AA)
- Test patterns across multiple viewport sizes

### Pattern Compliance Checks

Elayne enforces strict pattern quality standards through automated GitHub Actions workflows. All pull requests and pushes to `main` automatically run compliance checks.

**Automated Checks:**
- ✅ **No hardcoded CSS values** - Use semantic variables from `theme.json` (e.g., `var:preset|spacing|medium`)
- ✅ **No spacer blocks** - Use semantic `blockGap` on parent containers instead
- ✅ **No emoji icons** - Use SVG icons for visual consistency
- ✅ **Proper margin reset** - Full-width patterns must include `"margin":{"top":"0","bottom":"0"}`
- ✅ **Responsive grid layouts** - 3+ column patterns must use grid with `minimumColumnWidth`, not `wp:columns`
- ✅ **No hardcoded media IDs** - Pattern images must use template functions, not database IDs
- ✅ **No HTML comments between blocks** - Only WordPress block comments allowed (prevents validation errors)

**CI/CD Integration:**
- Pattern compliance workflow: `.github/workflows/pattern-compliance.yml`
- WordPress.org theme review: `.github/workflows/theme-check.yml`
- **Only checks modified patterns** - existing non-compliant patterns won't block PRs
- New or edited patterns must pass compliance before merging
- Pull requests cannot merge if compliance checks fail
- View detailed error messages in the GitHub Actions tab

**Running Checks Locally:**

```bash
# From theme root directory
# Requires PHP 8.0+

# Quick test - shows which patterns have issues
grep -l "wp:spacer" patterns/*.php
grep -l '"id":[0-9]' patterns/*.php

# Full compliance check
# Copy the PHP checker script from .github/workflows/pattern-compliance.yml
# and run it against your patterns directory
```

**Common Compliance Issues:**

1. **Hardcoded spacing**: Use `var:preset|spacing|medium` instead of `padding:24px`
2. **Spacer blocks**: Replace `<!-- wp:spacer -->` with `blockGap` on parent group
3. **Media IDs**: Use `<?php echo esc_url(get_template_directory_uri()); ?>/patterns/images/file.webp`
4. **Columns for grids**: Use `{"layout":{"type":"grid","minimumColumnWidth":"20rem"}}` for 3+ columns
5. **Missing margin reset**: Add `"margin":{"top":"0","bottom":"0"}` to `alignfull` groups with backgrounds

See [CLAUDE.md](CLAUDE.md) for detailed pattern development guidelines and best practices.

## Testing Checklist

Before submitting patterns or modifications:

- [ ] Test in WordPress Site Editor
- [ ] Verify responsive behavior (mobile, tablet, desktop)
- [ ] Check accessibility (keyboard navigation, screen readers)
- [ ] Validate HTML markup
- [ ] Test with default style variation
- [ ] Test with at least 2 additional style variations
- [ ] Ensure images are optimized (WebP format preferred)
- [ ] Verify pattern appears in correct category

## Questions or Issues?

- **Support**: [imagewize.com/support](https://imagewize.com/support)
- **Documentation**: [imagewize.com/resources/elayne](https://imagewize.com/resources/elayne)
- **Website**: [imagewize.com](https://imagewize.com)
