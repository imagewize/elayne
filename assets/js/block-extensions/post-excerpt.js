(function(wp) {
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, ToggleControl } = wp.components;
    const { createElement } = wp.element;

    // Add attributes to the post-excerpt block
    function elaynePostExcerptAddAttributes(settings, name) {
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
    const elaynePostExcerptWithInspectorControls = createHigherOrderComponent(function(BlockEdit) {
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
                            title: __('Link Settings', 'elayne'),
                            initialOpen: false,
                            className: "elayne-excerpt-link-settings"
                        },
                        createElement(
                            ToggleControl,
                            {
                                label: __('Link excerpt to post', 'elayne'),
                                checked: !!linkToPost,
                                onChange: function() {
                                    setAttributes({ linkToPost: !linkToPost });
                                }
                            }
                        ),
                        linkToPost && createElement(
                            ToggleControl,
                            {
                                label: __('Underline link', 'elayne'),
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
    }, 'elaynePostExcerptWithInspectorControls');

    // Add custom class name to the block
    const elaynePostExcerptWithCustomClassName = createHigherOrderComponent((BlockListBlock) => {
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
            const className = 'elayne-linked-excerpt' + (underlineLink ? ' has-underline' : ' no-underline');

            // Add custom class
            return createElement(BlockListBlock, {
                ...props,
                className: props.className ? props.className + ' ' + className : className
            });
        };
    }, 'elaynePostExcerptWithCustomClassName');

    // Register our filters
    addFilter(
        'blocks.registerBlockType',
        'elayne/post-excerpt-link-attributes',
        elaynePostExcerptAddAttributes
    );

    addFilter(
        'editor.BlockEdit',
        'elayne/post-excerpt-link-controls',
        elaynePostExcerptWithInspectorControls
    );

    addFilter(
        'editor.BlockListBlock',
        'elayne/post-excerpt-link-class',
        elaynePostExcerptWithCustomClassName
    );
})(window.wp);