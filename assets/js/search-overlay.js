/**
 * Full-screen search overlay.
 *
 * The overlay markup is rendered in the footer by inc/search-overlay.php; this
 * script only shows and hides it, and manages focus while it is open.
 */
( function () {
	'use strict';

	var FOCUSABLE = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';

	function init() {
		var overlay = document.getElementById( 'elayne-search-overlay' );
		var triggers = document.querySelectorAll( '.elayne-search-overlay-trigger' );

		if ( ! overlay || ! triggers.length ) {
			return;
		}

		var field = overlay.querySelector( '.elayne-search-overlay__field' );
		var lastFocused = null;

		/* The trigger does nothing without this script, so it stays hidden
		   until we are ready to handle it. */
		Array.prototype.forEach.call( triggers, function ( trigger ) {
			trigger.hidden = false;
			trigger.addEventListener( 'click', open );
		} );

		function open( e ) {
			lastFocused = e.currentTarget;
			overlay.hidden = false;
			/* Reading layout forces a reflow so the transition runs. */
			overlay.getBoundingClientRect();
			overlay.classList.add( 'is-active' );
			document.body.classList.add( 'elayne-search-overlay-open' );

			Array.prototype.forEach.call( triggers, function ( trigger ) {
				trigger.setAttribute( 'aria-expanded', 'true' );
			} );

			field.focus();
		}

		function close() {
			overlay.classList.remove( 'is-active' );
			document.body.classList.remove( 'elayne-search-overlay-open' );

			Array.prototype.forEach.call( triggers, function ( trigger ) {
				trigger.setAttribute( 'aria-expanded', 'false' );
			} );

			/* Wait out the fade before hiding, so the transition is visible.
			   Reduced-motion users get no transition, so hide immediately. */
			var reduced = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
			window.setTimeout( function () {
				overlay.hidden = true;
			}, reduced ? 0 : 300 );

			if ( lastFocused ) {
				lastFocused.focus();
				lastFocused = null;
			}
		}

		/* Keep Tab inside the overlay while it is open. */
		function trapFocus( e ) {
			var focusable = Array.prototype.filter.call(
				overlay.querySelectorAll( FOCUSABLE ),
				function ( el ) {
					return el.offsetParent !== null;
				}
			);

			if ( ! focusable.length ) {
				return;
			}

			var first = focusable[ 0 ];
			var last = focusable[ focusable.length - 1 ];

			if ( e.shiftKey && document.activeElement === first ) {
				e.preventDefault();
				last.focus();
			} else if ( ! e.shiftKey && document.activeElement === last ) {
				e.preventDefault();
				first.focus();
			}
		}

		Array.prototype.forEach.call(
			overlay.querySelectorAll( '[data-elayne-search-close]' ),
			function ( el ) {
				el.addEventListener( 'click', close );
			}
		);

		document.addEventListener( 'keydown', function ( e ) {
			if ( overlay.hidden ) {
				return;
			}
			if ( e.key === 'Escape' ) {
				close();
			} else if ( e.key === 'Tab' ) {
				trapFocus( e );
			}
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
