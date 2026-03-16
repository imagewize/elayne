# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Important Git Commit Guidelines

**NO Claude Attribution in Any Commits**
- Do NOT include Claude Code attribution in any commits
- Do NOT add "🤖 Generated with Claude Code" or "Co-Authored-By: Claude" footers
- Keep all commits professional and attribution-free
- This applies to ALL files and directories in the entire repository
- Follow standard git commit message format

**Changelog and Readme Updates**
- When updating `CHANGELOG.md` or `readme.txt`, do NOT describe changes as "Changed" unless the file already existed in the main branch
- New changelog entries are ADDITIONS, not changes to existing files

## Efficiency
- Avoid reading entire files when only a specific section is needed
- Use `Grep` to locate relevant code before reading
- Prefer targeted reads with `offset` and `limit` parameters over full file reads

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
├── patterns/           # PHP block patterns
├── templates/          # HTML templates (index, single, page)
├── functions.php       # Theme setup and pattern categories
├── style.css           # Theme metadata (no actual styles)
└── theme.json          # Global styles, settings, colors, typography
```

## Development Workflow

### No Build Tools
- **Direct editing**: All changes are made directly to source files
- **No compilation**: No npm, webpack, or build step required
- **Version control**: Use git for all changes

### Local Development with Trellis VM
The demo site uses **Trellis VM** (Lima-based, NOT Vagrant). See parent `CLAUDE.md` for full Trellis VM commands and file sync details.

- **Protocol**: HTTP — `http://demo.imagewize.test/` (NOT `https://`)
- **File sync**: Automatic real-time sync via Lima — no manual rsync needed
- **Common issue**: Changes not appearing → WordPress cache, not file sync

**Clear cache:**
```bash
# From host machine
cd ~/code/imagewize.com/trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp cache flush --path=web/wp
```

### WordPress Development Mode
For pattern and theme.json changes to appear immediately, enable in `config/environments/development.php`:
```php
Config::define('WP_DEVELOPMENT_MODE', 'theme');
```
Disable in production for optimal performance.

### Style Variation Changes (theme.json and Style Variations)

WordPress aggressively caches compiled global styles. When `theme.json` or `styles/*.json` changes don't appear:

1. **Flush cache** (often enough with `WP_DEVELOPMENT_MODE=theme`)
2. **If that fails — switch style variations** in the Site Editor (`Styles → Browse styles`): switch away from your variation and back. This forces WordPress to recompile from the JSON files.
3. **Nuclear option**: Delete the `wp_global_styles` custom post type and flush cache.

### Pattern URL Behavior

`get_template_directory_uri()` in patterns returns environment-specific URLs that get hardcoded into the database. Moving content between environments without search-replace causes mixed content warnings.

**Always run search-replace when deploying content to production:**
```bash
ssh web@demo.imagewize.com "cd /srv/www/demo.imagewize.com/current && \
  wp search-replace 'http://demo.imagewize.test' 'https://demo.imagewize.com' \
  --all-tables --precise --path=web/wp && wp cache flush --path=web/wp"
```

See parent `CLAUDE.md` → "CRITICAL: URL Sanitization After Database Operations" for full workflow.

## Key Components

### Theme Configuration (theme.json)

Central configuration for:
- **Color palette**: Semantic colors (primary, main, base, secondary, tertiary, border-light, border-dark, primary-accent, primary-dark, main-accent)
- **Typography**: 3 variable fonts with 7 fluid font sizes
- **Spacing**: Responsive spacing sizes using clamp()
- **Shadows**: 8 shadow presets (4 dark, 4 light variants)
- **Layout**: contentSize (740px), wideSize (1260px)

**Important**: All design tokens are defined here. Never hardcode colors, sizes, or spacing in patterns.

### Block Patterns (patterns/*.php)

**Pattern Structure**:
```php
<?php
/**
 * Title: Pattern Name
 * Slug: elayne/pattern-slug
 * Categories: elayne/category
 * Description: Pattern description
 * Keywords: keyword1, keyword2
 * Viewport Width: 1200
 * Grid Config: 18rem (simple cards: icon + title + short description)
 */
?>
<!-- Block markup here -->
```

**Custom Pattern Categories** (registered in functions.php):
- `elayne/hero`, `elayne/features`, `elayne/call-to-action`
- `elayne/testimonial`, `elayne/team`, `elayne/statistics`
- `elayne/contact`, `elayne/posts`
- `elayne/card-simple` (18rem), `elayne/card-extended` (19rem), `elayne/card-profiles` (20rem)

### Block Extensions

1. **Navigation Block** (`assets/js/block-extensions/navigation.js`)
   - "Clickable Parents" option + "Improved Chevrons" option
   - Handler: `inc/block-extensions.php` filters `render_block` for `core/navigation`

2. **Post Excerpt Block** (`assets/js/block-extensions/post-excerpt.js`)
   - "Link to Post" option + "Underline Link" toggle
   - Handler: `inc/block-extensions.php` filters `render_block` for `core/post-excerpt`

**Architecture**: Vanilla JavaScript, uses `wp.hooks`/`wp.components`/`wp.blockEditor` APIs.

### Custom Image Sizes (functions.php)
- `elayne-portrait-small` (380×570) — `elayne-portrait-medium` (380×507) — `elayne-portrait-large` (380×475) — `elayne-single-hero` (700×400)

## Design System

### Color Palette (theme.json)
- **Brand**: `primary` (teal), `primary-accent` (light teal), `primary-dark` (dark teal)
- **Contrast**: `main` (dark gray), `main-accent` (medium gray)
- **Base**: `base` (white), `secondary` (light gray), `tertiary` (very light gray)
- **Borders**: `border-light`, `border-dark`

### Typography
- **Mona Sans** (variable 300-900) — headings
- **Open Sans** (variable 300-800) — body text fallback
- **Bitter** (variable 100-900, serif) — optional serif

**Fluid Font Sizes**: `xx-small` → `x-small` → `small` → `base` → `medium` → `large` → `x-large` → `xx-large`

### Spacing Scale
`small` → `medium` → `large` → `x-large` → `xx-large` → `xxx-large` (all use clamp() for responsive scaling)

## Best Practices

### Creating New Patterns
1. Create PHP file in `patterns/` — naming: `category-descriptive-name.php`
2. Add header comment: Title, Slug, Categories, Description, Keywords, Viewport Width, Grid Config
3. Use semantic variables: `var:preset|color|primary`, `var:preset|spacing|medium`
4. Register slug as: `elayne/pattern-name`
5. **Wrap ALL user-facing text** in `<?php esc_html_e( 'Text', 'elayne' ); ?>` — every heading, paragraph, button label, non-empty alt text (WP.org requirement)
6. **Use `get_template_directory_uri()`** for all image `src` — never hardcode URLs
7. Test in block editor inserter

**Grid Layout Categories:**
- `elayne/card-simple` — 18rem: icon + title + short description
- `elayne/card-extended` — 19rem: nested cards, multiple CTAs, rich content
- `elayne/card-profiles` — 20rem: photos + names + titles + bios

### Border Radius Presets (WordPress 6.9+)

WordPress 6.9 introduced `settings.border.radiusSizes` — use `var:preset|border-radius|{slug}` in patterns, **not** hardcoded px values and **not** the non-existent `var:preset|border|radius`.

**Elayne radius scale** (defined in `theme.json → settings.border.radiusSizes`):

| Slug   | Value    | Used for                            |
|--------|----------|-------------------------------------|
| `sm`   | 0.625rem | Buttons, small interactive elements |
| `md`   | 0.75rem  | Date boxes, inner card elements     |
| `lg`   | 1rem     | Card outer containers               |
| `pill` | 999px    | Badges, tags, pill labels           |

**Border width**: No preset system exists — always hardcode `1px`.

```php
<!-- Correct -->
"style":{"border":{"radius":"var:preset|border-radius|lg","width":"1px"}}

<!-- WRONG — preset does not exist -->
"style":{"border":{"radius":"var:preset|border|radius","width":"var:preset|border|width"}}
```

> **Full details**: `docs/elayne/BORDER-PRESETS.md`

### Valid Preset Slugs — Quick Reference

**Spacing** (`var:preset|spacing|{slug}`): `2-x-small`, `x-small`, `small`, `medium`, `large`, `x-large`, `xx-large`, `xxx-large`
— ⚠️ `xx-small` does NOT exist. Use `2-x-small` or `x-small`.

**Font sizes** (`var:preset|font-size|{slug}`): `xx-small`, `x-small`, `small`, `base`, `medium`, `large`, `x-large`, `xx-large`

### Critical Pattern Rules

| Rule | Quick summary |
|---|---|
| **Native blocks** | NEVER use `wp:html` — always use `wp:list`, `wp:group`, `wp:heading`, etc. |
| **HTML comments** | NEVER add `<!-- comment -->` between `<div>` tags and block comments — causes validation failure |
| **Block attributes** | `backgroundColor`, `layout`, `align` are root-level — NEVER nest inside `style` object |
| **Full-width layout** | Outer `alignfull` group: ALWAYS `"layout":{"type":"default"}`; inner groups use `"constrained"` |
| **Page template** | `post-content` block must use `"layout":{"type":"constrained"}` — NOT `"default"` |
| **Icons** | NEVER use emoji — always use SVG icons stored in `patterns/images/` |
| **Images** | NEVER hardcode media IDs; ALWAYS use `get_template_directory_uri()` wrapped in `esc_url()` |
| **External images** | NEVER use hardcoded external URLs (e.g. `http://demo.imagewize.test/...`) — WP.org rejection |
| **Image block** | `is-resized` class required when width/height set; `align` comes after width/height in JSON |
| **Translation strings** | ALL user-facing text in patterns MUST use `esc_html_e()` / `esc_attr__()` with `'elayne'` domain |
| **Email addresses** | NEVER use real business emails in patterns — always use `example@example.com` (WP.org requirement) |
| **Bundled images** | ALL bundled images MUST be CC0 or GPL-compatible — Pexels License is NOT accepted by WP.org |
| **WP-CLI patterns** | Use `<!-- wp:pattern {"slug":"elayne/slug"} /-->` — NEVER `php -r 'include ...'` |

> **Full details with code examples**: `docs/elayne/PATTERN-GUIDELINES.md`

### Grid Layouts

- **ALWAYS use `minimumColumnWidth` grid** for 3+ column layouts (true 3→2→1 responsive)
- **NEVER use `wp:columns`** for 3-column patterns — skips 2-column tablet breakpoint
- **NEVER use fixed `columnCount`** — ignores viewport size
- Use `rem` units: `18rem` simple cards, `19rem` complex cards, `20rem` profiles, `28-29rem` text-heavy

```html
<!-- Correct: responsive grid -->
<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
```

> **Full details**: `docs/elayne/GRID-LAYOUT-STANDARDS.md`

### Spacing & BlockGap

- **NO spacer blocks** — use `blockGap` on parent containers
- **NO manual margins** on headings/paragraphs — let parent `blockGap` control spacing
- **Full-width sections** MUST reset margins: `"margin":{"top":"0","bottom":"0"}` (no units)
- **Horizontal padding**: always on outer container — `left/right: var:preset|spacing|medium`
- Semantic scale: `small` (tight grouping) → `medium` → `large` → `x-large` (major section breaks)

> **Full details**: `docs/elayne/DESIGN-REFACTOR.md`

### Modifying theme.json
1. **Always validate JSON** — invalid JSON breaks the entire theme
2. **Use semantic naming** — colors describe purpose, not appearance
3. **Test fluid typography** — verify clamp() values at mobile and desktop widths

### Block Extensions
1. **Vanilla JavaScript only** — no build step, no JSX
2. **WordPress API usage** — use `wp.*` global objects
3. **Server-side rendering** — filter `render_block` in PHP for output

### Translation Readiness (CRITICAL — WP.org Review Requirement)

**Every user-facing string in every pattern PHP file MUST be wrapped in a translation function.** Unwrapped strings will cause WP.org theme review rejection.

| Content type | Function to use | Example |
|---|---|---|
| Text inside HTML tags | `esc_html_e( 'Text', 'elayne' )` | `<h2><?php esc_html_e( 'Our Team', 'elayne' ); ?></h2>` |
| Text in HTML attributes (alt, title, aria-label) | `esc_attr__( 'Text', 'elayne' )` | `alt="<?php echo esc_attr__( 'Team photo', 'elayne' ); ?>"` |
| HTML-containing strings | `wp_kses_post( __( 'Text', 'elayne' ) )` | Rare — only when string contains allowed HTML |

**What to wrap:**
- All headings, paragraphs, list items, button labels
- All `alt` attribute values that are non-empty (leave `alt=""` empty decorative images as-is)
- All stat numbers, labels, tags, badge text (e.g. "+150%", "Data Processing Speed")
- All CTA text, testimonial quotes, names, job titles

**What NOT to wrap:**
- Empty `alt=""` attributes (decorative images — leave as-is)
- Block comment JSON attributes (`<!-- wp:heading {"fontSize":"large"} -->`)
- PHP expressions already using `get_template_directory_uri()` or similar
- Unicode symbols used as icons (★, →, etc.) — wrap the surrounding label text instead

**Quick check before committing any pattern:**
```bash
# Find any paragraph/heading/button/img text NOT using esc_html_e or esc_attr__
# Look for bare text between HTML tags in pattern files:
grep -n ">\s*[A-Z][^<]*\s*<" patterns/your-pattern.php
```

- Text domain: `'elayne'`
- Translation files in `/languages/` directory

## Pattern Compliance Checker

Pattern compliance is enforced by a PHP checker script to catch issues before they reach WP.org review.

**Script location** (in the imagewize.com monorepo):
- Checker: `scripts/elayne/pattern-check/class-patterncompliancechecker.php`
- Shell wrapper: `scripts/elayne/pattern-check/check-patterns.sh`

**CI**: `.github/workflows/pattern-compliance.yml` in the Elayne theme repo runs the checker automatically on every PR/push against only the changed pattern files.

### Running locally (from monorepo root)

```bash
# Check all patterns
php scripts/elayne/pattern-check/class-patterncompliancechecker.php \
  demo/web/app/themes/elayne/patterns/*.php

# Check specific patterns only
php scripts/elayne/pattern-check/class-patterncompliancechecker.php \
  demo/web/app/themes/elayne/patterns/fandb-amenities.php \
  demo/web/app/themes/elayne/patterns/spa-booking-cta.php
```

### What the checker validates

| Check | Details |
|---|---|
| **Hardcoded font-size** | `font-size:1.5rem` etc. → use `"fontSize":"large"` semantic preset |
| **Full-width margin reset** | `alignfull` patterns must have `"margin":{"top":"0","bottom":"0"}` |
| **Spacer blocks** | `<!-- wp:spacer -->` → use parent `blockGap` instead |
| **3+ column wp:columns** | Use `minimumColumnWidth` grid instead |
| **HTML comments between blocks** | `<!-- Item 1 -->` between div and block comment causes validation errors |
| **Hardcoded media IDs** | `"id":123` in image blocks must be removed |
| **External image URLs** | `src="https://..."` — use `get_template_directory_uri()` |
| **Untranslated text** | Bare text in HTML tags must use `esc_html_e()` / `esc_attr__()` or `wp_kses_post()` |
| **Untranslated alt** | Non-empty `alt="..."` without PHP must use `esc_attr__()` |
| **Emoji icons** | Use SVG icons stored in `patterns/images/` |

**Template exception**: Files prefixed `template-`, `header-`, or `footer-` get relaxed rules
(WordPress Core block defaults like `border-radius:5px` for avatars are allowed).

**Note on hardcoded border-radius / padding**: The checker does NOT flag `border-radius` or
`padding` values — `padding` always uses semantic CSS vars already, and `border-radius` has no
WP semantic preset before 6.9. Use radius presets (`sm`/`md`/`lg`/`pill`) where practical.

### Choosing the right translation wrapper

| Situation | Function | Example |
|---|---|---|
| Plain text, no HTML | `esc_html_e( 'Text', 'elayne' )` | Headings, button labels, paragraph text |
| Text with allowed HTML tags (`<strong>`, `<br>`, `<a>`) | `echo wp_kses_post( __( 'Text with <strong>bold</strong>', 'elayne' ) )` | Rich body text, hours with line breaks |
| HTML attribute values | `echo esc_attr__( 'Alt text', 'elayne' )` | `alt=""`, `aria-label=""`, `title=""` |

**When to use `wp_kses_post`**: Use it when the string contains HTML you want to preserve
(e.g. `<strong>`, `<em>`, `<br>`, `<a>`). `esc_html_e` would strip those tags.
`wp_kses_post` allows the same HTML WordPress allows in post content — safe and flexible.

```php
<!-- Plain text → esc_html_e -->
<h2><?php esc_html_e( 'Our Menu', 'elayne' ); ?></h2>

<!-- Contains <strong> and <br> → wp_kses_post -->
<p><?php echo wp_kses_post( __( '<strong>Monday – Friday</strong><br>11:00 AM – 10:00 PM', 'elayne' ) ); ?></p>

<!-- HTML attribute → esc_attr__ -->
<img alt="<?php echo esc_attr__( 'Chef portrait', 'elayne' ); ?>">
```

## Common Tasks

### Adding a New Pattern
```bash
# 1. Create pattern file
touch patterns/my-new-pattern.php
# 2. Add pattern header and markup
# 3. Test in WordPress block editor (appears in inserter)
```

### Modifying Global Styles
```bash
# 1. Edit theme.json
# 2. Validate JSON syntax
# 3. Refresh WordPress editor (Cmd+Shift+R to clear cache)
# 4. If needed: switch style variations in Site Editor to force recompile
```

### Extending a Core Block
```bash
# 1. Create JS file in assets/js/block-extensions/
# 2. Add PHP handler in inc/block-extensions.php
# 3. Enqueue script in block-extensions.php
# 4. Register attributes via wp.hooks.addFilter
# 5. Add Inspector controls via Higher Order Component
```

### Updating Image Sizes
```bash
# 1. Edit add_image_size() calls in functions.php
# 2. Regenerate thumbnails:
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp media regenerate --yes --path=web/wp
```

## WP-CLI & Server Access

All WP-CLI commands must be run from the **Trellis VM**, not your local machine.

See parent `CLAUDE.md` for full WP-CLI commands, multisite commands, SSH access, and server paths.

**Quick reference:**
```bash
# Single command from host
cd ~/code/imagewize.com/trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp cache flush --path=web/wp

# Multisite cache flush
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  bash -c "wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp"
```

## Version Management

**Version locations to update**:
1. `style.css` — `Version: X.X.X`
2. `readme.txt` — `Stable tag: X.X.X`
3. `CHANGELOG.md` — Add new version section

## Debugging

**Debug log location**: `/srv/www/demo.imagewize.com/logs/debug.log`

```bash
# From host machine
cd ~/code/imagewize.com/trellis
trellis vm shell -- tail -50 /srv/www/demo.imagewize.com/logs/debug.log
```

## WordPress Integration

### Template Hierarchy

| Template File | Pattern | Purpose |
|---|---|---|
| `404.html` | `elayne/template-page-404` | 404 error page |
| `archive.html` | `elayne/template-page-archive` | Category/tag/date archives |
| `front-page.html` | `elayne/template-index-grid` | Static homepage (overrides page content) |
| `home.html` | `elayne/template-index-grid` | Blog index |
| `index.html` | `elayne/template-index-grid` | Fallback template |
| `page.html` | `elayne/template-page` | Default page (with title) |
| `page-no-title.html` | `elayne/template-page-no-title` | Page without title section |
| `page-with-sidebar.html` | `elayne/template-page-right-sidebar` | Page with right sidebar |
| `search.html` | `elayne/template-page-search` | Search results |
| `single.html` | `elayne/template-post-centered` | Single post |

**How templates work**: Each HTML template references exactly one pattern using `<!-- wp:pattern {"slug":"elayne/pattern-name"} /-->`. Patterns contain the actual block markup and can include `<!-- wp:post-content /-->`.

### Template Parts
- `parts/header.html` — Site header with navigation
- `parts/footer.html` — Site footer

### ⚠️ Front Page Template Behavior

`templates/front-page.html` **overrides page content** when a static page is set as homepage. Any content added to the page via the block editor will NOT appear on the frontend.

**Options:**
1. Edit `front-page.html` to include `<!-- wp:post-content /-->` (lets editors customize homepage)
2. Delete `front-page.html` (WordPress falls back to page's assigned template)
3. Edit patterns directly (current approach — consistent homepage across installs)

> See `docs/elayne/PAGE-TEMPLATES.md` for full template analysis and rationale.

### Core Features Disabled
- Core block patterns removed (line 22 in functions.php) — only Elayne patterns available

### Editor Styles
- `style.css` enqueued for both frontend and editor for WYSIWYG consistency
