( function () {
	'use strict';

	/* Inject "Clear filters" links when URL has active filter params */
	function initClearFilters() {
		var params = new URLSearchParams( window.location.search );
		var hasActive = Array.from( params.keys() ).some( function ( k ) {
			return k.startsWith( 'filter_' );
		} );
		if ( ! hasActive ) return;

		var cleanParams = new URLSearchParams();
		params.forEach( function ( value, key ) {
			if ( ! key.startsWith( 'filter_' ) && ! key.startsWith( 'query_type_' ) ) {
				cleanParams.set( key, value );
			}
		} );
		var cleanUrl = window.location.pathname + ( cleanParams.toString() ? '?' + cleanParams.toString() : '' );

		/* Sidebar: clear button at top (visible on desktop, also inside mobile drawer) */
		var sidebar = document.querySelector( '.wp-block-group.elayne-shop-filters-sidebar' );
		if ( sidebar ) {
			var sidebarBtn = document.createElement( 'a' );
			sidebarBtn.className = 'elayne-clear-filters-btn';
			sidebarBtn.href = cleanUrl;
			sidebarBtn.textContent = '× Clear filters';

			var filtersBlock = sidebar.querySelector( '.wp-block-woocommerce-product-filters' );
			if ( filtersBlock ) {
				sidebar.insertBefore( sidebarBtn, filtersBlock );
			} else {
				sidebar.appendChild( sidebarBtn );
			}
		}

		/* Toolbar: clear button in active-filters area (desktop only via CSS) */
		var activeFilters = document.querySelector( '.wp-block-group.elayne-active-filters' );
		if ( activeFilters ) {
			var toolbarBtn = document.createElement( 'a' );
			toolbarBtn.className = 'elayne-clear-filters-toolbar-btn';
			toolbarBtn.href = cleanUrl;
			toolbarBtn.textContent = '× Clear filters';
			activeFilters.appendChild( toolbarBtn );
		}
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		var filterBtn = document.querySelector( '.wp-block-button.elayne-filter-btn .wp-block-button__link' );
		var sidebar   = document.querySelector( '.wp-block-group.elayne-shop-filters-sidebar' );

		if ( ! filterBtn || ! sidebar ) return;

		var backdrop = document.createElement( 'div' );
		backdrop.className = 'elayne-filter-backdrop';
		document.body.appendChild( backdrop );

		var closeBtn = document.createElement( 'button' );
		closeBtn.className = 'elayne-filter-close-btn';
		closeBtn.setAttribute( 'aria-label', 'Close filters' );
		closeBtn.innerHTML = '&#x2715;';
		sidebar.insertBefore( closeBtn, sidebar.firstChild );

		var applyBtn = document.createElement( 'button' );
		applyBtn.className = 'elayne-filter-apply-btn';
		applyBtn.textContent = 'Apply';
		sidebar.appendChild( applyBtn );

		function openDrawer() {
			sidebar.classList.add( 'mobile-open' );
			backdrop.classList.add( 'is-visible' );
			document.body.style.overflow = 'hidden';
			filterBtn.setAttribute( 'aria-expanded', 'true' );
		}

		function closeDrawer() {
			sidebar.classList.remove( 'mobile-open' );
			backdrop.classList.remove( 'is-visible' );
			document.body.style.overflow = '';
			filterBtn.setAttribute( 'aria-expanded', 'false' );
		}

		filterBtn.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			e.stopPropagation();
			if ( sidebar.classList.contains( 'mobile-open' ) ) {
				closeDrawer();
			} else {
				openDrawer();
			}
		} );

		backdrop.addEventListener( 'click', closeDrawer );
		closeBtn.addEventListener( 'click', closeDrawer );
		applyBtn.addEventListener( 'click', closeDrawer );

		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' ) closeDrawer();
		} );
	} );

	document.addEventListener( 'DOMContentLoaded', initClearFilters );
} )();
