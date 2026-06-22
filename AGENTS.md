# Repository Guidelines

Elayne is a premium WordPress block theme (FSE/block theme, WP 6.6+, PHP 8.0+, no build tools — direct PHP, HTML, and vanilla JavaScript). `theme.json` is the single source of truth for styles, colors, typography, and spacing.

## Efficiency
- Avoid reading entire files when only a specific section is needed.
- Use `Grep` to locate relevant code before reading; prefer targeted reads with `offset`/`limit` over full file reads.

## Project Structure & Module Organization
- Root is a WordPress block theme; primary code lives alongside `style.css` (metadata only) and `theme.json` (global styles).
- Block patterns live in `patterns/` (PHP files registering block markup); keep slugs/descriptions aligned to filenames.
- Template parts sit in `parts/` (header/footer) and full templates in `templates/` and `index.php`.
- Shared assets live under `assets/` (`fonts/` — Mona Sans, Open Sans, Bitter; `styles/` for pattern-specific CSS) and translations in `languages/` (text domain `elayne`).
- Reusable PHP helpers reside in `functions.php` and `inc/` (e.g. `inc/block-extensions.php`); avoid putting logic in template files.
- **`.distignore` file**: Present in theme directory but ignored by git (see `demo/.gitignore`). Required for WordPress.org distribution to exclude dev files from the ZIP package. Synced from standalone Elayne repo (`~/code/elayne/.distignore`).

## Build, Test, and Development Commands
- No JS build pipeline is required; theme assets are committed. Activate by placing the folder in `wp-content/themes/elayne/` and enabling it in WP Admin.
- **IMPORTANT**: All WP-CLI commands must be run from Trellis VM, NOT from the local machine.
- For CLI activation inside a Bedrock/Trellis install: `wp theme activate elayne --path=web/wp`.
- Regenerate translations when strings change: `wp i18n make-pot . languages/elayne.pot`.
- Flush caches after template or pattern edits if using object caching: `wp cache flush`.
- **Commit hygiene**: Demo theme commits must be attribution-free (no Claude/AI/Mistral/Vibe footers).

### Local Development with Trellis VM
- Uses **Trellis VM** (Lima-based, NOT Vagrant).
- **Protocol**: Uses **HTTP** (not HTTPS) — access via `http://demo.imagewize.test/` (NOT `https://`).
- **Access VM**: `cd ~/code/imagewize.com/trellis && trellis vm shell`.
- **File Sync**: Automatic, real-time sync between host (`~/code/imagewize.com/demo/`) and VM (`/srv/www/demo.imagewize.com/`) via Lima — no manual rsync needed.
- **Common issue**: Changes not appearing = WordPress cache, NOT file sync. Solution: `wp cache flush --path=web/wp`.

### WP-CLI Commands (Must Run from Trellis VM)
```bash
# Interactive VM shell
cd ~/code/imagewize.com/trellis
trellis vm shell
cd /srv/www/demo.imagewize.com/current
wp cache flush --path=web/wp

# Single command from host
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp cache flush --path=web/wp

# Multisite commands (run for all sites)
wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp
```

### WordPress Development Mode & Caching
- `WP_DEVELOPMENT_MODE=theme` is set in `config/environments/development.php` — bypasses theme.json/style transients on every request. Disable in production for performance.
- **mu-plugin active:** `demo/web/app/mu-plugins/fse-dev-mode.php` hooks `pre_get_block_template` and returns the filesystem `WP_Block_Template` via `get_block_file_template()` when `WP_ENV=development`. This bypasses `wp_template`/`wp_template_part` DB overrides — template and template-part file edits appear on plain refresh with no WP-CLI required. Templates with no matching filesystem file (WooCommerce archives, plugin templates) fall through to the DB normally.
- **With both active:** template/part edits → plain refresh; theme.json edits → hard refresh (Cmd+Shift+R) in the Site Editor to update React state. `wp cache flush` is rarely needed for normal theme development.
- **Style variation cache:** If `theme.json`/`styles/*.json` changes don't appear, switch style variations in the Site Editor (`Styles → Browse styles`) — switch away and back to force a recompile. Nuclear option: delete the `wp_global_styles` post type and flush cache.

### Rebuild Demo Subsites from Patterns
After modifying pattern PHP files you **must** rebuild demo pages before testing — the rebuild script renders each pattern in the live WP context and overwrites `post_content`, identical to a fresh block-editor insert. Run from the VM:
```bash
# Single subsite (dev). Subsites: main, legal, kafe, nail-salon, plumbing, store, spa
wp --path=web/wp --url=demo.imagewize.test/kafe/ eval-file scripts/rebuild-demo-subsite.php kafe

# Dry run first
WP_REBUILD_DRY_RUN=1 wp --path=web/wp --url=demo.imagewize.test/kafe/ eval-file scripts/rebuild-demo-subsite.php kafe
```
**Workflow:** modify pattern → rebuild → flush cache → validate (sentinel) → verify visually (Playwright).

### Pattern URL Behavior (Environment Moves)
`get_template_directory_uri()` is evaluated when a pattern is inserted; the resulting URL is hardcoded into `post_content`. After moving content between environments, run `wp search-replace` to swap URLs before going live:
```bash
ssh web@demo.imagewize.com "cd /srv/www/demo.imagewize.com/current && \
  wp search-replace 'http://demo.imagewize.test' 'https://demo.imagewize.com' \
  --all-tables --precise --path=web/wp && wp cache flush --path=web/wp"
```

## WooCommerce Store Subsite
WooCommerce runs on a **subsite mounted at `/store/`**. All shop URLs are prefixed:

| Page | URL |
|---|---|
| Shop (product catalog) | `http://demo.imagewize.test/store/shop/` |
| Product category | `http://demo.imagewize.test/store/product-category/{slug}/` |
| Single product | `http://demo.imagewize.test/store/product/{slug}/` |
| WP Admin | `http://demo.imagewize.test/store/wp-admin/` |

**Template hierarchy** (block theme, `templates/`): `archive-product.html` → shop + fallback; `taxonomy-product_cat.html` → category archives; `taxonomy-product_tag.html` → tag archives; `single-product.html` → single product.

**Filter blocks** (WooCommerce 10.7+):
- `woocommerce/product-filter-taxonomy` with `{"taxonomy":"product_cat"}` for categories — `product-filter-category` does NOT exist.
- `woocommerce/product-filter-attribute` — omit `attributeId` for distributable templates (renders an unconfigured placeholder the client configures via Site Editor — Ollie pattern). Include `attributeId` only for demo-specific templates. Verify IDs via `wp wc product_attribute list --path=web/wp --user=1`.
- `woocommerce/product-filter-price` — price range slider.

**Demo store attribute IDs** (May 2026 — do NOT hardcode in distributable templates): `1` = Leather Colour (`pa_leather-colour`), `2` = Style (`pa_style`), `3` = Features (`pa_features`).

## Design System
All design tokens live in `theme.json` — never hardcode colors, sizes, or spacing in patterns.

**Color palette**: Brand — `primary` (teal), `primary-accent`, `primary-dark`; Contrast — `main` (dark gray), `main-accent` (medium gray); Base — `base` (white), `secondary` (light gray), `tertiary` (very light gray); Borders — `border-light`, `border-dark`.

**Typography**: Mona Sans (headings), Open Sans (body), Bitter (optional serif). Font-size values (critical — prevents oversized headings):

| Slug | Max value | Use for |
|---|---|---|
| `x-small` | 0.95rem | Labels, badges, captions |
| `small` | 1.05rem | Small body, buttons |
| `base` | 1.165rem | Body text |
| `medium` | 1.65rem | Lead text, stat labels |
| `large` | 2.75rem | H1 on dark hero, stat numbers |
| `x-large` | 3.5rem | Display H1 only |
| `xx-large` | 4.39rem | Rarely used — very large display only |

**Spacing scale** (all `clamp()` responsive): `2-x-small`, `x-small`, `small`, `medium`, `large`, `x-large`, `xx-large`, `xxx-large` — ⚠️ `xx-small` does NOT exist; use `2-x-small` or `x-small`. Values (critical — prevents oversized pills/badges):

| Slug | Value |
|---|---|
| `2-x-small` | clamp(0.25rem → 0.5rem) ~4–8px |
| `x-small` | clamp(0.375rem → 0.75rem) ~6–12px |
| `small` | clamp(0.5rem → 1rem) ~8–16px |
| `medium` | clamp(1.5rem → 2rem) ~24–32px ← LARGE, not "medium" |
| `large` | clamp(2rem → 3rem) ~32–48px |
| `x-large` | clamp(3rem → 5rem) ~48–80px |

**Pill/badge padding rule:** Always `x-small` (vertical) + `small` (horizontal). Never `medium` — that is ~28px per side and makes any pill grotesquely wide.

**Pill/badge shrink-wrap rule (CRITICAL — prevents full-column-width pills):** WordPress `is-layout-flow` columns are internally `flex-direction: column` flex containers. Any child is a flex item and gets its `display` blockified — `inline-block`/`inline-flex` both compute to `block` regardless of inline styles or CSS. The default `align-items: normal` acts as `stretch`, making every child span the full column width. To shrink-wrap a pill/badge inside a `wp:column`, add `align-self: flex-start` and `width: fit-content` to its **CSS rule** (not inline). `is-style-status-pill` works in the editorial header only because that header is a `flex-direction: row` container (cross-axis vertical → width is content-driven); inside a `wp:column` it would need the same fix.

## Coding Style & Naming Conventions
- PHP: follow WordPress coding standards (tab indent, snake_case functions); keep logic minimal and filter-based. Use text domain `elayne` in translatable strings.
- Patterns: name files with kebab-case slugs (e.g., `hero-two-tone.php`) and match the `title`/`categories` to existing taxonomy.
- CSS: favor block-level styles under `assets/styles/`; keep selectors scoped to block classes to avoid global leakage.
- Templates/parts: prefer semantic HTML and block markup; avoid inline styles when theme.json can express the setting.

### PHP Code Quality (functions.php)
Always run phpcs/phpcbf **from the theme directory** so `phpcs.xml` (WordPress standards) is picked up automatically. Wrong working directory silently applies a different standard and can introduce hundreds of new violations.
```bash
cd demo/web/app/themes/elayne && vendor/bin/phpcs functions.php   # check
cd demo/web/app/themes/elayne && vendor/bin/phpcbf functions.php  # auto-fix, then re-check
```
Common WordPress-standard traps: use `array()` — **never** `[]` short syntax; indent with **tabs**, not spaces; multi-line calls put opening `(` last on the line, each arg on its own line, closing `)` on its own line; array values align with the longest key.

### Pattern Development Guidelines
- **NEVER use hardcoded media IDs** in `wp:image` blocks (e.g., `"id":59`).
- **NEVER use external URLs** (Unsplash, CDNs, etc.) — all images must be local files.
- Always use direct file paths: `<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/filename.webp`.
- **GPL compatibility**: All pattern images must be GPL-compatible or public domain (CC0). Document sources in `readme.txt` (Copyright section) — WordPress.org requirement. Preferred sources: WordPress Openverse (filter "Use commercially" + "Modify or adapt") or custom photography. ⚠️ Pexels License is NOT accepted by WP.org.
- **Image optimization**: WebP format, file sizes <200KB, appropriate dimensions; all stored in `patterns/images/`.
- Use semantic color/spacing variables (`var:preset|color|primary`); slugs follow `elayne/pattern-name`.

#### Use Native WordPress Blocks (CRITICAL)
- **NEVER use `wp:html` blocks** for content that can be created with native blocks (`wp:list`, `wp:separator`, `wp:group`, `wp:columns`, etc.).
- Custom styling: add CSS classes/styles to block-style CSS (or `style.css`) rather than inline HTML.
- WRONG: `<!-- wp:html --><div class="custom-list">...</div><!-- /wp:html -->`. CORRECT: `<!-- wp:list {"className":"is-style-checkmark-list"} -->` with CSS. Use `wp:separator` with `is-style-dots` for dotted lines.
- Benefits: editor compatibility, theme.json integration, pattern reusability, accessibility.

#### Block Comment Attribute Structure (CRITICAL)
- Root-level attributes (`backgroundColor`, `layout`, `align`) must NOT be nested inside the `style` object. WRONG: `"style":{...,"backgroundColor":"base"}`. CORRECT: `"style":{...},"backgroundColor":"base"`. Mismatches cause "Block validation failed" (console: "Content generated by `save` function" vs "Content retrieved from post body").
- **Whitespace between blocks**: NEVER add tabs, newlines, or spaces between an opening/closing `<div>` and the adjacent `<!-- wp:... -->` / `<!-- /wp:... -->` comment — block serialization is whitespace-strict. Write markup compact/inline as the editor outputs it.
- **HTML comments**: NEVER add `<!-- comment -->` between `<div>` tags and block comments — causes validation failure.
- **Block comment balance**: every `<!-- wp:group -->` needs a matching `<!-- /wp:group -->`; extra/missing wrappers force Gutenberg to wrap the tail in a Classic block.
- **Button `fontSize`**: `wp:button` does NOT support root-level `fontSize` — use `"style":{"typography":{"fontSize":"var:preset|font-size|base"}}`. Root-level `"fontSize":"base"` on buttons causes validation errors.
- **Button border-radius**: setting `border.radius` on `wp:button` without `border.color`/`border.width` makes the JS serializer inject `border-top-style:solid` → validation error. Always pair: `"border":{"radius":"var:preset|border-radius|sm","width":"0px"}`.
- **Image block — theme SVGs**: NEVER add `width`/`height` to `<img>` inside `wp:image` for theme-bundled SVGs — no media ID means WP can't validate dimensions → validation error. Use `<img src="..." alt=""/>` only. When width/height ARE set (real media), `is-resized` class is required and `align` comes after width/height in JSON.
- **CSS vars in block JSON**: use `"color":"var:preset|color|border-light"`, NEVER `"var(--wp--preset--color--border-light)"` — the serializer Unicode-escapes `--`, causing a content mismatch. CSS vars inside HTML `style="..."` attributes are fine.
- **Ampersand / double-dash in block JSON**: never use `&` in attribute values (serializer escapes to `&amp;` — use `and`/`+`); never use `--` in `className` BEM modifiers (escaped — use a single dash, and update CSS selectors).
- **metadata.name only on the root block**: `"metadata":{"name":...,"patternName":...}` belongs only on the OUTERMOST block of a pattern file. On inner/nested blocks it makes them appear as named patterns and confuses pattern tracking.

#### Block HTML Validation — fontSize/fontFamily & blockGap (CRITICAL)
WordPress validates blocks by comparing the `save()` output against stored HTML; mismatches throw `Block validation failed`.

**1. ROOT-level `fontSize`/`fontFamily` → CSS classes, NOT inline styles.**

| Block JSON | Required HTML class | Wrong HTML (error) |
|---|---|---|
| `"fontSize":"x-large"` | `has-x-large-font-size` | `style="font-size:var(--wp--preset--font-size--x-large)"` |
| `"fontFamily":"var:preset\|font-family\|heading"` | `has-var-preset-font-family-heading-font-family` | `style="font-family:var(...)"` |

(This differs from `"style":{"typography":{"fontSize":"var:preset|font-size|large"}}`, which intentionally produces an inline style.)

**2. blockGap inline behavior (WP 6.6+).** WP stopped outputting inline `gap` for constrained/default layouts (handled by layout CSS). 

| Block | Layout | Gap requirement |
|---|---|---|
| `core/group` | `flex` | **Must have** `style="gap:..."` |
| `core/group` | `constrained`/`default` | **Must NOT have** inline `gap` |
| `core/columns` | any | **Must NEVER have** inline `gap` |

More broadly: never emit `gap:`, spacing `margin-top/bottom`, or spacing `padding` as inline `style` on a `<div>` when a parent `blockGap` or flex/grid layout already controls it — WP applies gap via runtime `wp-container-*` classes, so inline `gap:` is dead markup sentinel strips. Set spacing on the PARENT via `blockGap`.

#### Responsive Grid Layouts (CRITICAL)
- **ALWAYS use grid with `minimumColumnWidth`** for 3+ column patterns (true 3→2→1 responsive). **NEVER use `wp:columns`** for 3-column grids (goes 3→3-cramped→1, skips tablet) or fixed `columnCount`.
- Correct: `{"layout":{"type":"grid","minimumColumnWidth":"20rem"}}`. Widths: `elayne/card-simple` `18rem`, `elayne/card-extended` `19rem`, `elayne/card-profiles` `20rem`, text-heavy `28-29rem`.
- **Centering**: keep the outer full-width group as `layout: default`, then wrap the grid in an inner `alignwide` group. See `pricing-comparison.php`. Full details: `docs/elayne/GRID-LAYOUT-STANDARDS.md`.

#### Full-Width Pattern Layout & Spacing (CRITICAL)
- **NEVER use constrained layout on an outer `alignfull` group** — causes horizontal gaps/overflow. Outer `alignfull` group ALWAYS `"layout":{"type":"default"}`; inner content groups use `"constrained"` with `contentSize`. See `hero-two-tone.php`.
- **Margin reset** on any background pattern: `"margin":{"top":"0","bottom":"0"}` (no units) — WP core adds `margin-block-start` between constrained-layout blocks, causing gaps between adjacent differently-colored sections. Use inline styles (Ollie approach), not global CSS overrides.
- **Page template** `post-content` block must use `"layout":{"type":"constrained"}` (NOT `default`) — otherwise `alignfull` patterns can't break out.

#### Spacing & BlockGap
- **NO spacer blocks** — use `blockGap` on parent containers. **NO manual margins** on headings/paragraphs — let parent `blockGap` control spacing.
- **Horizontal padding** always on the outer container — `left/right: var:preset|spacing|medium`.
- Scale: `small` (tight grouping) → `medium` → `large` → `x-large` (major section breaks). Full details: `docs/elayne/DESIGN-REFACTOR.md`.

#### Border Radius Presets (WP 6.9+)
Use `var:preset|border-radius|{slug}` — never hardcode px, and never the non-existent `var:preset|border|radius`. Slugs (from `theme.json → settings.border.radiusSizes`): `sm` 0.625rem (buttons), `md` 0.75rem (inner card elements), `lg` 1rem (card containers), `pill` 999px (badges/tags). Border width has no preset — always hardcode `1px`. Full details: `docs/elayne/BORDER-PRESETS.md`.

#### Translation Readiness (CRITICAL — WP.org)
Every user-facing string MUST be wrapped — unwrapped strings cause WP.org rejection.

| Content type | Function |
|---|---|
| Plain text in HTML tags | `<?php esc_html_e( 'Text', 'elayne' ); ?>` |
| Text with inline HTML (`<strong>`, `<br>`, `<a>`) | `<?php echo wp_kses_post( __( 'Text', 'elayne' ) ); ?>` |
| HTML attributes (alt, title, aria-label) | `<?php echo esc_attr__( 'Text', 'elayne' ); ?>` |

**Wrap**: headings, paragraphs, list items, button labels, stat numbers, badge/CTA text, names, job titles, non-empty `alt`. **Don't wrap**: empty `alt=""`, block comment JSON, `get_template_directory_uri()` expressions, real emails (use `example@example.com`). Quick check: `grep -n ">\s*[A-Z][^<]*\s*<" patterns/your-pattern.php`.
> ⚠️ **Unicode in PHP**: single-quoted strings do NOT process `\u` escapes — `'–'` outputs literal `–`. Use the actual UTF-8 character (`'Mon–Fri · Sat'`) or a double-quoted string (`"\u{2013}"`). Never copy `\uXXXX` from JS into PHP single quotes.

#### Custom Block Types
NEVER use `register_block_type()` in a theme — WP.org plugin-territory violation. Use the `render_block` filter on `core/group` blocks with a specific `className` (same pattern as the ticker).

### WooCommerce Patterns
- **Three-tier strategy**: Tier 1 = use WooCommerce plugin patterns (`demo/web/app/plugins/woocommerce/patterns/*.php`) **as-is** — EXEMPT from Elayne's semantic-variable rules and compliance checks; Tier 2 = style with theme CSS/`theme.json`; Tier 3 = custom patterns in `patterns/woocommerce/` only if Tiers 1-2 fail.
- **Naming:** `woo-` prefix (e.g., `woo-cart.php`). **Categories:** only registered `elayne/woocommerce` — NOT `elayne/cart`/`elayne/checkout`. **Inserter:** set `Inserter: false` for page-level patterns (cart/checkout).
- **Colors:** registered theme.json palette only (`primary`, `main`, `base`, `tertiary`, `primary-accent`) — NEVER `charcoal`/`cream`.
- **Single product:** use product blocks directly — NEVER wrap in `woocommerce/product-template`; in templates use `post-title` with `__woocommerceNamespace`, not `woocommerce/product-title`.
- **Native WC blocks:** NEVER add `__woocommerceNamespace` to `product-image`, `product-price`, `product-rating`, `product-button`, `product-sale-badge`.
- **Archive/`product-collection`:** handles its own pagination — NEVER use standalone `query-pagination`; ALWAYS include full `"query":{...}` metadata and the `<div class="wp-block-woocommerce-product-collection">` wrapper; use only `displayLayout` (never both `layout` and `displayLayout`).
- **Buttons:** `className` before `style` (root-level attributes first). **Full-width:** outer `alignfull` group must use `"layout":{"type":"default"}`.

> Full pattern details with code examples: `docs/elayne/PATTERN-GUIDELINES.md`.

## Search/Replace Best Practices
Search/replace requires byte-for-byte matching — a single comma, brace, or space difference fails.
- **Use unique, context-aware patterns**: include surrounding code, block slugs, function/class names, or full `theme.json` property paths. Avoid generic terms (`"color"`, `"padding"`).
- **Pre-flight (mandatory)**: `grep -Fn 'exact text' patterns/file.php` first — if grep can't find it, the search text is wrong. For long block-comment lines, grep a short unique substring, then read the line to verify brace counts. Reveal hidden chars with `cat -A`. Commit before large replacements for easy rollback.
- **Most common failure — brace count**: `"margin":{"top":"0"}}` vs `}}}` — deeply nested JSON has many closing braces; one missing/extra `}` gives a ~99% fuzzy match but exact-match failure. Count: `}` closes the value object, the parent (`spacing`), the grandparent (`style`), then `,` before the next root attribute.

## Pattern Validation (four-pass)
Run all four. Pass 1 fixes structural issues regex cannot catch; Pass 3 (sentinel) catches JS `save()` mismatches Pass 1 cannot see.

> **Pass 1 vs Pass 3:** `wp pattern validate` (Pass 1) uses PHP `parse_blocks()` + `serialize_blocks()` — it does NOT run Gutenberg's JS `save()`. Issues only the JS serializer produces (`border-top-style:solid` injection, `has-text-color` before `has-{preset}-font-size` ordering, button link class ordering, `backgroundColor:"base"` being dropped) pass Pass 1 but fail in the browser. Pass 3 catches all of these.

**Pass 1 — Gutenberg structural validator** (requires Trellis VM — database lives there):
```bash
cd ~/code/imagewize.com/trellis && trellis vm shell \
  --workdir /srv/www/demo.imagewize.com/current -- \
  wp pattern validate web/app/themes/elayne/patterns/my-pattern.php          # dry run
# add --fix to repair; pass a directory + --fix --log to write audit logs to docs/pattern-logs/YYYY-MM-DD/
```

**Pass 2 — pt-cli compliance checker** (host, from theme dir; no WordPress needed). CI runs this on every PR via `.github/workflows/pattern-compliance.yml`:
```bash
cd ~/code/imagewize.com/demo/web/app/themes/elayne
composer check                                  # all patterns (or: pt-cli check patterns/ --theme=elayne)
pt-cli check patterns/my-pattern.php --theme=elayne
pt-cli check patterns/ --theme=elayne --autofix
```
The legacy PHP checker still works from the monorepo root: `php scripts/elayne/pattern-check/class-patterncompliancechecker.php demo/web/app/themes/elayne/patterns/*.php`.

**Pass 3 — sentinel runtime validator** (theme dir; launches a real browser, logs into WP admin, inserts the pattern into a draft, saves, reads back JS validation errors and content mismatches):
```bash
cd ~/code/imagewize.com/demo/web/app/themes/elayne
npm run validate:file -- patterns/my-pattern.php   # single
npm run validate                                   # all
npm run validate:woo                               # WooCommerce
# or: npx sentinel patterns/  /  npx sentinel --url=http://demo.imagewize.test/store patterns/woocommerce/
```

**Pass 4 — HTML template compliance** (host; checks `templates/` and `parts/` .html files). Catches WooCommerce filter blocks missing `<div>` wrappers, `product-filters` missing CSS custom props, `taxQuery:{}` (must be `[]`), missing `"theme"` on `wp:template-part`, unbalanced tags:
```bash
pt-cli check:templates demo/web/app/themes/elayne/templates/ --theme=elayne
pt-cli check:templates demo/web/app/themes/elayne/parts/ --theme=elayne --autofix
```

## Visual Testing (Playwright)
Repo Playwright script at `.playwright/scripts/test.js` (run from repo root) — use the repo script, NOT MCP/browser tools.
```bash
node .playwright/scripts/test.js <url> [action] [selector] [options]
# screenshot [name] | html | css <selector> | eval <fn> | check <blockName>
# Viewports: --mobile (390×844) | --tablet (768×1024) | --desktop (1920×1080, default) | --viewport=WxH
```
Tip: rebuild → sentinel (Pass 3) → Playwright. Sentinel validates block structure; Playwright validates visual rendering.

## Testing Guidelines
- Manual verification is primary: activate the theme, add each pattern to a page, confirm layout/spacing matches design, and check the editor shows no block validation errors.
- Run `wp i18n make-pot` if translations are touched to confirm the POT file updates cleanly.

## Key Components
- **Block extensions** (vanilla JS, no build step — uses `wp.hooks`/`wp.components`/`wp.blockEditor`): `assets/js/block-extensions/navigation.js` ("Clickable Parents" + "Improved Chevrons") and `post-excerpt.js` ("Link to Post" + "Underline Link"), with PHP `render_block` handlers in `inc/block-extensions.php`.
- **Custom image sizes** (`functions.php`): `elayne-portrait-small` (380×570), `elayne-portrait-medium` (380×507), `elayne-portrait-large` (380×475), `elayne-single-hero` (700×400).
- **Core block patterns removed** in `functions.php` — only Elayne patterns are available. `style.css` is enqueued for both frontend and editor (WYSIWYG consistency).

## WordPress Template Hierarchy
Each HTML template references exactly one pattern via `<!-- wp:pattern {"slug":"elayne/pattern-name"} /-->`.

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

⚠️ `front-page.html` has been removed (it caused override issues on multisite subsites); the homepage is assigned via the WordPress page editor. Template parts: `parts/header.html`, `parts/footer.html`. See `docs/elayne/PAGE-TEMPLATES.md`.

## Versioning Checklist
Update together on every release: `style.css` header `Version:`, `readme.txt` `Stable tag:` + changelog section, and `CHANGELOG.md` release entry.
- Match `readme.txt` changelog to Moiraine: `== Changelog ==`, entries like `= 1.0.0-beta.3 - 12/10/25 =` with `NEW/ADDED/CHANGED/TECHNICAL` prefixes, concise sentences ending in periods.
- Keep `CHANGELOG.md` aligned to Keep a Changelog (`### Added - ...`, `### Changed - ...`).
- When updating `CHANGELOG.md`/`readme.txt`, new entries are ADDITIONS — do NOT describe them as "Changed" unless the file already existed on `main`.
- Review with `git status`/`git diff`; compare against `main` (`git diff main...HEAD`) before writing release notes.

## Commit & Pull Request Guidelines
- Short, Title-Case messages focused on a single change (e.g., `Hero Pattern Update`).
- **Atomic commits**: `git add` files individually or in small logical groups, each with a specific message — never stage multiple unrelated files together.
- **ALL commits**: attribution-free — no Claude/AI/Mistral/Vibe footers.
- PRs state purpose, affected paths (patterns/templates/assets), and manual test notes (browser/viewport + steps); include screenshots/recordings for visual changes.
- Do not commit secrets or environment config; only theme assets/code belong here.

## Server Access & Deployment
- **SSH as web user** (recommended for WP-CLI): `ssh web@demo.imagewize.com`; root for server management.
- **Server paths (Bedrock):** current release `/srv/www/demo.imagewize.com/current/`; theme `.../current/web/app/themes/elayne/`; uploads `/srv/www/demo.imagewize.com/shared/uploads/`; logs `/srv/www/demo.imagewize.com/logs/`.
- Debug log: `trellis vm shell -- tail -50 /srv/www/demo.imagewize.com/logs/debug.log`.
```bash
ssh web@demo.imagewize.com
cd /srv/www/demo.imagewize.com/current
wp site list --path=web/wp                                                        # multisite status
wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp
tail -f /srv/www/demo.imagewize.com/logs/error.log
```
- Deployment managed via Trellis from the repository root (see main `CLAUDE.md`); demo uses multisite.

## Security & Configuration Tips
- Do not commit `.env`, uploads, build artifacts, or `.vibe/` directories; only theme code and assets belong here.
- When working in Trellis/Bedrock, always pass `--path=web/wp` to WP-CLI to target the correct install.
- Keep licensed assets (fonts/images) documented; ensure redistribution rights (GPL-compatible/CC0) before adding new media.
