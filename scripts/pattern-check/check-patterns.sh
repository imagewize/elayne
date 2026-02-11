#!/bin/bash

# Pattern Compliance Check Script
# Run this from the theme root directory to check all patterns

# Check if we're in the theme directory
if [ ! -d "patterns" ]; then
    echo "Error: This script must be run from the theme root directory"
    echo "Current directory: $(pwd)"
    echo "Expected to find: patterns/ directory"
    exit 1
fi

# Run the PHP compliance checker
php "$(dirname "$0")/class-patterncompliancechecker.php"

# Exit with the same code as the PHP script
exit $?
