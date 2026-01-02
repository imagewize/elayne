# Contributing to Elayne

Thank you for your interest in contributing to Elayne! This guide provides technical information for developers who want to extend or contribute to the theme.

## Technical Requirements

- **WordPress 6.6+** required
- **PHP 8.0+** required
- **Full Site Editing (FSE)** compatible
- **Block theme** architecture
- **Elayne Blocks plugin** (optional, for enhanced functionality)

## Theme Features

- **Translation Ready**: Full internationalization support
- **Modern PHP 8.0+**: Clean, well-documented code
- **Child Theme Support**: Extend without modifying core
- **No Build Required**: Works out of the box
- **Custom Pattern Categories**: Organized pattern library

## Project Structure

```
elayne/
├── assets/
│   ├── fonts/          # Open Sans and other fonts
│   ├── images/         # Theme images and logos
│   └── styles/         # Block-specific styles
├── languages/          # Translation files
├── parts/              # Template parts (header, footer)
├── patterns/           # Block patterns (65 content patterns)
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

## Industry Vertical Patterns

When creating patterns for specific industries:

1. **Naming Convention**: Use prefix format: `{industry}-{pattern-type}.php`
   - Examples: `legal-hero.php`, `spa-services.php`, `legal-testimonials.php`

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

Elayne supports multiple style variations defined in `styles/` directory. Each variation includes:

- Color palette definitions
- Typography settings (font families, sizes, line heights)
- Spacing scale
- Shadow presets

To create a new style variation:

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
