/**
 * When a section style (Style 1–5) is applied to a Cover block in the editor,
 * set the overlay to that style's background color at 80% or more, so the
 * style's text and buttons stay readable over any photo.
 *
 * Only runs when the style changes; editors can still adjust the overlay after.
 */
( function ( wp ) {
	const { createHigherOrderComponent } = wp.compose;
	const { createElement: el, useEffect, useRef } = wp.element;

	// Section style slug => palette slug used as that style's background.
	const OVERLAYS = {
		'section-1': 'accent-5',
		'section-2': 'accent-2',
		'section-3': 'accent-1',
		'section-4': 'accent-3',
		'section-5': 'contrast',
	};
	const MIN_DIM = 80;

	const sectionStyle = ( className ) => {
		const match = ( className || '' ).match( /\bis-style-(section-\d+)\b/ );
		return match ? match[ 1 ] : null;
	};

	const withSectionStyleOverlay = createHigherOrderComponent(
		( BlockEdit ) => ( props ) => {
			const { name, attributes, setAttributes } = props;
			const current = 'core/cover' === name ? sectionStyle( attributes.className ) : null;
			const previous = useRef( current );

			useEffect( () => {
				if ( current && current !== previous.current && OVERLAYS[ current ] ) {
					setAttributes( {
						overlayColor: OVERLAYS[ current ],
						customOverlayColor: undefined,
						gradient: undefined,
						customGradient: undefined,
						isUserOverlayColor: true,
						dimRatio: Math.max( attributes.dimRatio ?? 0, MIN_DIM ),
					} );
				}
				previous.current = current;
			}, [ current ] );

			return el( BlockEdit, props );
		},
		'withSectionStyleOverlay'
	);

	wp.hooks.addFilter(
		'editor.BlockEdit',
		'literacy-volunteers/section-style-overlay',
		withSectionStyleOverlay
	);
} )( window.wp );
