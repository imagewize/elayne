# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Important Git Commit Guidelines

**Demo Site Theme - NO Claude Attribution**
- This is the Elayne theme for the demo site (`demo/web/app/themes/elayne/`)
- Do NOT include Claude Code attribution in commits
- Do NOT add "🤖 Generated with Claude Code" or "Co-Authored-By: Claude" footers
- Keep all commits professional and attribution-free for client-facing demo content
- This applies to ALL changes in this theme directory

## Project Overview

Elayne is a premium WordPress block theme for professional business websites:
- **Architecture**: Pure block theme (no build tools, no npm/composer)
- **WordPress Version**: 6.6+ required
- **PHP Version**: 8.0+ required
- **Theme Type**: Full Site Editing (FSE) block theme
- **Target Audience**: Professional businesses, spas, real estate, and service industries

## Theme Architecture

### Pure Block Theme Structure
- **No build process**: Direct PHP, HTML, and vanilla JavaScript
- **theme.json**: Single source of truth for styles, colors, typography, spacing
- **HTML templates**: Block markup in `templates/` directory
- **PHP patterns**: Reusable block patterns in `patterns/` directory
- **Block extensions**: Vanilla JavaScript in `assets/js/block-extensions/`

### Directory Structure
```
elayne/
├── assets/
│   ├── fonts/          # Variable fonts (Mona Sans, Open Sans, Bitter)
│   └── js/
│       └── block-extensions/  # Vanilla JS extensions for core blocks
├── inc/
│   └── block-extensions.php   # PHP handlers for block extensions
├── languages/          # Translation files (text domain: 'elayne')
├── parts/              # Template parts (header.html, footer.html)
├── patterns/           # 15 PHP block patterns
├── templates/          # HTML templates (index, single, page)
├── functions.php       # Theme setup and pattern categories
├── style.css           # Theme metadata (no actual styles)
└── theme.json          # Global styles, settings, colors, typography
```

## Development Workflow

### No Build Tools
- **Direct editing**: All changes are made directly to source files
- **No compilation**: No npm, webpack, or build step required
- **Browser testing**: Test changes by refreshing WordPress site
- **Version control**: Use git for all changes

### Local Development with Trellis VM
The demo site uses **Trellis VM** (Lima-based, NOT Vagrant) for local WordPress environment:

**Important Notes:**
- **Protocol**: Trellis VM uses **HTTP** (not HTTPS) - Access via `http://demo.imagewize.test/` (NOT `https://`)
- **Path adjustment**: If using this theme in a different project, adjust paths (`~/code/imagewize.com` → your project path, `demo.imagewize.com` → your domain)

**Accessing the VM:**
```bash
# Navigate to repository root
cd ~/code/imagewize.com

# Access VM shell
cd trellis
trellis vm shell

# Access with specific working directory
trellis vm shell --workdir /srv/www/demo.imagewize.com/current/web/app/themes/elayne
```

**File Synchronization (Lima):**
- **Automatic, real-time sync** between host and VM
- Files edited on host (`~/code/imagewize.com/demo/`) are **immediately synced** to VM (`/srv/www/demo.imagewize.com/`)
- No manual file copying or rsync needed
- Changes to theme files, PHP patterns, CSS, JS are instantly available

**Common Issue - Changes Not Appearing:**
- Usually WordPress cache, NOT file sync
- **Solution:**
  ```bash
  # From Trellis VM
  cd /srv/www/demo.imagewize.com/current
  wp cache flush --path=web/wp
  ```
- For CSS/JS: Hard refresh browser (Cmd+Shift+R)
- WordPress may cache stylesheets with version query params

### Testing Changes
Since this is a pure block theme with no build process:

1. **Edit files directly** - No compilation needed
2. **Refresh browser** - Changes appear immediately (may need cache clear)
3. **Clear WordPress cache** if needed:
   ```bash
   # From Trellis VM
   wp cache flush --path=web/wp

   # Or from host machine (single command)
   cd ~/code/imagewize.com/trellis
   trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp cache flush --path=web/wp
   ```

### WordPress Development Mode
For pattern and theme.json changes to appear immediately, ensure development mode is enabled in the demo site's `config/environments/development.php`:
```php
Config::define('WP_DEVELOPMENT_MODE', 'theme');
```

**Benefits for theme development:**
- Bypasses theme.json caching for immediate changes
- Pattern modifications appear instantly without cache clearing
- Essential for block theme and pattern development
- Ensures theme.json color/spacing/typography changes apply immediately

**Values:**
- `'theme'` - Theme development mode (recommended for Elayne development)
- `'plugin'` - Plugin development mode
- `'core'` - WordPress core development mode
- `'all'` - All development modes enabled
- `''` - Development mode disabled

**Important:** Disable in production environments for optimal performance.

### CRITICAL: Pattern URL Behavior and Database Content

**IMPORTANT**: Elayne pattern files use `get_template_directory_uri()` which returns **environment-specific URLs** that get hardcoded into the database when patterns are used in pages.

**How Pattern URLs Work:**

When pattern PHP files are evaluated by WordPress, `get_template_directory_uri()` returns:
- **Local Dev (Trellis VM)**: `http://demo.imagewize.test/app/themes/elayne`
- **Production**: `https://demo.imagewize.com/app/themes/elayne`

**The Problem:**

When you insert a pattern into a page/post:
1. WordPress evaluates the PHP pattern file
2. `get_template_directory_uri()` returns the **current environment's URL**
3. The URL gets **hardcoded** into `wp_posts.post_content` in the database
4. Moving content between environments without search-replace causes **mixed content warnings**

**Example:**

```php
// Pattern file: patterns/hero-modern-dark.php
<img src="<?php echo esc_url(get_template_directory_uri() . '/patterns/images/desktop.webp'); ?>" />
```

**Saved in database (local):**
```html
<img src="http://demo.imagewize.test/app/themes/elayne/patterns/images/desktop.webp" />
```

**Problem on production:**
```
Mixed Content Warning: http://demo.imagewize.test/app/themes/elayne/patterns/images/desktop.webp
requested on https://demo.imagewize.com/ page
```

**Solution - Always Run Search-Replace:**

**When creating content locally and deploying to production:**
```bash
# STEP 1: Check for dev URLs in production
ssh web@demo.imagewize.com "cd /srv/www/demo.imagewize.com/current && \
  wp db query \"SELECT COUNT(*) FROM wp_posts WHERE post_content LIKE '%.test%';\" \
  --path=web/wp --url=https://demo.imagewize.com"

# STEP 2: If count > 0, fix URLs before going live
ssh web@demo.imagewize.com "cd /srv/www/demo.imagewize.com/current && \
  wp db export /tmp/backup_\$(date +%Y%m%d_%H%M%S).sql.gz --path=web/wp && \
  wp search-replace 'http://demo.imagewize.test' 'https://demo.imagewize.com' \
  --all-tables --precise --path=web/wp --url=https://demo.imagewize.com && \
  wp cache flush --path=web/wp"
```

**When pulling production database to local dev:**
```bash
# After database import, replace production URLs with dev URLs
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp search-replace 'https://demo.imagewize.com' 'http://demo.imagewize.test' \
  --all-tables --precise --path=web/wp --url=http://demo.imagewize.test
```

**Prevention Tips:**
1. ✅ Always audit for `.test` URLs before deploying content to production
2. ✅ Backup database before running search-replace
3. ✅ Verify in browser console (F12) for mixed content warnings
4. ✅ Use `wp cache flush` after URL changes
5. ✅ Hard refresh browser (Cmd+Shift+R) to clear cache

**See also:**
- `/Users/j/code/imagewize.com/CLAUDE.md` - "CRITICAL: URL Sanitization After Database Operations"
- `/Users/j/code/trellis-tools/content-creation/PAGE-CREATION.md` - "CRITICAL: URL Sanitization Before Production"

## Key Components

### Theme Configuration (theme.json)

**Location**: `/theme.json`

Central configuration for:
- **Color palette**: 10 semantic colors (primary, main, base, etc.)
- **Typography**: 3 variable fonts with 7 fluid font sizes
- **Spacing**: 5 responsive spacing sizes using clamp()
- **Shadows**: 8 shadow presets (4 dark, 4 light variants)
- **Layout**: contentSize (740px), wideSize (1260px)

**Important**: All design tokens are defined here. Never hardcode colors, sizes, or spacing in patterns.

### Block Patterns (patterns/*.php)

**15 Professional Patterns** organized by category:
- Header: `header-light-with-hamburger-menu`
- Hero: `hero-two-tone`, `hero-with-cta`
- CTA/Contact: `cta-newsletter`, `contact-info`, `contact-side-by-side`
- Features: `three-column-feature-grid`, `services-feature-cards`
- Team/Testimonials: `team-grid`, `testimonial-card`, `client-reviews-orange`
- Statistics: `stats-showcase`, `stats-list`
- Posts: `blog-post-columns-portrait`, `post-featured-two-column`

**Pattern Structure**:
```php
<?php
/**
 * Title: Pattern Name
 * Slug: elayne/pattern-slug
 * Categories: elayne/category
 * Description: Pattern description
 */
?>
<!-- Block markup here -->
```

**Custom Pattern Categories** (registered in functions.php):
- `elayne/hero`, `elayne/features`, `elayne/call-to-action`
- `elayne/testimonial`, `elayne/team`, `elayne/statistics`
- `elayne/contact`, `elayne/posts`

### Block Extensions

**Two Core Block Extensions**:

1. **Navigation Block** (`assets/js/block-extensions/navigation.js`)
   - Adds "Clickable Parents" option (click text = navigate, click chevron = toggle)
   - Adds "Improved Chevrons" option (better inline positioning on mobile)
   - Handler: `inc/block-extensions.php` filters `render_block` for `core/navigation`

2. **Post Excerpt Block** (`assets/js/block-extensions/post-excerpt.js`)
   - Adds "Link to Post" option (wraps excerpt in post link)
   - Adds "Underline Link" toggle
   - Handler: `inc/block-extensions.php` filters `render_block` for `core/post-excerpt`

**Architecture**:
- Vanilla JavaScript (no React/JSX compilation)
- Uses WordPress `wp.hooks`, `wp.components`, `wp.blockEditor` APIs
- Attributes registered via `addFilter('blocks.registerBlockType')`
- Inspector controls added via Higher Order Component pattern
- Server-side rendering in `inc/block-extensions.php`

### Custom Image Sizes

Defined in `functions.php`:
- `elayne-portrait-small` (380×570, 2:3 ratio) - Small portrait images
- `elayne-portrait-medium` (380×507, 3:4 ratio) - Medium portrait images
- `elayne-portrait-large` (380×475, 4:5 ratio) - Large portrait images
- `elayne-single-hero` (700×400, ~16:9 ratio) - Hero images for single posts/pages

## Design System

### Color Palette
Use semantic color names (defined in theme.json):
- **Brand**: `primary` (teal), `primary-accent` (light teal), `primary-dark` (dark teal)
- **Contrast**: `main` (dark gray), `main-accent` (medium gray)
- **Base**: `base` (white), `secondary` (light gray)
- **Tint**: `tertiary` (very light gray)
- **Borders**: `border-light`, `border-dark`

### Typography
- **Primary**: Mona Sans (variable 300-900, sans-serif) - headings
- **Open Sans**: (variable 300-800, sans-serif) - body text fallback
- **Bitter**: (variable 100-900, serif) - optional serif
- **Monospace**: system monospace - code blocks

**Fluid Font Sizes**: All sizes use clamp() for responsive scaling
- `x-small` (0.825rem → 0.95rem)
- `small` (0.9rem → 1.05rem)
- `base` (1rem → 1.165rem)
- `medium` (1.2rem → 1.65rem)
- `large` (1.5rem → 2.75rem)
- `x-large` (1.875rem → 3.5rem)
- `xx-large` (2.25rem → 4.3875rem)

### Spacing Scale
All spacing uses responsive clamp():
- `small`: clamp(0.5rem, 2.5vw, 1rem)
- `medium`: clamp(1.5rem, 4vw, 2rem)
- `large`: clamp(2rem, 5vw, 3rem)
- `x-large`: clamp(3rem, 7vw, 5rem)
- `xx-large`: clamp(4rem, 9vw, 7rem)

## Best Practices

### Creating New Patterns
1. Create PHP file in `patterns/` directory
2. Follow naming convention: `category-descriptive-name.php`
3. Use semantic color/spacing variables: `var:preset|color|primary`
4. Include proper header comment with Title, Slug, Categories, Description, Keywords, and Grid Config
5. Register slug in format: `elayne/pattern-name`
6. Add appropriate category tags for grid layouts (see below)
7. Test pattern in block editor inserter

**Grid Layout Categories:**
For three-column grid patterns, add the appropriate complexity category:
- **`elayne/card-simple`** - Simple cards (18rem): icon + title + short description
- **`elayne/card-extended`** - Complex cards (19rem): nested cards, multiple CTAs, rich content
- **`elayne/card-profiles`** - Profile cards (20rem): photos + names + titles + bios

**Pattern Header Example:**
```php
<?php
/**
 * Title: Three-Column Feature Grid
 * Slug: elayne/three-column-feature-grid
 * Description: Showcase your key features or services in a clean three-column layout
 * Categories: elayne/features, elayne/card, elayne/card-simple
 * Keywords: features, services, grid, columns, benefits, simple
 * Viewport Width: 1200
 * Grid Config: 18rem (simple cards: icon + title + short description)
 */
?>
```

These categories appear in the WordPress block pattern inserter, making it easy for users to filter patterns by complexity level. The Grid Config comment line helps developers quickly identify the intended grid configuration.

**Use Native WordPress Blocks (CRITICAL):**
- **NEVER use `wp:html` blocks** for content that can be created with native WordPress blocks
- **ALWAYS prefer native blocks**: Use `wp:list`, `wp:separator`, `wp:group`, `wp:columns`, `wp:heading`, `wp:paragraph`, etc. instead of custom HTML
- **Why avoid HTML blocks?**
  - Not editable in the block editor (shows as code, not visual)
  - Don't support theme.json styling variables
  - Break pattern editing experience
  - Poor accessibility and semantics
  - Hard to maintain and update
- **Custom styling approach**: Add CSS classes to native blocks and define styles in `style.css`
- **Wrong example**:
  ```html
  <!-- wp:html -->
  <div class="custom-list">
    <div class="item">
      <img src="check.svg" alt="">
      <span>List item text</span>
    </div>
  </div>
  <!-- /wp:html -->
  ```
- **Correct example**:
  ```html
  <!-- wp:list {"className":"is-style-checkmark-list"} -->
  <ul class="is-style-checkmark-list">
    <li>List item text</li>
  </ul>
  <!-- /wp:list -->
  ```
  With CSS in `style.css`:
  ```css
  .is-style-checkmark-list li::before {
    content: '';
    background-image: url('patterns/images/check.svg');
  }
  ```
- **Separator blocks**: Use `<!-- wp:separator {"className":"is-style-dots"} /-->` for dotted/dashed lines
- **Custom list checkmarks**: Apply `is-style-checkmark-list` class to `wp:list` blocks (see `style.css` for implementation)
- **Benefits**: Editor compatibility, theme.json integration, pattern reusability, accessibility, maintainability

**HTML Comments in Block Markup (CRITICAL):**
- **NEVER add HTML comments between opening tags and WordPress block comments** - this causes block validation errors
- **Only WordPress block comments are allowed** - anything else breaks validation
- **Common mistake**: Adding organizational comments like `<!-- Attorney 1 -->`, `<!-- Stat 1 -->`, or `<!-- Feature 1 -->` inside block markup
- **Wrong example**:
  ```html
  <div class="wp-block-group alignwide">
    <!-- Attorney 1 -->  ← WRONG! Causes validation error
    <!-- wp:group -->
  ```
- **Correct example**:
  ```html
  <div class="wp-block-group alignwide">
    <!-- wp:group -->  ← Correct, only WordPress block comments
  ```
- **Why this fails**: WordPress compares the `save` function output (clean markup) with the pattern file content. Extra HTML comments create a mismatch, triggering "Block validation failed" errors in the browser console
- **Error message**: `Block validation: Block validation failed for 'core/group'` with diff showing extra content in pattern vs expected output
- **If you need organizational comments**: Place them BEFORE the WordPress block comment on the same line or in a separate line, never between opening div tags and block comments
- **Reference**: See fixed patterns `legal-team.php` and `legal-stats.php` (December 2025)

**Block Comment Attribute Structure (CRITICAL):**
- **Block attributes must be correctly nested** in block comment JSON to avoid validation errors
- **Common mistake**: Nesting root-level attributes like `backgroundColor` or `layout` inside the `style` object causes "Block validation failed" errors in the browser console
- **Correct structure**: Attributes like `backgroundColor`, `layout`, `align`, `className` are root-level attributes and should NOT be nested inside `style`
- **Wrong example**:
  ```json
  {"style":{"spacing":{...},"backgroundColor":"base","layout":{"type":"default"}}}
  ```
- **Correct example**:
  ```json
  {"style":{"spacing":{...}},"backgroundColor":"base","layout":{"type":"default"}}
  ```
- WordPress core blocks have specific attribute schemas - root-level attributes must remain at the root level
- Validation errors appear in browser console as: "Block validation: Block validation failed for `core/group`" with diff showing "Content generated by `save` function" vs "Content retrieved from post body"
- **How to avoid**: When creating block comments, ensure `style` object only contains CSS-related properties (spacing, border, typography). Move other attributes outside `style` to the root level
- **Common root-level attributes**: `align`, `backgroundColor`, `textColor`, `gradient`, `layout`, `className`, `anchor`, `metadata`
- **Style object properties**: `spacing`, `border`, `color`, `typography`, `dimensions`, `shadow`
- **Metadata + wrapper sync**: If the block comment includes `metadata` (categories/patternName/name) or padding/margin values, ensure the rendered wrapper `div` matches (including left/right padding) to avoid Gutenberg recovery diffs and validation warnings.

**Responsive Grid Layouts (CRITICAL):**
- **Use grid layout with `minimumColumnWidth`** for truly responsive multi-column patterns (3→2→1 columns)
- **NEVER use `wp:columns` for pricing tables, feature grids, team grids, or product grids** - columns go 3→3 (narrow/cramped)→1, skipping the 2-column tablet layout entirely
- **NEVER use grid with fixed `columnCount`** - forces exact column count at all screen sizes
- **Correct approach**: `{"layout":{"type":"grid","minimumColumnWidth":"20rem"}}` or similar
- **How it works**: Automatically adjusts columns based on available space:
  - Desktop (wide): 3 columns when space allows (>60rem container)
  - Tablet (medium): 2 columns when space is limited (40-60rem)
  - Mobile (narrow): 1 column when very narrow (<40rem)
- **When to use**: Pricing tables, feature grids, team grids, card layouts, shop product displays, any 3-column pattern
- **Pattern inventory**:
  - **Using grid correctly**: `three-column-feature-grid.php` (320px), `pricing-comparison.php` (20rem), `team-grid.php` (300px), `shop-overview-three-columns.php` (280px)
  - **Using columns (2-column only)**: `stats-list.php`, `stats-showcase.php` (acceptable because only 2 columns that stack to 1)
- **Example - WRONG (columns)**:
  ```html
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->...(cramped on tablet, skips 2-column layout)
  ```
- **Example - WRONG (fixed grid)**:
  ```html
  <!-- wp:group {"layout":{"type":"grid","columnCount":3}} -->
  ...(always 3 columns, even on mobile)
  ```
- **Example - CORRECT (responsive grid)**:
  ```html
  <!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
  <div class="wp-block-group alignwide">
    <!-- Direct child groups become grid items -->
    <!-- wp:group -->...(pricing card 1)
    <!-- wp:group -->...(pricing card 2)
    <!-- wp:group -->...(pricing card 3)
  </div>
  ```
- **Choosing `minimumColumnWidth` value (use `rem`, not `px`):**
  - **18rem (~288px)**: Simple card grids (icon + title + short description)
  - **19rem (~304px)**: Complex card grids (nested cards, multiple CTAs, rich content)
  - **20rem (~320px)**: Team/profile grids with photos and bios
  - **28-29rem**: Text-heavy columns (testimonials, features with long descriptions)
  - **Why `rem` not `px`**: Better accessibility (respects user font-size preferences), WordPress standard (Ollie, Twenty Twenty-Five both use `rem`)
  - **Content density matters**: Complex cards with nested structures (like `services-feature-cards.php` or `pricing-comparison.php`) need 19rem to prevent excessive whitespace on desktop while maintaining smooth 3→2→1 responsive behavior
- **Benefits**: Smooth responsive behavior, no media queries needed, better UX on all devices, proper tablet experience
- **Reference examples**: See `pricing-comparison.php`, `three-column-feature-grid.php`, `team-grid.php`, `shop-overview-three-columns.php`

**Spacing & BlockGap Standards (CRITICAL):**

**Based on comprehensive spacing refactor (Jan 2026)** following WordPress block theme best practices (Ollie & Twenty Twenty-Five themes).

**Key Principles:**
1. **NO spacer blocks** - Always use semantic `blockGap` instead of `<!-- wp:spacer -->` blocks
2. **NO manual margins** - Headings and paragraphs should have NO margin overrides; use parent container `blockGap` to control spacing
3. **Semantic blockGap hierarchy** - Use consistent spacing scale based on content relationship
4. **Margin reset required** - All full-width patterns MUST include `"margin":{"top":"0","bottom":"0"}` (no units)

**Semantic BlockGap Scale:**
```
- var:preset|spacing|small (~8-16px)   - Tight grouping (eyebrow + heading + description)
- var:preset|spacing|medium (~24-32px) - Normal block spacing (default)
- var:preset|spacing|large (~32-48px)  - Section spacing
- var:preset|spacing|x-large (~48-80px) - Major section breaks, grid spacing
```

**Pattern Structure (Standard Hierarchy):**
```html
<!-- Outer full-width container: x-large blockGap + margin reset + horizontal padding -->
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->

  <!-- Title/intro group: small blockGap for tight heading→paragraph -->
  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
    <!-- wp:heading -->
    <h2>Section Title</h2>
    <!-- wp:paragraph -->
    <p>Description text</p>
  <!-- /wp:group -->

  <!-- Content grid: x-large blockGap between items -->
  <!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"20rem"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}}} -->

    <!-- Individual card: small/medium blockGap within card -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
      <h3>Card Title</h3>
      <p>Card content</p>
    <!-- /wp:group -->

  <!-- /wp:group -->

<!-- /wp:group -->
```

**What NOT to Do:**
```html
<!-- ❌ WRONG - Spacer blocks -->
<!-- wp:spacer {"height":"100px"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- ❌ WRONG - Manual margins on headings -->
<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->

<!-- ❌ WRONG - Hardcoded spacing values -->
<p style="margin-top:1.5rem">Text</p>

<!-- ❌ WRONG - Incomplete margin reset -->
"margin":{"top":"0px"}  <!-- Should be "top":"0","bottom":"0" with no units -->
```

**What TO Do:**
```html
<!-- ✅ CORRECT - Use blockGap on parent container -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
  <h2>Heading</h2>
  <p>Text</p>
<!-- /wp:group -->

<!-- ✅ CORRECT - Complete margin reset (no units) -->
"margin":{"top":"0","bottom":"0"}

<!-- ✅ CORRECT - Nested groups for different spacing contexts -->
<!-- Outer: x-large blockGap for major breaks -->
<!-- Inner: small blockGap for tight content grouping -->
```

**Quality Checklist for Patterns:**
- [ ] No `<!-- wp:spacer -->` blocks
- [ ] No manual margins on `<!-- wp:heading -->` or `<!-- wp:paragraph -->` blocks
- [ ] Full-width sections have complete margin reset: `{"top":"0","bottom":"0"}`
- [ ] All spacing uses presets (no hardcoded `1.5rem`, `60px`, etc.)
- [ ] Semantic blockGap values used appropriately
- [ ] Related content wrapped in groups with tight `blockGap`
- [ ] Follows established hierarchy (outer: x-large, title: small, content: medium/large)

**Pattern Background Spacing (IMPORTANT):**
- **Always add complete margin reset** to patterns with background colors: `"margin":{"top":"0","bottom":"0"}` (no units like "0px")
- WordPress core automatically adds `margin-block-start` between blocks in constrained layouts
- Without margin reset, gaps appear between adjacent patterns with different backgrounds
- This follows the Ollie theme approach (inline styles vs. CSS overrides)

**Example - Correct margin reset:**
```html
<!-- wp:group {"align":"full","backgroundColor":"primary-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group alignfull has-primary-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
```

**Why inline styles instead of CSS:**
- Ollie uses inline `margin:0` on every background pattern (verified in 50+ patterns)
- More explicit and visible in pattern code
- No need for global CSS overrides with `!important`
- Pattern-specific control vs. theme-wide CSS rules
- Easier to maintain and debug

**When to use margin reset:**
- Full-width sections (`align="full"`) with background colors
- Any pattern that stacks vertically with other background patterns
- Hero sections, CTAs, testimonials, feature grids

**Responsive Horizontal Padding (CRITICAL):**
- **ALWAYS apply horizontal padding to the outer container** for full-width patterns with backgrounds
- **Standard horizontal padding = `var:preset|spacing|medium`** (~24px on mobile at 390px viewport)
- **NEVER use inner padding only** - this creates white gaps on mobile for colored backgrounds
- **Apply padding once** - don't add horizontal padding in multiple nested containers

**Two Pattern Structures:**

1. **Full-width Group with Background:**
```html
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
```
✅ Background extends edge-to-edge
✅ Content has proper spacing
✅ Consistent across viewports

2. **Cover Block with Background:**
```html
<!-- wp:cover {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <!-- Inner content - NO additional horizontal padding -->
  </div>
</div>
```
✅ Outer padding on cover block
✅ NO horizontal padding on inner groups
✅ Prevents white gaps on mobile

**Common Mistakes:**
```html
<!-- ❌ WRONG - No horizontal padding on outer container -->
<!-- wp:cover {"align":"full","style":{"spacing":{"padding":{"left":"0","right":"0"}}}} -->
  <!-- Inner group with padding - causes white gaps! -->

<!-- ✅ CORRECT - Horizontal padding on outer container -->
<!-- wp:cover {"align":"full","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
  <!-- Inner content uses constrained layout, not additional padding -->
```

**Reference Examples:**
- ✅ Correct: `services-feature-cards.php`, `shop-overview-three-columns.php`
- ✅ Fixed: `stats-list.php`, `stats-showcase.php`, `team-grid.php` (December 2025 update)

**See:** [docs/elayne/RESPONSIVENESS.md](../../docs/elayne/RESPONSIVENESS.md) for complete analysis

**Pattern Image Guidelines:**
- **NEVER use hardcoded media IDs** in `wp:image` blocks (e.g., `"id":59`)
- **NEVER use external URLs** (Unsplash, CDNs, etc.) - all images must be local files
- **ALWAYS use PHP template methods** for image paths as recommended in [WordPress documentation](https://developer.wordpress.org/themes/patterns/using-php-in-patterns/):
  ```php
  <?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/filename.webp
  ```
  Or alternatively:
  ```php
  <?php echo esc_url( get_theme_file_uri( 'patterns/images/filename.webp' ) ); ?>
  ```
- **Security requirement**: Always wrap template methods in `esc_url()` for proper URL escaping
- **Image storage**: All pattern images must be stored in `patterns/images/` directory
- **GPL compatibility**: All images must be GPL-compatible or public domain (CC0, Pexels License, etc.)
  - **Document image sources in `readme.txt`** (Copyright section at bottom of file) - This is the official WordPress.org requirement
  - Follow the same attribution format as existing images (see lines 269-349 in readme.txt)
  - Also update `README.md` if image credits are relevant for GitHub documentation
  - Ensure redistribution rights before adding new images
  - **Preferred sources**:
    - **WordPress Openverse** (openverse.org) - Curated GPL-compatible images with built-in filtering (filter by "Use commercially" + "Modify or adapt")
    - Pexels (GPL-compatible license, free to use, no attribution required)
    - Custom photography
  - **NEVER use**: not GPL-compatible images
- **Image optimization**:
  - Use WebP format for best compression and quality
  - Optimize file sizes (aim for <200KB per image)
  - Use appropriate dimensions for intended use (avoid oversized images)
- Hardcoded IDs cause performance issues: database queries for non-existent media, blinking/flashing effects, console errors, and validation failures
- Removing hardcoded IDs ensures patterns work consistently across all WordPress installations

**Full-Width Pattern Layout (CRITICAL):**
- **Problem**: Full-width patterns (`align="full"`) with constrained layout on the outer group cause horizontal gaps/overflow
- **Root Cause**: Setting `"layout":{"type":"constrained","contentSize":"1200px"}` on an `alignfull` group creates a max-width constraint that conflicts with the full-width alignment
- **Solution**: ALWAYS use `"layout":{"type":"default"}` on the outer `alignfull` group, then nest constrained groups inside for content areas
- **When to use**: ANY full-width section with `align="full"` and background color/image

**Example - WRONG (causes gap):**
```html
<!-- Outer group has BOTH align="full" AND constrained layout - CAUSES GAP! -->
<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull">
    <!-- Content here -->
    <figure class="wp-block-image"><img src="..." alt=""/></figure>
</div>
<!-- /wp:group -->
```

**Example - CORRECT (no gap):**
```html
<!-- Outer group uses "default" layout, inner groups use "constrained" -->
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">

    <!-- Constrained group for text content -->
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group">
        <h1>Heading</h1>
        <p>Text content...</p>
    </div>
    <!-- /wp:group -->

    <!-- Constrained group for images -->
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group">
        <figure class="wp-block-image"><img src="..." alt=""/></figure>
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
```

**Rule of Thumb**:
- **Outer `alignfull` group**: ALWAYS use `"layout":{"type":"default"}`
- **Inner content groups**: Use `"layout":{"type":"constrained","contentSize":"XXXpx"}` to center and limit width
- This pattern matches WordPress core blocks and Ollie/modern block themes
- See `hero-two-tone.php` for a working reference example

**Page Template Layout for Full-Width Patterns (CRITICAL):**
- **Problem**: Page templates that use `"layout":{"type":"default"}` on `post-content` block prevent full-width patterns from breaking out properly
- **Root Cause**: The `default` layout type constrains all child blocks, while `constrained` layout type allows `alignfull` blocks to break out
- **Solution**: Page templates must use `"layout":{"type":"constrained"}` on the `post-content` block
- **Fixed templates**: `template-page-wide.php`, `template-page-wide-no-title.php` both updated to use `constrained` layout
- **Correct template**: `template-page-full.php` already uses `constrained` layout (this is the template used by `page-no-title.html`)
- **Reference**: Based on Ollie theme's `template-page-full.php` approach
- **When editing page templates**: Always verify `post-content` block uses `{"layout":{"type":"constrained"}}`, NOT `{"layout":{"type":"default"}}`

### Modifying theme.json
1. **Always validate JSON** - Invalid JSON breaks entire theme
2. **Use semantic naming** - Colors should describe purpose, not appearance
3. **Test fluid typography** - Verify clamp() values at mobile and desktop widths
4. **Maintain consistency** - Follow existing naming patterns

### Block Extensions
1. **Vanilla JavaScript only** - No build step, no JSX
2. **WordPress API usage** - Use `wp.*` global objects
3. **Server-side rendering** - Filter `render_block` in PHP for output
4. **Inspector controls** - Use PanelBody and ToggleControl components
5. **Attribute persistence** - Register attributes via `blocks.registerBlockType` filter

### Translation Readiness
- Text domain: `'elayne'`
- Use `__()`, `_e()`, `esc_html__()` for all user-facing strings
- Translation files in `/languages/` directory
- POT file generation for translators

## Common Tasks

### Adding a New Pattern
```bash
# 1. Create pattern file
touch patterns/my-new-pattern.php

# 2. Add pattern header and markup
# 3. Test in WordPress block editor (appears in inserter)
# 4. Assign to appropriate pattern category
```

### Modifying Global Styles
```bash
# 1. Edit theme.json
# 2. Validate JSON syntax
# 3. Refresh WordPress editor (Cmd+Shift+R to clear cache)
# 4. Test changes in both editor and frontend
```

### Extending a Core Block
```bash
# 1. Create JavaScript file in assets/js/block-extensions/
# 2. Add PHP handler in inc/block-extensions.php
# 3. Enqueue script in block-extensions.php
# 4. Register attributes via wp.hooks.addFilter
# 5. Add Inspector controls via Higher Order Component
# 6. Test in block editor
```

### Updating Image Sizes
```bash
# 1. Edit add_image_size() calls in functions.php
# 2. Regenerate thumbnails (WordPress plugin or WP-CLI):
wp media regenerate --yes
```

## WP-CLI Usage

**IMPORTANT**: All WP-CLI commands must be run from the Trellis VM, not from your local machine.

**Why Trellis VM?**
- Database connection is configured in the VM environment
- WordPress installation is accessible at `/srv/www/demo.imagewize.com/current/`
- All WP-CLI commands require database access
- Local machine doesn't have correct database credentials
- **Important**: If you have another database server (MySQL, MariaDB, PostgreSQL) running locally on your machine, it will conflict with the Trellis VM's database port. In this case, you **must** run WP-CLI commands from within the VM

### Common WP-CLI Commands

**From Trellis VM (Interactive Shell):**
```bash
# Access VM shell
cd ~/code/imagewize.com/trellis
trellis vm shell

# Navigate to demo site
cd /srv/www/demo.imagewize.com/current

# Common commands
wp cache flush --path=web/wp
wp theme list --path=web/wp
wp plugin list --path=web/wp
wp media regenerate --yes --path=web/wp
wp i18n make-pot . languages/elayne.pot

# For multisite, run commands for each site
wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp
```

**From Host Machine (Single Command):**
```bash
# Navigate to trellis directory
cd ~/code/imagewize.com/trellis

# Run single command
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp cache flush --path=web/wp

# Regenerate thumbnails
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp media regenerate --yes --path=web/wp

# Generate translation POT file
trellis vm shell --workdir /srv/www/demo.imagewize.com/current/web/app/themes/elayne -- wp i18n make-pot . languages/elayne.pot
```

### Multisite Commands

The demo site is a multisite installation, so some commands need to be run for each site:

```bash
# From Trellis VM
cd /srv/www/demo.imagewize.com/current

# List all sites
wp site list --path=web/wp

# Flush cache for all sites
wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp

# Run command for specific site URL
wp --url=http://demo.imagewize.test/ cache flush --path=web/wp
```

## Server Access

### Accessing Live Demo Server

**SSH Access:**
```bash
# SSH as web user (recommended for read-only operations and WP-CLI commands)
ssh web@demo.imagewize.com

# SSH as warden user (admin access - requires password for sudo commands)
ssh warden@demo.imagewize.com
```

**SSH User Guide:**
- **`web@`** - Passwordless, read-only access. Use for automation and monitoring.
- **`warden@`** - Admin user with sudo access. Requires password for administrative commands.
- **`root@`** - Only configured on the provisioning MacBook. Use `warden@` instead.

**Demo Site Paths on Server (Bedrock Structure):**
- Current release: `/srv/www/demo.imagewize.com/current/`
- Theme directory: `/srv/www/demo.imagewize.com/current/web/app/themes/elayne/`
- Uploads: `/srv/www/demo.imagewize.com/shared/uploads/`
- Logs: `/srv/www/demo.imagewize.com/logs/`

**Common Server Operations:**
```bash
# SSH to demo server
ssh web@demo.imagewize.com
cd /srv/www/demo.imagewize.com/current

# Check WordPress status (multisite)
wp site list --path=web/wp

# Flush cache (multisite - all sites)
wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp

# Check theme
wp theme list --path=web/wp

# View error logs
tail -f /srv/www/demo.imagewize.com/logs/error.log
```

**Deployment:**
- Managed via Trellis from repository root
- See main `CLAUDE.md` in repository root for deployment commands
- Demo site uses multisite configuration

## Version Management

**Current Version**: 1.0.0-beta.1

**Version locations to update**:
1. `style.css` - Line 10: `Version: X.X.X`
2. `readme.txt` - Line 7: `Stable tag: X.X.X`
3. `CHANGELOG.md` - Add new version section

## Debugging

### Debug Log Location

When debugging issues on the Elayne demo site:
- **Location in VM**: `/srv/www/demo.imagewize.com/logs/debug.log`
- **Access from VM**:
  ```bash
  # From Trellis VM shell
  tail -50 /srv/www/demo.imagewize.com/logs/debug.log

  # Or from host machine
  cd ~/code/imagewize.com/trellis
  trellis vm shell -- tail -50 /srv/www/demo.imagewize.com/logs/debug.log
  ```
- **Note**: The log directory is synced via Lima, but typically accessed through VM commands

## WordPress Integration

### Template Hierarchy

Elayne follows a clean template architecture where HTML templates (in `/templates/`) reference PHP patterns (in `/patterns/`). This structure follows Ollie theme's approach for maximum maintainability.

**Complete Template List** (in `/templates/`):

| Template File | Referenced Pattern | Purpose |
|---------------|-------------------|---------|
| `404.html` | `elayne/template-page-404` | Error page (Page Not Found) |
| `archive.html` | `elayne/template-page-archive` | Archive pages (category, tag, date) |
| `front-page.html` | `elayne/template-index-grid` | Static homepage (overrides page content*) |
| `home.html` | `elayne/template-index-grid` | Blog index page |
| `index.html` | `elayne/template-index-grid` | Fallback template (post archives) |
| `page.html` | `elayne/template-page-centered` | Default page template |
| `page-no-title.html` | `elayne/template-page-full` | Page without title section |
| `page-with-sidebar.html` | `elayne/template-page-right-sidebar` | Page with right sidebar |
| `search.html` | `elayne/template-page-search` | Search results page |
| `single.html` | `elayne/template-post-centered` | Single post template |

**Template Patterns** (in `/patterns/`):

| Pattern File | Purpose | Usage |
|--------------|---------|-------|
| `template-page-404.php` | 404 error page with search | Error pages |
| `template-page-archive.php` | Archive layout with query title and post grid | Category, tag, date archives |
| `template-page-centered.php` | Centered page layout with title | Standard pages |
| `template-page-full.php` | Full-width page without title section | Landing pages, custom layouts |
| `template-page-right-sidebar.php` | Two-column layout (66.66% content, 33.33% sidebar) | Pages with sidebar |
| `template-page-search.php` | Search results with query loop | Search results |
| `template-index-grid.php` | Post grid layout for blog/archive | Blog index, archives, homepage |
| `template-post-centered.php` | Centered single post layout | Single posts |

**How Templates Work:**
- Templates in `/templates/` are HTML files that WordPress recognizes in the template hierarchy
- Each template references exactly **one pattern** using `<!-- wp:pattern {"slug":"elayne/pattern-name"} /-->`
- Patterns in `/patterns/` are PHP files containing the actual block markup and can include `<!-- wp:post-content /-->` for page editor content
- This separation allows for easier maintenance and reuse across templates
- Pattern files include header comments with `Title`, `Slug`, `Categories`, and optional `Template Types`

### Template Parts
- `parts/header.html` - Site header with navigation
- `parts/footer.html` - Site footer

### ⚠️ Important: Front Page Template Behavior

The `templates/front-page.html` template **overrides page content** when a static page is set as the homepage (`Settings > Reading > "Your homepage displays" set to "A static page"`).

**How it works:**
1. WordPress template hierarchy: `front-page.html` takes precedence over page templates when `page_on_front` is set
2. The current `front-page.html` loads a hardcoded pattern: `<!-- wp:pattern {"slug":"elayne/template-index-grid"} /-->`
3. This pattern displays only the `elayne/blog-post-columns` pattern (3 posts in a grid)
4. **Any content added to the page via the block editor will NOT appear on the frontend**

**Example Issue:**
If you set page ID 6 as the homepage and edit it in the block editor to include:
- Blog Post Columns pattern
- Featured Post Two Column pattern

Only the first pattern will display on the frontend because `front-page.html` ignores the page content stored in the database.

**Solution Options:**

1. **Make `front-page.html` respect page content:**
   ```html
   <!-- wp:template-part {"slug":"header","tagName":"header"} /-->

   <!-- wp:group {"tagName":"main"} -->
   <main class="wp-block-group"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></main>
   <!-- /wp:group -->

   <!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
   ```
   This renders the actual page content, allowing editors to build custom homepages via the block editor.

2. **Delete `front-page.html` entirely:**
   - WordPress will fall back to using the page's assigned template (e.g., `page-no-title.html`)
   - Requires that page templates use `<!-- wp:post-content /-->` to display page content

3. **Design homepage in template (current approach):**
   - Keep `front-page.html` with hardcoded patterns
   - Don't try to edit homepage content via the block editor
   - Modify patterns directly in `patterns/` directory
   - This approach ensures consistent homepage design across installs

**Recommendation**: Choose option 1 or 3 depending on whether you want editors to customize the homepage (option 1) or maintain a consistent, template-controlled homepage (option 3).

### Core Features Disabled
- Core block patterns removed (line 22 in functions.php)
- Only custom Elayne patterns are available

### Editor Styles
- `style.css` enqueued for both frontend and editor
- Ensures WYSIWYG consistency between editor and frontend
