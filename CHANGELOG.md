# Changelog

All notable changes to the Elayne WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0-beta.2] - 2025-12-10

### Added
- Development tooling for theme publication:
  - composer.json with WordPress Coding Standards (WPCS) support
  - phpcs.xml configuration for code quality checks
  - package.json with theme metadata
  - Composer scripts: `lint`, `wpcs:scan`, `wpcs:fix`
- GitHub Actions workflow for automated theme review checks
  - Runs WordPress theme-review-action on pull requests and pushes
  - Tests accessibility-ready compliance
  - Validates theme against WordPress.org requirements

### Technical
- Added php-parallel-lint/php-parallel-lint for PHP syntax checking
- Added wp-coding-standards/wpcs v3.0.0 for WordPress coding standards
- Added phpcompatibility/phpcompatibility-wp for PHP compatibility checks
- Configured automated CI/CD for theme quality assurance

## [1.0.0-beta.1] - 2025-12-10

### Added
- Initial beta release
- Full Site Editing (FSE) support with WordPress 6.6+
- 15 original block patterns across 8 categories:
  - Header Patterns (1): header-light-with-hamburger-menu
  - Hero Patterns (2): hero-two-tone, hero-with-cta
  - Call-to-Action & Contact (3): cta-newsletter, contact-info, contact-side-by-side
  - Features & Services (2): feature-grid, services-feature-cards
  - Team & Testimonials (3): team-grid, testimonial-card, client-reviews-orange
  - Statistics (2): stats-showcase, stats-list
  - Blog/Posts (2): blog-post-columns-portrait, post-featured-two-column
- Custom pattern categories for organized content blocks
- Block extensions for enhanced functionality:
  - Navigation block: clickable parent items and improved chevron positioning
  - Post excerpt block: link to post functionality with underline control
- Custom image sizes for optimized layouts:
  - elayne-portrait-small (380×570, 2:3 ratio)
  - elayne-portrait-medium (380×507, 3:4 ratio)
  - elayne-portrait-large (380×475, 4:5 ratio)
  - elayne-single-hero (700×400, 16:9-ish landscape)
- Fluid typography system with responsive font scaling
- Open Sans variable font (weights 300-800)
- Professional business-focused color palette
- Custom shadow presets for visual depth
- RTL language support
- Translation-ready with text domain 'elayne'
- theme.json for global styles and settings
- HTML templates: index, single, page, archive, search, 404
- Template parts: header, footer
- Block-specific styles in assets/styles/
- Functions.php with theme setup and customizations
- Block extensions directory (assets/js/block-extensions/) with:
  - navigation.js - Enhanced navigation block controls
  - post-excerpt.js - Enhanced post excerpt block controls
- Block extensions PHP handler (inc/block-extensions.php) for server-side rendering

### Technical
- Minimum WordPress version: 6.6
- Minimum PHP version: 8.0
- Tested up to WordPress 6.9
- GPL v2+ licensed
- Clean block theme architecture
- No jQuery dependencies
- Optimized for performance

---

## Version History

### [1.0.0-beta.1] - Initial Beta Release
First beta release of Elayne premium business block theme.

---

**Note**: For detailed information about pattern usage and customization, see [README.md](README.md).
