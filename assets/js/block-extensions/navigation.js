(function(wp) {
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, ToggleControl, RangeControl } = wp.components;
    const { createElement } = wp.element;

    // Add attributes to the navigation block
    function addAttributes(settings, name) {
        if (name !== 'core/navigation') {
            return settings;
        }

        return {
            ...settings,
            attributes: {
                ...settings.attributes,
                hasClickableParents: {
                    type: 'boolean',
                    default: false
                },
                hasImprovedChevrons: {
                    type: 'boolean',
                    default: false
                },
                dropdownSpacing: {
                    type: 'number',
                    default: 16
                }
            }
        };
    }

    // Add inspector controls to the navigation block
    const withInspectorControls = createHigherOrderComponent(function(BlockEdit) {
        return function(props) {
            if (props.name !== 'core/navigation') {
                return createElement(BlockEdit, props);
            }

            const { attributes, setAttributes } = props;
            const { hasClickableParents, hasImprovedChevrons, dropdownSpacing } = attributes;

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
                            ToggleControl,
                            {
                                label: __('Clickable parent items', 'elayne'),
                                help: __('Make parent menu items clickable links (click text = navigate, click chevron = toggle submenu)', 'elayne'),
                                checked: !!hasClickableParents,
                                onChange: function() {
                                    setAttributes({ hasClickableParents: !hasClickableParents });
                                }
                            }
                        ),
                        createElement(
                            ToggleControl,
                            {
                                label: __('Improved chevron positioning', 'elayne'),
                                help: __('Better inline positioning of chevrons on mobile', 'elayne'),
                                checked: !!hasImprovedChevrons,
                                onChange: function() {
                                    setAttributes({ hasImprovedChevrons: !hasImprovedChevrons });
                                }
                            }
                        ),
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

    // Register our filters
    addFilter(
        'blocks.registerBlockType',
        'moiraine/navigation-attributes',
        addAttributes
    );

    addFilter(
        'editor.BlockEdit',
        'moiraine/navigation-controls',
        withInspectorControls
    );
})(window.wp);
