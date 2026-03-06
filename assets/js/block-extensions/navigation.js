/**
 * Block Extension: core/navigation
 *
 * Adds an "Elayne Navigation" panel to the block inspector for core/navigation.
 * Currently exposes one setting:
 *
 *   dropdownSpacing (number, default 16px)
 *     Controls the gap between a top-level menu item and its dropdown container
 *     on desktop. The value is written as an inline CSS custom property
 *     (--elayne-dropdown-spacing) by the PHP render_block filter in
 *     inc/block-extensions.php, which then applies it via core-navigation.css.
 *     Has no effect in the mobile overlay (submenu opens inline, no gap needed).
 *
 * Why this file exists:
 *   WordPress core does not expose dropdown spacing as a block attribute.
 *   Rather than hardcoding a pixel value in CSS, this extension lets the editor
 *   adjust the gap per navigation block instance directly from the sidebar.
 *
 * Enqueued by: inc/block-extensions.php → elayne_enqueue_block_extensions()
 * Text domain: elayne
 */
(function(wp) {
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, RangeControl } = wp.components;
    const { createElement } = wp.element;

    // Registers the custom dropdownSpacing attribute on core/navigation.
    function addAttributes(settings, name) {
        if (name !== 'core/navigation') {
            return settings;
        }

        return {
            ...settings,
            attributes: {
                ...settings.attributes,
                dropdownSpacing: {
                    type: 'number',
                    default: 16
                }
            }
        };
    }

    // HOC: injects the "Elayne Navigation" panel into the block sidebar.
    const withInspectorControls = createHigherOrderComponent(function(BlockEdit) {
        return function(props) {
            if (props.name !== 'core/navigation') {
                return createElement(BlockEdit, props);
            }

            const { attributes, setAttributes } = props;
            const { dropdownSpacing } = attributes;

            return createElement(
                Fragment,
                {},
                createElement(BlockEdit, props),
                createElement(
                    InspectorControls,
                    {},
                    createElement(
                        PanelBody,
                        {
                            title: __('Elayne Navigation', 'elayne'),
                            initialOpen: false,
                            className: "elayne-navigation-settings"
                        },
                        createElement(
                            RangeControl,
                            {
                                label: __('Dropdown spacing', 'elayne'),
                                help: __('Gap between parent menu item and dropdown (desktop only)', 'elayne'),
                                value: dropdownSpacing,
                                onChange: function(value) {
                                    setAttributes({ dropdownSpacing: value });
                                },
                                min: 0,
                                max: 32,
                                step: 4
                            }
                        )
                    )
                )
            );
        };
    }, 'withInspectorControls');

    // Wire up both filters — attribute registration must run before BlockEdit HOC.
    addFilter(
        'blocks.registerBlockType',
        'elayne/navigation-attributes',
        addAttributes
    );

    addFilter(
        'editor.BlockEdit',
        'elayne/navigation-controls',
        withInspectorControls
    );
})(window.wp);
