---
name: design
description: Generate HTML/CSS designs for WordPress patterns and full-page layouts using the Elayne theme's design system
license: MIT
compatibility: Vibe CLI with Mistral devstral
user-invocable: true
---

# Design Skill for Elayne Theme

## Objective
Generate production-grade HTML/CSS for full-page layouts and reusable WordPress patterns using the Elayne theme's design system. Output is saved to the designs directory and later converted into WordPress block patterns.

> **JPG mockups**: Generate these separately using the Mistral Le Chat Design Agent at chat.mistral.com before or after HTML generation. Save JPGs to `designs/elayne/[vertical]/designs/`.

## Scope
1. **Full-Page Layouts**: Complete page designs (Home, About, Contact, etc.)
2. **Individual Patterns**: Reusable components (Hero, CTA, Testimonials, FAQ, etc.)
3. **Output**: Single self-contained HTML file with embedded CSS per design

---

## Design System

### Style Files
- **Default theme**: `demo/web/app/themes/elayne/theme.json`
- **Custom verticals**: `demo/web/app/themes/elayne/styles/[vertical].json`

When creating a new vertical, first create its style JSON file before generating HTML.

### Default Theme Colors
```css
--wp--preset--color--primary: #1F2937;
--wp--preset--color--primary-accent: #C5D0E6;
--wp--preset--color--base: #FDFBF7;
--wp--preset--color--main: #0B1324;
```

### Typography
- **Headings**: `Barlow Condensed` or `Mona Sans` (bold/black weights)
- **Body**: `Barlow` or `Open Sans`
- Load via Google Fonts in the `<head>`
- Use `clamp()` for fluid font sizes

### Spacing & Layout
- Max content width: `1180px`
- Section padding: `5rem 1.5rem` (desktop), `4rem 1.25rem` (mobile)
- Use CSS custom properties for all spacing
- Use `clamp()` for responsive spacing

### Border Radius
- `sm`: `0.625rem` — buttons, small elements
- `md`: `0.75rem` — inner card elements
- `lg`: `1rem` — card containers
- `pill`: `999px` — badges, tags

---

## Workflow

### Step 1: Gather Requirements
Before generating, confirm:
- **Vertical** (e.g., plumbing, restaurant, photography)
- **Color palette** — check existing style file or define new one
- **Required sections** (list all: hero, services, testimonials, CTA, contact, footer)
- **Tone** (e.g., professional, emergency-focused, luxury, friendly)

### Step 2: Generate HTML/CSS
Generate a single self-contained HTML file:
- Embedded CSS in `<style>` tag (no external stylesheet)
- CSS custom properties for all colors, fonts, spacing
- Google Fonts `<link>` in `<head>`
- Semantic HTML5 structure
- Fully responsive (mobile-first, breakpoints at 480px, 768px, 1024px)
- SVG icons inline — no emoji, no external icon libraries
- Placeholder areas for images (styled divs with aspect ratios)

### Step 3: Save Output
```
designs/elayne/[vertical]/html/homepage-[vertical]-combined.html
```

If a new vertical style file is needed, also create:
```
demo/web/app/themes/elayne/styles/[vertical].json
```

### Step 4: Review & Refine
Open the HTML file in a browser and check:
- Colors match the style file exactly
- Typography is consistent
- Layout is responsive at all breakpoints
- All sections are present and complete

---

## HTML/CSS Requirements

### Structure
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Business Name] — [Tagline]</title>
    <link href="https://fonts.googleapis.com/css2?family=..." rel="stylesheet">
    <style>
        :root {
            --color-primary: ...;
            /* all tokens here */
        }
        /* all CSS here */
    </style>
</head>
<body>
    <!-- topbar (optional) -->
    <!-- header / nav -->
    <!-- hero -->
    <!-- services/features -->
    <!-- why us / about -->
    <!-- stats bar (optional) -->
    <!-- testimonials -->
    <!-- emergency CTA (if applicable) -->
    <!-- contact form -->
    <!-- footer -->
    <script>/* hamburger, sticky header, smooth scroll */</script>
</body>
</html>
```

### CSS Rules
- All colors via CSS custom properties — no hardcoded hex in rules
- Use `var()` throughout, define everything in `:root`
- Responsive grids: CSS Grid with `repeat(auto-fit, minmax(Xrem, 1fr))`
- Hover states on all interactive elements
- Smooth transitions: `all 0.25s ease`
- Mobile hamburger menu with JS toggle

---

## Section Patterns

### Hero
- Full-width background (gradient or solid)
- Two-column layout (text left, visual/image right) — stacks on mobile
- Badge/label above headline
- `h1` using display font, uppercase, bold
- Subheading in body font, muted color
- Two CTAs: primary (filled) + secondary (ghost/outline)
- Trust indicators below CTAs (stats, ratings, years)
- Floating badges on visual (e.g., "Licensed & Insured", "24/7")

### Services Grid
- 3-column grid → 2 → 1 on mobile
- Each card: icon (SVG), title, description, "Learn more →" link
- Featured card variant (highlighted border/background)
- Hover: lift + accent border top

### Testimonials
- 3-column grid → 2 → 1 on mobile
- Each card: star rating, blockquote, author avatar (initials), name, source
- Featured card variant

### Contact Section
- Two-column: contact info left, form right
- Form fields: name, phone, email, service dropdown, message
- All fields styled consistently with focus states
- Submit button full-width, uppercase

### Footer
- Dark background
- 4-column grid → 2 → 1 on mobile
- Columns: logo + tagline, services links, company links, contact info
- Bottom bar: copyright + legal links

---

## Handoff to WordPress Patterns

After HTML/CSS is approved:

1. WordPress patterns live in: `demo/web/app/themes/elayne/patterns/`
2. Replace hardcoded colors with: `var:preset|color|[slug]`
3. Replace hardcoded spacing with: `var:preset|spacing|[slug]`
4. Use responsive grid: `<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->`
5. Wrap all text in `esc_html_e( 'Text', 'elayne' )` for translation
6. Use `get_template_directory_uri()` for all image paths

---

## Directory Structure

```
designs/elayne/
└── [vertical]/
    ├── designs/    # JPG mockups (from Mistral Le Chat Design Agent)
    ├── html/       # HTML/CSS implementations (generated by this skill)
    └── images/     # Image assets, icons, source files
```

---

## Style File Format

When creating a new vertical style file (`styles/[vertical].json`):

```json
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 3,
    "title": "[Vertical] Style",
    "settings": {
        "color": {
            "palette": [
                { "name": "Primary", "slug": "[vertical]-primary", "color": "#..." },
                { "name": "Accent", "slug": "[vertical]-accent", "color": "#..." }
            ]
        }
    }
}
```

---

**Last Updated**: 2026-03-15
**Owner**: Jasper Frumau
