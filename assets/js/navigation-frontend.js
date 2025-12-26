/**
 * Navigation Frontend Enhancement
 *
 * 1. Accessibility fix: Move chevron icons inside buttons (all navigation blocks)
 * 2. Clickable parents: Convert parent buttons to links with separate toggles
 */
document.addEventListener('DOMContentLoaded', () => {
    // ============================================
    // 1. ACCESSIBILITY FIX - Standard Navigation
    // ============================================
    // Fix navigation list structure by moving chevron inside button
    // This resolves HTML5 validation issue where <span> is direct child of <li>
    // Only needed for navigation blocks WITHOUT clickable parents (they handle it differently)
    const standardNavs = document.querySelectorAll('.wp-block-navigation:not(.has-clickable-parents)');

    standardNavs.forEach(nav => {
        const navItems = nav.querySelectorAll('.wp-block-navigation-item.has-child');

        navItems.forEach(item => {
            const button = item.querySelector('.wp-block-navigation-submenu__toggle');
            const chevron = item.querySelector(':scope > .wp-block-navigation__submenu-icon');

            // Move chevron inside button if both exist and chevron is orphaned outside button
            if (button && chevron && chevron.parentNode === item) {
                button.appendChild(chevron);
            }
        });
    });

    // ============================================
    // 2. CLICKABLE PARENTS FEATURE
    // ============================================
    // Converts parent menu buttons to clickable links with separate toggle buttons
    // when the hasClickableParents attribute is enabled on the navigation block
    const navs = document.querySelectorAll('.wp-block-navigation.has-clickable-parents');

    navs.forEach(nav => {
        // Find all parent menu items that have submenus and a parent URL
        const parentItems = nav.querySelectorAll('li.has-child[data-parent-url]');

        parentItems.forEach(li => {
            const parentUrl = li.getAttribute('data-parent-url');
            if (!parentUrl) return;

            // Find the submenu toggle button
            const button = li.querySelector('.wp-block-navigation-submenu__toggle');
            if (!button) return;

            // Get the menu item label
            const label = button.querySelector('.wp-block-navigation-item__label');
            const labelText = label ? label.textContent : '';

            // Find the chevron icon
            const chevronContainer = li.querySelector('.wp-block-navigation__submenu-icon');
            const chevronSvg = chevronContainer ? chevronContainer.cloneNode(true) : null;

            // Create wrapper div for link + toggle
            const wrapper = document.createElement('div');
            wrapper.className = 'moiraine-nav-parent-wrapper';

            // Create clickable link for parent item
            const link = document.createElement('a');
            link.href = parentUrl;
            link.className = 'moiraine-nav-parent-link wp-block-navigation-item__content';
            link.innerHTML = label ? label.outerHTML : labelText;
            link.setAttribute('aria-label', 'Go to ' + labelText);

            // Create new toggle button for chevron
            const toggle = document.createElement('button');
            toggle.className = 'moiraine-nav-toggle';
            toggle.setAttribute('aria-expanded', button.getAttribute('aria-expanded') || 'false');
            toggle.setAttribute('aria-label', 'Toggle ' + labelText + ' submenu');

            if (chevronSvg) {
                toggle.appendChild(chevronSvg);
            }

            // Copy WordPress Interactivity API attributes from original button to toggle
            const interactivityAttrs = [
                'data-wp-interactive',
                'data-wp-context',
                'data-wp-on--click',
                'data-wp-on-async--click',
                'data-wp-bind--aria-expanded',
                'data-wp-class--has-child',
                'data-wp-class--is-open',
                'aria-haspopup'
            ];

            interactivityAttrs.forEach(attr => {
                const value = button.getAttribute(attr);
                if (value) {
                    toggle.setAttribute(attr, value);
                }
            });

            // Add click handler for toggling dropdown (fallback if Interactivity API doesn't work)
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                toggle.setAttribute('aria-expanded', !isExpanded);

                // Toggle is-open class for CSS fallback
                if (!isExpanded) {
                    li.classList.add('is-open');
                } else {
                    li.classList.remove('is-open');
                }
            });

            // Replace button with wrapper containing link + toggle
            button.parentNode.insertBefore(wrapper, button);
            wrapper.appendChild(link);
            wrapper.appendChild(toggle);
            button.remove();

            // Remove the original chevron container if it still exists separately
            if (chevronContainer && chevronContainer.parentNode === li) {
                chevronContainer.remove();
            }
        });
    });
});
