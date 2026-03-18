# Design for Elayne Theme Skill

## Overview
This skill is responsible for creating designs (JPG) and front-end code (HTML/CSS) for WordPress patterns and full-page layouts using the Elayne theme's design system. The outputs are used to build reusable WordPress block patterns and complete page templates for the demo site.

## Directory Structure
```
demo/web/app/themes/elayne/.vibe/skills/design/
├── SKILL.md          # Skill instructions and requirements
└── README.md         # This file
```

## Usage
1. **Design Phase**: Create JPG mockups for full pages (e.g., Home, About Us) and individual patterns (e.g., CTA, Hero).
2. **Development Phase**: Convert approved JPGs into HTML/CSS.
3. **Handoff**: Vibe Code will convert HTML/CSS into WordPress patterns in `demo/web/app/themes/elayne/patterns/`.

## Design Assets
All design assets (JPG, HTML, CSS) live in the centralized designs directory at the **repository root**, organized by vertical:
```
/Users/jasperfrumau/code/imagewize.com/designs/elayne/
├── default/
│   ├── designs/   # Final JPG mockups
│   ├── html/      # HTML/CSS implementations
│   └── images/    # Image assets and source files
└── plumbing/
    ├── designs/
    ├── html/
    └── images/
```

## Compliance
- Follow the Elayne theme's `theme.json` for colors, typography, spacing, and shadows.
- Ensure HTML/CSS adheres to WordPress block structure rules.
- Use Playwright for testing and screenshots:
  ```bash
  cd /Users/jasperfrumau/code/imagewize.com
  node .playwright/scripts/test.js <url> screenshot [name] [--mobile|--tablet|--desktop]
  ```

## Notes
- Do not include AI-related attributions in commits or files.
- Follow the project's commit guidelines for naming and structure.
