(function(wp) {
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, ToggleControl } = wp.components;
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
            const { hasClickableParents, hasImprovedChevrons } = attributes;

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
                            title: __('Moiraine Navigation', 'moiraine'),
                            initialOpen: false,
                            className: "moiraine-navigation-settings"
                        },
                        createElement(
                            ToggleControl,
                            {
                                label: __('Clickable parent items', 'moiraine'),
                                help: __('Make parent menu items clickable links (click text = navigate, click chevron = toggle submenu)', 'moiraine'),
                                checked: !!hasClickableParents,
                                onChange: function() {
                                    setAttributes({ hasClickableParents: !hasClickableParents });
                                }
                            }
                        ),
                        createElement(
                            ToggleControl,
                            {
                                label: __('Improved chevron positioning', 'moiraine'),
                                help: __('Better inline positioning of chevrons on mobile', 'moiraine'),
                                checked: !!hasImprovedChevrons,
                                onChange: function() {
                                    setAttributes({ hasImprovedChevrons: !hasImprovedChevrons });
                                }
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
