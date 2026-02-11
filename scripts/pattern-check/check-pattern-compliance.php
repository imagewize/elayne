<?php
/**
 * Pattern Compliance Checker for Elayne Theme
 *
 * Checks patterns against CLAUDE.md rules:
 * - No hardcoded font sizes, padding, or border-radius (relaxed for templates)
 * - Proper semantic variables usage
 * - No spacer blocks
 * - Proper margin reset on full-width patterns
 * - Valid block comment structure
 * - Responsive grid layouts for 3+ columns
 *
 * Template Exception Rules:
 * - Templates (template-*, header-*, footer-*) are allowed WordPress Core defaults
 * - Allowed in templates: border-radius:5px, border-radius:100px, blockGap:0.5rem/10px
 * - These are WordPress Core block defaults for comments, avatars, and metadata
 */

class PatternComplianceChecker {
    private $pattern_dir;
    private $issues = [];
    private $passed = [];
    
    public function __construct($pattern_dir) {
        $this->pattern_dir = rtrim($pattern_dir, '/');
    }
    
    public function checkAllPatterns() {
        $patterns = glob($this->pattern_dir . '/*.php');

        foreach ($patterns as $pattern_file) {
            $pattern_name = basename($pattern_file);
            $content = file_get_contents($pattern_file);

            $issues = [];

            // Determine if this is a template pattern (different rules apply)
            $is_template = strpos($pattern_name, 'template-') === 0;
            $is_header = strpos($pattern_name, 'header-') === 0;
            $is_footer = strpos($pattern_name, 'footer-') === 0;
            $is_structural = $is_template || $is_header || $is_footer;

            // Check for hardcoded values
            // Templates are allowed specific WordPress Core defaults:
            // - border-radius:5px (comment boxes)
            // - border-radius:100px (avatars)
            // - blockGap:0.5rem or 10px (metadata spacing)
            if ($is_structural) {
                // For templates: only check for hardcoded font-size and large spacing values
                // Allow small border-radius and blockGap values (WordPress Core defaults)
                if (preg_match('/(font-size):\s*\d+\.?\d*(px|rem|em)/', $content)) {
                    $issues[] = 'Hardcoded font-size values found (use semantic variables)';
                }
                // Flag large padding/margin values but allow WordPress Core defaults
                if (preg_match('/(padding|margin):\s*\d{2,}\.?\d*(px|rem|em)/', $content)) {
                    // Exclude common WordPress Core spacing patterns
                    if (!preg_match('/margin-(top|bottom|left|right):0/', $content)) {
                        $issues[] = 'Hardcoded large spacing values found (use semantic variables)';
                    }
                }
            } else {
                // For content patterns: strict checking (all hardcoded values)
                if (preg_match('/(font-size|padding|margin|border-radius):\s*\d+\.?\d*(px|rem|em)/', $content)) {
                    $issues[] = 'Hardcoded CSS values found (use semantic variables)';
                }
            }

            // Check for spacer blocks
            if (strpos($content, '<!-- wp:spacer ') !== false) {
                $issues[] = 'Spacer blocks found (use blockGap instead)';
            }

            // Check for emoji icons
            if (preg_match('/[🅿🍽📶♿🎉🍷🅿️🍽️📶️♿️🎉️🍷️]/u', $content)) {
                $issues[] = 'Emoji icons found (use SVG icons instead)';
            }

            // Check for HTML comments between tags
            // Only flag organizational HTML comments (not WordPress block comments)
            // Problematic: <div>\n<!-- Attorney 1 -->\n<!-- wp:group
            // Valid: <div><!-- wp:avatar /-->\n<!-- wp:group
            // Valid: <div><!-- /wp:image -->\n<!-- wp:group
            // Match: <div> followed by whitespace, then comment NOT starting with "wp:" or "/wp:"
            if (preg_match('/<div[^>]*>\s+<!--\s*(?!\/?\s*wp:)[^-]/', $content)) {
                $issues[] = 'HTML comments between opening tags and block comments (causes validation errors)';
            }

            // Check for proper margin reset on full-width patterns
            if (strpos($content, 'alignfull') !== false &&
                (strpos($content, '"margin":{"top":"0","bottom":"0"}') === false &&
                 strpos($content, 'margin-top:0;margin-bottom:0') === false)) {
                $issues[] = 'Full-width pattern missing margin reset';
            }

            // Check for wp:columns in 3+ column grid patterns
            // Note: wp:columns is acceptable for 2-column layouts (they stack to 1)
            // Only flag when there are 3+ columns in CONTENT patterns (not templates)
            if (!$is_structural && strpos($content, 'wp:columns') !== false) {
                // Count the number of column blocks
                preg_match_all('/<!-- wp:column/', $content, $matches);
                if (count($matches[0]) >= 3) {
                    $issues[] = 'Using wp:columns for 3+ columns instead of responsive grid layout (use minimumColumnWidth)';
                }
            }

            // Check for hardcoded media IDs
            if (preg_match('/"id":\d+/', $content)) {
                $issues[] = 'Hardcoded media IDs found';
            }

            if (empty($issues)) {
                $this->passed[] = $pattern_name;
            } else {
                $this->issues[$pattern_name] = $issues;
            }
        }
    }
    
    public function getResults() {
        return [
            'passed' => $this->passed,
            'issues' => $this->issues
        ];
    }
    
    public function printResults() {
        $results = $this->getResults();
        
        echo "\n=== Pattern Compliance Check Results ===\n\n";
        
        echo "✅ PASSED (" . count($results['passed']) . " patterns):\n";
        foreach ($results['passed'] as $pattern) {
            echo "  - $pattern\n";
        }
        
        if (!empty($results['issues'])) {
            echo "\n❌ ISSUES FOUND (" . count($results['issues']) . " patterns):\n";
            foreach ($results['issues'] as $pattern => $issues) {
                echo "\n  $pattern:\n";
                foreach ($issues as $issue) {
                    echo "    - $issue\n";
                }
            }
        } else {
            echo "\n🎉 All patterns passed compliance checks!\n";
        }
        
        echo "\n";
    }
}

// Run the checker
if (php_sapi_name() === 'cli') {
    // Check if pattern directory is provided as argument, otherwise use default
    $pattern_dir = isset($argv[1]) ? $argv[1] : __DIR__ . '/../../patterns';
    
    if (!is_dir($pattern_dir)) {
        die("Pattern directory not found: $pattern_dir\n");
    }
    
    $checker = new PatternComplianceChecker($pattern_dir);
    $checker->checkAllPatterns();
    $checker->printResults();
    
    // Exit with error code if issues found
    $results = $checker->getResults();
    exit(empty($results['issues']) ? 0 : 1);
} else {
    die("This script must be run from CLI.\n");
}