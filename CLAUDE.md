# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Important Git Commit Guidelines

- Do NOT include Claude Code attribution in any commits
- Do NOT add "🤖 Generated with Claude Code" or "Co-Authored-By: Claude" footers
- When updating `CHANGELOG.md` or `readme.txt`, new entries are ADDITIONS — not "Changed"

## Efficiency
- Avoid reading entire files when only a specific section is needed
- Use `Grep` to locate relevant code before reading
- Prefer targeted reads with `offset` and `limit` parameters over full file reads

## Project Overview

Elayne is a premium WordPress block theme (FSE/block theme, WP 6.6+, PHP 8.0+, no build tools).

### Directory Structure
```
elayne/
├── assets/fonts/               # Variable fonts (Mona Sans, Open Sans, Bitter)
├── assets/js/block-extensions/ # Vanilla JS block extensions
├── inc/block-extensions.php    # PHP render_block filters
├── languages/                  # Translation files (text domain: 'elayne')
├── parts/                      # header.html, footer.html
├── patterns/                   # PHP block patterns
├── templates/                  # HTML templates
├── functions.php
├── style.css                   # Theme metadata only
└── theme.json                  # Single source of truth for styles/colors/spacing
```

## Local Development

See **parent `CLAUDE.md`** for: Trellis VM commands, file sync details, WP-CLI, SSH access, URL sanitization after DB operations.

- Protocol: `http://demo.imagewize.test/` (HTTP, not HTTPS)
- File sync: automatic via Lima — no rsync needed
- Cache: `trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp cache flush --path=web/wp`
- Enable `WP_DEVELOPMENT_MODE=theme` in `config/environments/development.php` for instant pattern changes

**Style variation cache:** If `theme.json`/`styles/*.json` changes don't appear, switch away and back in Site Editor (`Styles → Browse styles`).

### Demo Rebuild Script (`scripts/rebuild-demo.php`)

Rebuilds demo pages by rendering pattern PHP files in the live WP context and overwriting `post_content` — equivalent to a fresh block-editor insert. Works on both **single-site** and **multisite** WordPress installs.

**Security:** Checks `defined('WP_CLI')` at the top — will not execute via a web request even if the file is publicly reachable.

**Excluded from WP.org distribution** via `.distignore` (`scripts/*`).

**Single-site** (most users):
```bash
# Dry-run first (no writes)
WP_REBUILD_DRY_RUN=1 wp --path=web/wp \
  eval-file web/app/themes/elayne/scripts/rebuild-demo.php

# Live run
wp --path=web/wp eval-file web/app/themes/elayne/scripts/rebuild-demo.php
```

**Multisite** — pass `--url=` so WP-CLI switches to the correct subsite blog before reading page IDs. Page IDs are per-subsite, not global:
```bash
wp --path=web/wp --url=example.com/store/ \
  eval-file web/app/themes/elayne/scripts/rebuild-demo.php
```

**Customization:** Edit `$map` in the script to map your page IDs to pattern files. Discover page IDs with:
```bash
# Single-site
wp post list --post_type=page --fields=ID,post_title,post_name --path=web/wp

# Multisite subsite
wp post list --post_type=page --fields=ID,post_title,post_name \
  --path=web/wp --url=example.com/store/
```

The optional `$templates` array pushes custom `.html` template variants to the WP database (e.g. a demo-store-specific `archive-product-store.html`) without replacing the theme's base template file.

### WooCommerce Store Subsite

The demo site runs WooCommerce on a **subsite** mounted at `/store/`. All shop URLs are prefixed:

| Page | URL |
|---|---|
| Shop (product catalog) | `http://demo.imagewize.test/store/shop/` |
| Product category | `http://demo.imagewize.test/store/product-category/{slug}/` |
| Single product | `http://demo.imagewize.test/store/product/{slug}/` |
| WP Admin | `http://demo.imagewize.test/store/wp-admin/` |

**WooCommerce template hierarchy** (block theme, files in `templates/`):
- `archive-product.html` → shop page (`/store/shop/`) and fallback for all product archives
- `taxonomy-product_cat.html` → product category archives (`/store/product-category/*/`)
- `taxonomy-product_tag.html` → product tag archives
- `single-product.html` → single product pages

**WooCommerce filter blocks** (WooCommerce 10.7+):
- `woocommerce/product-filter-taxonomy` — filter by any taxonomy; use `{"taxonomy":"product_cat"}` for categories. **NOT** `product-filter-category` (does not exist).
- `woocommerce/product-filter-attribute` — filter by product attribute; omit `attributeId` to ship an unconfigured placeholder (Ollie pattern — client selects their attribute via Site Editor). Include `attributeId` only when building demo-specific templates. Verify IDs via `wp wc product_attribute list --path=web/wp --user=1`
- `woocommerce/product-filter-price` — price range slider

**Demo store attribute IDs** (demo site, May 2026 — do NOT hardcode in distributable templates):
- `attributeId: 1` → Leather Colour (`pa_leather-colour`)
- `attributeId: 2` → Style (`pa_style`)
- `attributeId: 3` → Features (`pa_features`)

## Design System

### Color Palette
- **Brand**: `primary` (teal), `primary-accent`, `primary-dark`
- **Contrast**: `main` (dark gray), `main-accent` (medium gray)
- **Base**: `base` (white), `secondary` (light gray), `tertiary` (very light gray)
- **Borders**: `border-light`, `border-dark`

### Typography
- **Mona Sans** — headings | **Open Sans** — body | **Bitter** — optional serif
- Font sizes: `xx-small` → `x-small` → `small` → `base` → `medium` → `large` → `x-large` → `xx-large`

### Spacing Scale
`2-x-small`, `x-small`, `small`, `medium`, `large`, `x-large`, `xx-large`, `xxx-large`
— ⚠️ `xx-small` does NOT exist. Use `2-x-small` or `x-small`.

**Actual spacing values (critical — prevents oversized pills/badges):**
| Slug | Value |
|---|---|
| `2-x-small` | clamp(0.25rem → 0.5rem) ~4–8px |
| `x-small` | clamp(0.375rem → 0.75rem) ~6–12px |
| `small` | clamp(0.5rem → 1rem) ~8–16px |
| `medium` | clamp(1.5rem → 2rem) ~24–32px ← LARGE, not "medium" |
| `large` | clamp(2rem → 3rem) ~32–48px |
| `x-large` | clamp(3rem → 5rem) ~48–80px |

**Actual font-size values (critical — prevents oversized headings):**
| Slug | Max value | Use for |
|---|---|---|
| `x-small` | 0.95rem | Labels, badges, captions |
| `small` | 1.05rem | Small body, buttons |
| `base` | 1.165rem | Body text |
| `medium` | 1.65rem | Lead text, stat labels |
| `large` | 2.75rem | H1 on dark hero, stat numbers |
| `x-large` | 3.5rem | Display H1 only |
| `xx-large` | 4.39rem | Rarely used — very large display only |

**Pill/badge padding rule:** Always use `x-small` (vertical) + `small` (horizontal). Never `medium` — that is ~28px per side and will make any pill grotesquely wide.

## Pattern Structure

```php
<?php
/**
 * Title: Pattern Name
 * Slug: elayne/pattern-slug
 * Categories: elayne/category
 * Keywords: keyword1, keyword2
 * Viewport Width: 1200
 */
?>
<!-- Block markup here -->
```

**Pattern categories**: `elayne/hero`, `elayne/features`, `elayne/call-to-action`, `elayne/testimonial`, `elayne/team`, `elayne/statistics`, `elayne/contact`, `elayne/posts`, `elayne/card-simple` (18rem), `elayne/card-extended` (19rem), `elayne/card-profiles` (20rem)

## WooCommerce Implementation

### Three-Tier Strategy

**Always follow this decision flow when implementing WooCommerce features:**

**Tier 1 - Use As-Is:** Use WooCommerce plugin patterns directly from `demo/web/app/plugins/woocommerce/patterns/` (e.g., `product-collection-{2,3,4}-columns.php`). These are **EXEMPT from Elayne's semantic variable rules** per PatternComplianceChecker configuration.

**Tier 2 - Style with CSS:** Override styling via `theme.json` or `style.css` when WooCommerce output doesn't match Elayne designs.

**Tier 3 - Custom Patterns:** Create custom Elayne patterns in `patterns/woocommerce/` **ONLY IF** Tiers 1-2 fail (cannot be styled to match via CSS alone).

### Plugin Patterns Exemption

**WooCommerce plugin-provided patterns are exempt from Elayne's strict compliance rules.**

WooCommerce core plugin includes official patterns in `wp-content/plugins/woocommerce/patterns/` (e.g., `product-collection-3-columns.php`). These patterns follow WordPress/WooCommerce block editor standards and **may contain hardcoded CSS values, custom layouts, and other attributes that would fail Elayne's PatternComplianceChecker**.

**Rule:** Use WooCommerce plugin patterns **as-is** without modification. Do NOT apply Elayne's semantic variable rules or spacing constraints to WooCommerce plugin patterns.

- ✅ Use `demo/web/app/plugins/woocommerce/patterns/*.php` directly
- ✅ Import via pattern inserter or copy to theme patterns with `woocommerce/` prefix
- ❌ Do NOT re-write WooCommerce patterns to use semantic spacing variables
- ❌ Do NOT flag WooCommerce plugin patterns in compliance checks

**Rationale:** WooCommerce is a first-party WordPress plugin. Its patterns are maintained by Automattic/WooCommerce core team and follow WordPress block editor conventions. Forcing these patterns to comply with theme-specific rules creates maintenance burden and divergence from upstream.

**Exception:** The PatternComplianceChecker MUST skip WooCommerce plugin patterns (`demo/web/app/plugins/woocommerce/patterns/*.php`). Theme patterns that use WooCommerce blocks must still follow Elayne rules.

### Common Pitfalls & Fixes

| Issue | Wrong | Right |
|-------|-------|-------|
| **Color references** | `"textColor":"charcoal"` | `"textColor":"main"` (use registered theme.json colors) |
| **Single product wrapper** | `<!-- wp:woocommerce/product-template -->` | Use product blocks directly (no wrapper) |
| **Pagination context** | Standalone `<!-- wp:query-pagination -->` | `product-collection` handles its own pagination |
| **Button attributes** | `"style":{...},"className":"..."` | `"className":"...","style":{...}` (root-level first) |
| **Full-width layout** | Outer `alignfull` with `constrained` | Outer `alignfull` with `"layout":{"type":"default"}` |
| **Unregistered categories** | `elayne/cart`, `elayne/checkout` | Use only `elayne/woocommerce` |

### Pattern Conventions

- **Naming:** Use `woo-` prefix for WooCommerce-specific patterns (e.g., `woo-cart.php`, `woo-checkout.php`, `woo-shop-landing.php`)
- **Categories:** Use only registered `elayne/woocommerce` category
- **Inserter:** Set `Inserter: false` for page-level patterns (cart, checkout) that shouldn't appear in inserter

---

## Critical Pattern Rules

| Rule | Quick summary |
|---|---|
| **Native blocks** | NEVER use `wp:html` — always use `wp:list`, `wp:group`, `wp:heading`, etc. |
| **HTML comments** | NEVER add `<!-- comment -->` between `<div>` tags and block comments — causes validation failure |
| **Whitespace between blocks** | NEVER add tabs, newlines, or spaces between an opening/closing `<div>` and the adjacent `<!-- wp:... -->` / `<!-- /wp:... -->` comment — WordPress block serialization is whitespace-strict. Write markup compact/inline as the editor outputs it. |
| **Block attributes** | `backgroundColor`, `layout`, `align` are root-level — NEVER nest inside `style` object |
| **Full-width layout** | Outer `alignfull` group: ALWAYS `"layout":{"type":"default"}`; inner groups use `"constrained"` |
| **Full-width margin reset** | MUST have `"margin":{"top":"0","bottom":"0"}` (no units) |
| **Page template** | `post-content` block must use `"layout":{"type":"constrained"}` — NOT `"default"` |
| **Icons** | NEVER use emoji — always use SVG icons stored in `patterns/images/` |
| **Images** | NEVER hardcode media IDs; ALWAYS use `get_template_directory_uri()` wrapped in `esc_url()` |
| **External images** | NEVER use hardcoded external URLs — WP.org rejection |
| **Image block** | `is-resized` class required when width/height set; `align` comes after width/height in JSON |
| **Image block — theme SVGs** | NEVER add `width`/`height` attributes to `<img>` inside `wp:image` for theme-bundled SVGs — no media ID means WP can't validate dimensions and throws a block validation error. Use `<img src="..." alt=""/>` only. |
| **Translation strings** | ALL user-facing text MUST use `esc_html_e()` / `esc_attr__()` with `'elayne'` domain |
| **Email addresses** | NEVER use real emails — always `example@example.com` (WP.org requirement) |
| **Bundled images** | MUST be CC0 or GPL-compatible — Pexels License NOT accepted by WP.org |
| **Hardcoded font-size** | NEVER `font-size:1.5rem` — use `"fontSize":"large"` semantic preset |
| **Button font-size** | `wp:button` does NOT support root-level `fontSize` — use `"style":{"typography":{"fontSize":"var:preset\|font-size\|base"}}` → generates `has-custom-font-size` + inline `font-size` style. Root-level `"fontSize":"base"` causes block validation errors on buttons. |
| **Spacer blocks** | NEVER `<!-- wp:spacer -->` — use parent `blockGap` instead |
| **Custom block types** | NEVER use `register_block_type()` in a theme — WP.org plugin-territory violation. Use the `render_block` filter on `core/group` blocks with a specific `className` instead (same pattern as the ticker). |

> Full details with code examples: `docs/elayne/PATTERN-GUIDELINES.md`

## New Vertical Development

When creating a new industry vertical (plumbing, legal, fintech, etc.), follow the full workflow in `docs/elayne/VERTICAL-WORKFLOW.md`.

**Entry point: always scaffold via pt-cli, never write block JSON from scratch.** Choose the right command per section:

**Option A — Layout-based** (recommended for general structural patterns): use when the section fits one of the 8 structural layouts (`full-width`, `two-column`, `three-column`, `sidebar-left`, `sidebar-right`, `hero-image-left`, `hero-image-right`, `landing-page`). Produces valid block markup immediately; remaining work is content + CSS only.

```bash
cd demo/web/app/themes/elayne && composer layout:create -- \
  --title="..." --slug="elayne/..." \
  --layout=<matching-layout> --category="elayne/..." --output-dir=patterns/
```

**Option B — WooCommerce template** (for WooCommerce-specific block types: product-collection, filters, cart, checkout, ticker):

```bash
cd demo/web/app/themes/elayne && composer pattern:create -- \
  --template=<template> --title="..." --slug="elayne/..." \
  --category="elayne/..." --output-dir=patterns/ \
  --with-style --style-dir=assets/styles/block-styles/
```

Template → section mapping: `hero-cover` → hero, `feature-grid-3col` → services, `two-column-text-image` → why-us, `stats-bar-fullwidth` → stats, `testimonials-grid` → testimonials, `cta-fullwidth` → cta, `blank` → contact.

**Option C — Shell-only** (editor-first, for complex or non-standard sections with no matching layout or template):

```bash
cd demo/web/app/themes/elayne && composer pattern:create -- \
  --template=woo-hero --shell-only --title="..." --slug="elayne/..." \
  --category="elayne/..." --output-dir=patterns/ \
  --with-style --style-dir=assets/styles/block-styles/
```

Build in the WP block editor → Copy all blocks → paste over the `<!-- PASTE BLOCKS HERE -->` marker.

---

After scaffolding, customise content only — do not restructure the block JSON shape. Read validation-guard snippets from `vendor/imagewize/pt-cli/snippets/valid-*.txt` and `responsive-grid-min-width.txt` before touching cover, columns, button, or heading blocks.

**Critical: always complete Phase 2.5 (Component Prep) before writing any PHP patterns.** This phase maps font sizes to presets, sources SVGs, audits unicode characters, and flags complex CSS — preventing the multi-pass fix cycles that come from direct HTML → pattern conversion.

## Border Radius Presets (WP 6.9+)

Use `var:preset|border-radius|{slug}` — never hardcode px values.

| Slug | Value | Used for |
|---|---|---|
| `sm` | 0.625rem | Buttons, small elements |
| `md` | 0.75rem | Date boxes, inner card elements |
| `lg` | 1rem | Card outer containers |
| `pill` | 999px | Badges, tags, pill labels |

Border width: no preset — always hardcode `1px`.

> Full details: `docs/elayne/BORDER-PRESETS.md`

## Grid Layouts

- **ALWAYS use `minimumColumnWidth` grid** for 3+ column layouts (true 3→2→1 responsive)
- **NEVER use `wp:columns`** for 3-column patterns — skips 2-column tablet breakpoint
- Values: `18rem` simple cards, `19rem` complex cards, `20rem` profiles, `28-29rem` text-heavy

```html
<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
```

> Full details: `docs/elayne/GRID-LAYOUT-STANDARDS.md`

## CSS: Block Styles vs. style.css

**ALWAYS prefer block-style CSS files over `style.css` for pattern-specific styles.**

`style.css` is enqueued globally on every page. `assets/styles/block-styles/*.css` files are registered via `wp_enqueue_block_style()` and load **only on pages where the block style is used** — zero cost on all other pages.

**When to use `assets/styles/block-styles/{name}.css`:**
- Any style tied to a specific registered block style (`is-style-{name}` class)
- Pattern-specific component styles (e.g. CTA pill layout, icon sizing inside a card)

**When `style.css` is acceptable:**
- Styles that apply to elements present on *every* page (e.g. header, global utilities, skip links)
- One-line fixes to existing `style.css` rules (avoids splitting related rules across files)

**How to add a new block style:**
1. Create `assets/styles/block-styles/{name}.css` — scope all selectors to `.wp-block-TYPE.is-style-{name}`
2. Register in `functions.php` inside `elayne_register_plumbing_block_styles()` (or the relevant register function)
3. In the pattern, set `"className":"is-style-{name}"` on the block and add the class to the `<div>`

```php
// functions.php — add to $styles array
'core/group' => array(
    'my-new-style' => __( 'My New Style', 'elayne' ),
),
```

## Spacing & BlockGap

- **NO spacer blocks** — use `blockGap` on parent containers
- **NO manual margins** on headings/paragraphs — let parent `blockGap` control spacing
- **Horizontal padding**: always on outer container — `left/right: var:preset|spacing|medium`
- Scale: `small` (tight grouping) → `medium` → `large` → `x-large` (major section breaks)

> Full details: `docs/elayne/DESIGN-REFACTOR.md`

## Translation Readiness (CRITICAL — WP.org)

Every user-facing string MUST be wrapped. Unwrapped strings cause WP.org rejection.

| Content type | Function |
|---|---|
| Plain text in HTML tags | `<?php esc_html_e( 'Text', 'elayne' ); ?>` |
| Text with HTML (`<strong>`, `<br>`, `<a>`) | `<?php echo wp_kses_post( __( 'Text', 'elayne' ) ); ?>` |
| HTML attributes (alt, aria-label, title) | `<?php echo esc_attr__( 'Text', 'elayne' ); ?>` |

**Wrap**: headings, paragraphs, buttons, stat numbers, labels, badge text, alt attributes (non-empty)
**Don't wrap**: empty `alt=""`, block comment JSON, `get_template_directory_uri()` expressions

> ⚠️ **Unicode in PHP strings**: PHP single-quoted strings do NOT process `\u` escape sequences — `'\u2013'` outputs the literal text `\u2013`, not `–`. Always use the actual UTF-8 character (e.g. `'Mon–Fri · Sat'`) or a double-quoted string with `"\u{2013}"`. Never copy `\uXXXX` escapes from JavaScript into PHP single-quoted strings.

## Pattern Validation (three-pass)

Always run all three validators. Use Pass 1 first — it fixes structural issues that regex cannot catch.

**Pass 1 — Gutenberg structural validator** (requires the Trellis VM; database lives there):

```bash
# Dry run
cd ~/code/imagewize.com/trellis && trellis vm shell \
  --workdir /srv/www/demo.imagewize.com/current -- \
  wp pattern validate web/app/themes/elayne/patterns/my-pattern.php

# Auto-fix structural issues (unbalanced delimiters, malformed JSON, bad nesting)
cd ~/code/imagewize.com/trellis && trellis vm shell \
  --workdir /srv/www/demo.imagewize.com/current -- \
  wp pattern validate web/app/themes/elayne/patterns/my-pattern.php --fix

# All patterns
cd ~/code/imagewize.com/trellis && trellis vm shell \
  --workdir /srv/www/demo.imagewize.com/current -- \
  wp pattern validate web/app/themes/elayne/patterns/ --fix
```

**Pass 2 — pt-cli compliance checker** (run on the host from the theme directory; no WordPress required):

```bash
# Check all patterns
composer check

# Or directly via pt-cli
pt-cli check patterns/ --theme=elayne

# Check specific file
pt-cli check patterns/my-pattern.php --theme=elayne

# With autofix
pt-cli check patterns/ --theme=elayne --autofix
```

**Pass 3 — HTML template compliance checker** (run on the host; checks `templates/` and `parts/` .html files):

Catches client-side block validation drift that PHP compliance cannot detect: WooCommerce filter blocks missing `<div>` wrappers, `product-filters` missing CSS custom properties, `taxQuery:{}` vs `[]`, missing `"theme"` on `wp:template-part`, and unbalanced HTML tags.

```bash
# Check templates directory
pt-cli check:templates demo/web/app/themes/elayne/templates/ --theme=elayne

# Check parts directory
pt-cli check:templates demo/web/app/themes/elayne/parts/ --theme=elayne

# With autofix (repairs taxQuery and template-part theme automatically)
pt-cli check:templates demo/web/app/themes/elayne/templates/ --theme=elayne --autofix

# Check a single template file
pt-cli check:templates demo/web/app/themes/elayne/templates/archive-product.html --theme=elayne
```

> Pass 1 requires the Trellis VM (`cd trellis && trellis vm shell`) because WordPress needs a database connection — the VM runs the database. Files sync automatically via Lima so patterns edited on the host are immediately available in the VM.

CI runs Pass 2 automatically on every PR via `.github/workflows/pattern-compliance.yml`.

## Version Management

Update all three on every release:
1. `style.css` — `Version: X.X.X`
2. `readme.txt` — `Stable tag: X.X.X`
3. `CHANGELOG.md` — add new version section

## WordPress Template Hierarchy

| Template | Pattern | Purpose |
|---|---|---|
| `404.html` | `elayne/template-page-404` | 404 error page |
| `archive.html` | `elayne/template-page-archive` | Archives |
| `home.html` | `elayne/template-index-grid` | Blog index / static homepage |
| `index.html` | `elayne/template-index-grid` | Fallback |
| `page.html` | `elayne/template-page` | Default page |
| `page-no-title.html` | `elayne/template-page-no-title` | Page without title |
| `page-with-sidebar.html` | `elayne/template-page-right-sidebar` | Right sidebar |
| `search.html` | `elayne/template-page-search` | Search results |
| `single.html` | `elayne/template-post-centered` | Single post |

⚠️ `front-page.html` has been removed — it caused override issues on other multisite subsites. Homepage is assigned via the WordPress page editor. A `home.html` template (Ollie-style) may be added in future.

Each template references one pattern: `<!-- wp:pattern {"slug":"elayne/pattern-name"} /-->`.
