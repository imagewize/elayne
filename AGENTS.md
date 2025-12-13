# Repository Guidelines

## Project Structure & Module Organization
- Root is a WordPress block theme; primary code lives alongside `style.css` and `theme.json` for metadata and global styles.
- Block patterns live in `patterns/` (PHP files registering block markup); keep slugs/descriptions aligned to filenames.
- Template parts sit in `parts/` (header/footer) and full templates in `templates/` and `index.php`.
- Shared assets live under `assets/` (`fonts/`, `styles/` for pattern-specific CSS) and translations in `languages/`.
- Reusable PHP helpers reside in `functions.php` and `inc/`; avoid putting logic in template files.

## Build, Test, and Development Commands
- No JS build pipeline is required; theme assets are committed. Activate by placing the folder in `wp-content/themes/elayne/` and enabling it in WP Admin.
- **IMPORTANT**: All WP-CLI commands must be run from Trellis VM, NOT from local machine
- For CLI activation inside a Bedrock/Trellis install: `wp theme activate elayne --path=web/wp`.
- Regenerate translations when strings change: `wp i18n make-pot . languages/elayne.pot`.
- Flush caches after template or pattern edits if using object caching: `wp cache flush`.

### Local Development with Trellis VM
- Uses **Trellis VM** (Lima-based, NOT Vagrant)
- **Access VM**: `cd ~/code/imagewize.com/trellis && trellis vm shell`
- **File Sync**: Automatic, real-time sync between host (`~/code/imagewize.com/demo/`) and VM (`/srv/www/demo.imagewize.com/`)
- **No manual file copying needed** - edits on host immediately available in VM
- **Common issue**: Changes not appearing = WordPress cache, NOT file sync. Solution: `wp cache flush --path=web/wp`

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

### WordPress Development Mode
Enable in `config/environments/development.php`:
```php
Config::define('WP_DEVELOPMENT_MODE', 'theme');
```
**Benefits**: Bypasses theme.json/pattern caching for immediate changes

## Coding Style & Naming Conventions
- PHP: follow WordPress coding standards (4-space indent, snake_case functions); keep logic minimal and filter-based. Use text domain `elayne` in translatable strings.
- Patterns: name files with kebab-case slugs (e.g., `hero-two-tone.php`) and match the `title`/`categories` to existing taxonomy.
- CSS: favor block-level styles under `assets/styles/`; keep selectors scoped to block classes to avoid global leakage.
- Templates/parts: prefer semantic HTML and block markup; avoid inline styles when theme.json can express the setting.

### Pattern Development Guidelines
- **NEVER use hardcoded media IDs** in `wp:image` blocks (e.g., `"id":59`)
- Always use direct file paths: `<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/filename.webp`
- Hardcoded IDs cause performance issues: database queries for non-existent media, blinking/flashing effects, console errors
- All pattern images stored in `patterns/images/` directory
- Use semantic color/spacing variables: `var:preset|color|primary`
- Follow format: `elayne/pattern-name` for slugs

#### Use Native WordPress Blocks (CRITICAL)
- **NEVER use `wp:html` blocks** for content that can be created with native WordPress blocks
- **ALWAYS prefer native blocks**: Use `wp:list`, `wp:separator`, `wp:group`, `wp:columns`, etc.
- **Custom styling**: Add CSS classes and styles to `style.css` rather than inline HTML
- **Why?** Native blocks are editable in the block editor, support theme.json styling, and work with block patterns
- **Example - WRONG**: `<!-- wp:html --><div class="custom-list">...</div><!-- /wp:html -->`
- **Example - CORRECT**: `<!-- wp:list {"className":"is-style-checkmark-list"} -->` with CSS in `style.css`
- **Separator blocks**: Use `wp:separator` with `is-style-dots` class for dotted lines
- **Custom list styles**: Register CSS class like `is-style-checkmark-list` and apply to `wp:list` blocks
- **Benefits**: Editor compatibility, theme.json integration, pattern reusability, accessibility

#### Block Comment Attribute Structure (CRITICAL)
- **Block attributes must be correctly nested** in block comment JSON to avoid validation errors
- **Common mistake**: Nesting root-level attributes inside `style` object causes "Block validation failed" errors
- **Correct structure**: `backgroundColor`, `layout`, `align` are root-level attributes, NOT nested in `style`
- **Wrong**: `"style":{...,"backgroundColor":"base","layout":{...}}`
- **Correct**: `"style":{...},"backgroundColor":"base","layout":{...}`
- WordPress expects specific attribute placement based on block schema
- Validation errors appear in browser console: "Content generated by `save` function" vs "Content retrieved from post body"
- Always verify block comment JSON structure matches WordPress core block attribute schema

#### Responsive Grid Layouts (CRITICAL)
- **Use grid layout with `minimumColumnWidth`** for responsive multi-column patterns (3→2→1 columns)
- **NEVER use `wp:columns` for pricing/feature grids** - goes 3→3(cramped)→1, bad tablet experience
- **NEVER use fixed `columnCount`** - forces exact column count at all screen sizes
- **Correct**: `{"layout":{"type":"grid","minimumColumnWidth":"20rem"}}`
- **Behavior**: Desktop (3 cols) → Tablet (2 cols) → Mobile (1 col) based on available space
- **Use for**: Pricing tables, feature grids, team grids, card layouts
- **Reference**: See `pricing-comparison.php`

#### Pattern Background Spacing (CRITICAL)
- **Always add margin reset** to patterns with background colors: `"margin":{"top":"0","bottom":"0"}`
- WordPress core adds automatic `margin-block-start` between blocks in constrained layouts
- Without margin reset, unwanted gaps appear between adjacent patterns with different backgrounds
- Use inline styles (Ollie approach) instead of global CSS overrides
- Example: `style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);..."`
- Required for: Full-width sections, hero sections, CTAs, testimonials, feature grids with backgrounds

#### Full-Width Pattern Layout (CRITICAL)
- **NEVER use constrained layout on outer `alignfull` group** - causes horizontal gaps/overflow
- **Root cause**: `"layout":{"type":"constrained","contentSize":"1200px"}` on `alignfull` group creates max-width that conflicts with full-width alignment
- **Correct approach**:
  - Outer `alignfull` group: ALWAYS use `"layout":{"type":"default"}`
  - Inner content groups: Use `"layout":{"type":"constrained","contentSize":"XXXpx"}` to center and limit width
- **Reference**: See `hero-two-tone.php` for working example
- **Wrong**: `<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"}} -->`
- **Correct**: `<!-- wp:group {"align":"full","layout":{"type":"default"}} -->` with nested constrained groups inside

## Testing Guidelines
- Manual verification is primary: activate the theme, add each pattern to a page, and confirm layout/spacing matches design.
- Validate block templates in the editor to ensure no block validation errors appear.
- Run `wp i18n make-pot` if translations are touched to confirm the POT file updates cleanly.

## Versioning Checklist
- When bumping versions (e.g., to `1.0.0-beta.2`), update `style.css` header, `readme.txt` Stable tag and changelog section, and `CHANGELOG.md` release entry together.
- Match `readme.txt` changelog formatting to Moiraine: `== Changelog ==` header, entries like `= 1.0.0-beta.3 - 12/10/25 =` with bullet prefixes `NEW/ADDED/CHANGED/TECHNICAL` and concise sentences ending in periods.
- Keep `CHANGELOG.md` aligned to Keep a Changelog; include descriptive subsection titles (e.g., `### Added - ...`, `### Changed - ...`) similar to Moiraine’s style.
- Use `git status` / `git diff` to review current changes; compare against `main` when needed (`git diff main...HEAD`) before updating release notes.

## Commit & Pull Request Guidelines
- Use short, Title-Case commit messages focused on a single change (e.g., `Hero Pattern Update`).
- PRs should state purpose, affected paths (patterns, templates, assets), and manual test notes (browser/viewport and steps).
- Include screenshots or screen recordings for visual changes to patterns, templates, or global styles.
- Avoid committing secrets or environment config; only theme assets/code belong here.

## Server Access & Deployment

### Accessing Live Demo Server
- **SSH as web user** (recommended for WP-CLI): `ssh web@demo.imagewize.com`
- **SSH as root** (server management): `ssh root@demo.imagewize.com`
- **Demo site paths on server (Bedrock structure):**
  - Current release: `/srv/www/demo.imagewize.com/current/`
  - Theme: `/srv/www/demo.imagewize.com/current/web/app/themes/elayne/`
  - Uploads: `/srv/www/demo.imagewize.com/shared/uploads/`
  - Logs: `/srv/www/demo.imagewize.com/logs/`

### Common Server Operations
```bash
# SSH to demo server
ssh web@demo.imagewize.com
cd /srv/www/demo.imagewize.com/current

# Check WordPress status (multisite)
wp site list --path=web/wp

# Flush cache (multisite - all sites)
wp site list --field=url --path=web/wp | xargs -n1 -I % wp --url=% cache flush --path=web/wp

# View error logs
tail -f /srv/www/demo.imagewize.com/logs/error.log
```

### Deployment
- Managed via Trellis from repository root
- See main `CLAUDE.md` in repository root for deployment commands
- Demo site uses multisite configuration

## Security & Configuration Tips
- Do not commit `.env`, uploads, or build artifacts; only theme code and assets should live in the repo.
- When working in Trellis/Bedrock, always pass `--path=web/wp` to WP-CLI to target the correct install.
- Keep licensed assets (fonts/images) documented in `assets/`; ensure redistribution rights before adding new media.
