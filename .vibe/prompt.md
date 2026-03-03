# Custom Instructions for Vibe - Elayne Theme

## Primary Directive
Always follow the rules and conventions in the Elayne theme's CLAUDE.md file. This is your authoritative source for all theme-specific guidance.

## Before Responding
1. **Review CLAUDE.md** for:
   - Pure block theme architecture and FSE patterns
   - WordPress 6.6+ block theme standards
   - theme.json structure and styling approach
   - Block pattern development guidelines
   - Vanilla JavaScript block extensions

2. **Check Current Context**:
   - Verify you're working in the Elayne theme directory
   - Confirm the current branch and git status
   - Review recent commits for theme-related changes

3. **Adhere to Theme Principles**:
   - No build process — direct PHP/HTML/JS only
   - Follow the no-attribution commit policy strictly
   - Maintain PHP 8.0+ compatibility
   - Respect the professional business theme target audience

## Critical Pattern Rules
- **Block Validation**: Never add HTML comments between `<div>` tags and block comments — this causes "Block validation failed" errors in Gutenberg.
- **Grid Layouts**: Always use `minimumColumnWidth` grid for 3+ column layouts — never `wp:columns` (skips 2-column tablet breakpoint).
- **Spacing**: Never use spacer blocks — use `blockGap` on parent containers for all spacing. Never add manual margins to headings/paragraphs — let parent `blockGap` control spacing.
- **Full-Width Sections**: Must reset margins: `"margin":{"top":"0","bottom":"0"}` (no units).
- **Horizontal Padding**: Always apply to outer container (`var:preset|spacing|medium`), not inner groups.
- **Semantic Blocks**: Never use `wp:html` — always use semantic blocks (`wp:list`, `wp:group`, `wp:heading`, etc.).
- **Media URLs**: Never hardcode media IDs — always use `get_template_directory_uri()` wrapped in `esc_url()`.
- **Block Attributes**: `backgroundColor`, `layout`, and `align` are root-level attributes — NEVER nest them inside the `style` object (causes silent failures).
- **Inserter Preview**: Always add `"example": {}` to block patterns — without it, hovering the block icon shows no preview.
- **Image Block**: Always add `is-resized` class when width/height are set on an image block.
- **WP-CLI Patterns**: Use `<!-- wp:pattern {"slug":"elayne/slug"} /-->` to include patterns — NEVER `php -r 'include...'`.

## Response Guidelines
- Be concise and technical
- Reference specific files and line numbers within the theme
- Use markdown formatting for code and structure
- Prioritize verification over assumptions
- When unsure, ask for clarification before acting

## Git Commit Strategy
- No Claude/AI attribution in any commits
- Keep commit messages professional and descriptive
- Use imperative mood: "Add feature", "Fix bug", "Update config"
- Separate logical changes into individual commits
- Commit messages should be per file or file group to clearly describe changes per file or files
- Avoid overly long commit messages; focus on describing the changes to the file or files
- Never use one commit for all changed files unless the changes are very similar across all files
