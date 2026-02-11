# Pattern Compliance Checker

Automated tool to validate WordPress block patterns against Elayne theme standards.

## Features

- ✅ **Hardcoded CSS Detection**: Finds hardcoded font sizes, padding, margins, border-radius
  - **Smart Template Detection**: Relaxed rules for `template-*`, `header-*`, `footer-*` patterns
  - Allows WordPress Core defaults (e.g., `border-radius:5px` for comment boxes)
- ✅ **Spacer Block Detection**: Identifies `wp:spacer` blocks that should use `blockGap`
- ✅ **Emoji Icon Detection**: Finds emoji icons that should be SVG icons
- ✅ **HTML Comment Validation**: Checks for problematic HTML comments between tags
- ✅ **Margin Reset Validation**: Ensures full-width patterns have proper margin reset
- ✅ **Grid Layout Validation**: Checks for proper responsive grid usage
  - Only flags content patterns with 3+ columns (templates can use `wp:columns` for sidebars)
- ✅ **Media ID Detection**: Finds hardcoded media IDs

## Installation

### Dual-Repository Workflow

This theme is developed in two repositories:

1. **Main repo** (`~/code/imagewize.com/`) - Development, experimentation, WIP
2. **Theme repo** (`~/code/elayne/`) - Distribution, GitHub, WordPress.org

**Pre-commit hooks are ONLY enabled in the theme repo** to avoid interrupting development workflow.

### Enable Git Pre-Commit Hook (Theme Repo Only)

```bash
# Navigate to standalone theme repository
cd ~/code/elayne/

# Configure Git to use theme hooks
git config core.hooksPath .githooks

# Make hook executable (if needed)
chmod +x .githooks/pre-commit
```

The pre-commit hook will automatically run pattern compliance checks before each commit in the theme repo.

## Usage

### Manual Check (Main Repo)

```bash
# From theme directory in main repo
cd ~/code/imagewize.com/demo/web/app/themes/elayne

# Quick check before rsync (optional)
./check-patterns

# Or run the full script directly
./scripts/pattern-check/check-patterns.sh
```

### Automatic Check (Theme Repo)

```bash
# In theme repo, the pre-commit hook runs automatically
cd ~/code/elayne/
git commit -m "Update pattern"
# ✅ Hook runs automatically and blocks commit if issues found
```

### Check Specific Pattern Directory

```bash
# From theme directory
cd demo/web/app/themes/elayne
php scripts/pattern-check/check-pattern-compliance.php /path/to/patterns
```

### Check Specific Pattern File

```bash
# From theme directory
cd demo/web/app/themes/elayne
php scripts/pattern-check/check-pattern-compliance.php patterns/hero-two-tone.php
```

## Integration

### Git Pre-Commit Hook

The theme includes a pre-commit hook at `.githooks/pre-commit` that automatically runs pattern checks. To enable it, see the **Installation** section above.

### CI/CD Integration

Add to your GitHub Actions or other CI (from repository root):

```yaml
- name: Check Pattern Compliance
  working-directory: demo/web/app/themes/elayne
  run: ./scripts/pattern-check/check-patterns.sh
```

## Compliance Rules

Based on `CLAUDE.md` guidelines:

### Content Pattern Rules (Strict)
Applied to all patterns EXCEPT `template-*`, `header-*`, `footer-*`:

1. **No Hardcoded Values**: Use semantic variables like `var:preset|spacing|medium`
2. **No Spacer Blocks**: Use `blockGap` on parent containers instead
3. **No Emoji Icons**: Use SVG icons for consistency
4. **Proper Margin Reset**: Full-width patterns need `"margin":{"top":"0","bottom":"0"}`
5. **Responsive Grids**: Use `minimumColumnWidth` for 3+ column layouts (not `wp:columns`)
6. **No Media IDs**: Avoid hardcoded media IDs in image blocks
7. **No HTML Comments**: No HTML comments between opening tags and WordPress block comments

### Template Pattern Rules (Relaxed)
Applied to `template-*`, `header-*`, `footer-*` patterns:

1. **WordPress Core Defaults Allowed**:
   - `border-radius:5px` (comment boxes, UI elements)
   - `border-radius:100px` (avatars, circular elements)
   - `blockGap:0.5rem` or `10px` (metadata, author info spacing)
2. **Font-size checking**: Still enforced (use semantic variables)
3. **Large spacing values**: Still enforced for padding/margin (use semantic variables)
4. **wp:columns allowed**: Sidebar layouts and 2-column templates can use `wp:columns`
5. **Other rules**: Same as content patterns (no spacers, proper margin reset, etc.)

### Why Different Rules for Templates?

Templates inherit WordPress Core block defaults (comments, avatars, metadata) which use small hardcoded values that are standard across all themes. Following Ollie theme's approach, these small values are acceptable in structural patterns to maintain WordPress consistency.

## Exit Codes

- `0`: All patterns passed
- `1`: Issues found

## Development

### Adding New Checks

1. Edit `check-pattern-compliance.php`
2. Add new validation methods to the `PatternComplianceChecker` class
3. Follow existing pattern for consistency

### Testing

```bash
# From theme directory
cd demo/web/app/themes/elayne

# Test with a known-good pattern
php scripts/pattern-check/check-pattern-compliance.php patterns/hero-two-tone.php

# Test with a pattern that has issues
php scripts/pattern-check/check-pattern-compliance.php patterns/fandb-events-grid.php
```

## Development Workflow

### Typical Development Cycle

```bash
# 1. Develop in main repo (no pre-commit hook - fast iterations)
cd ~/code/imagewize.com/demo/web/app/themes/elayne/
# Edit patterns...
git commit -m "WIP: New pattern"  # ✅ Commits without checks

# 2. Optional: Check before rsync to theme repo
./check-patterns  # Run if you want to verify patterns

# 3. Rsync to standalone theme repo
./rsync  # Syncs to ~/code/elayne/ (including .githooks/ and scripts/)

# 4. Commit in theme repo (pre-commit hook enforces quality)
cd ~/code/elayne/
git commit -m "Add new pattern"
# 🛡️ Pre-commit hook runs automatically
# ❌ Blocks commit if issues found
# ✅ Only commits clean, distribution-ready code
```

### Benefits of This Approach

- **Main repo**: Fast development, no forced interruptions, WIP commits allowed
- **Theme repo**: Quality enforcement, only clean code reaches distribution
- **No duplicate hooks**: Single enforcement point where it matters most
- **Clear separation**: Development vs. distribution concerns

## Troubleshooting

### "Pattern directory not found" error
- Ensure you're running from the theme root directory
- Check that `patterns/` directory exists

### Hook not running on commit
- Verify hook is executable: `chmod +x .githooks/pre-commit`
- Check Git hooks path: `git config core.hooksPath`
- Ensure it's set to `.githooks`

### Skip checks for emergency commits
```bash
# Temporarily bypass the pre-commit hook
git commit --no-verify -m "Emergency fix"
```

## License

MIT License - Free to use and modify for your WordPress theme development.
