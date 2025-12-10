(function(wp) {
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, ToggleControl } = wp.components;
    const { createElement } = wp.element;

    // Add attributes to the post-excerpt block
    function addAttributes(settings, name) {
        if (name !== 'core/post-excerpt') {
            return settings;
        }

        return {
            ...settings,
            attributes: {
                ...settings.attributes,
                linkToPost: {
                    type: 'boolean',
                    default: false
                },
                underlineLink: {
                    type: 'boolean',
                    default: false
                }
            }
        };
    }

    // Add inspector controls to the post-excerpt block
    const withInspectorControls = createHigherOrderComponent(function(BlockEdit) {
        return function(props) {
            if (props.name !== 'core/post-excerpt') {
                return createElement(BlockEdit, props);
            }

            const { attributes, setAttributes } = props;
            const { linkToPost, underlineLink } = attributes;

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
                            title: __('Link Settings', 'moiraine'),
                            initialOpen: false,
                            className: "moiraine-excerpt-link-settings"
                        },
                        createElement(
                            ToggleControl,
                            {
                                label: __('Link excerpt to post', 'moiraine'),
                                checked: !!linkToPost,
                                onChange: function() {
                                    setAttributes({ linkToPost: !linkToPost });
                                }
                            }
                        ),
                        linkToPost && createElement(
                            ToggleControl,
                            {
                                label: __('Underline link', 'moiraine'),
                                checked: !!underlineLink,
                                onChange: function() {
                                    setAttributes({ underlineLink: !underlineLink });
                                }
                            }
                        )
                    )
                )
            );
        };
    }, 'withInspectorControls');

    // Add custom class name to the block
    const withCustomClassName = createHigherOrderComponent((BlockListBlock) => {
        return (props) => {
            if (props.name !== 'core/post-excerpt') {
                return createElement(BlockListBlock, props);
            }

            const { attributes } = props;
            const { linkToPost, underlineLink } = attributes;

            // Only add custom class if linkToPost is true
            if (!linkToPost) {
                return createElement(BlockListBlock, props);
            }

            // Create the class name based on attributes
            const className = 'moiraine-linked-excerpt' + (underlineLink ? ' has-underline' : ' no-underline');

            // Add custom class
            return createElement(BlockListBlock, {
                ...props,
                className: props.className ? props.className + ' ' + className : className
            });
        };
    }, 'withCustomClassName');

    // Register our filters
    addFilter(
        'blocks.registerBlockType',
        'moiraine/post-excerpt-link-attributes',
        addAttributes
    );

    addFilter(
        'editor.BlockEdit',
        'moiraine/post-excerpt-link-controls',
        withInspectorControls
    );

    addFilter(
        'editor.BlockListBlock',
        'moiraine/post-excerpt-link-class',
        withCustomClassName
    );
})(window.wp);