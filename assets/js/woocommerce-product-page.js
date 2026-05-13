( function () {
	'use strict';

	function initProductGallery() {
		const gallery = document.querySelector( '.elayne-product-gallery' );
		if ( ! gallery ) return;

		// Slides are scoped to each section so desktop and mobile don't cross-contaminate.
		const desktopSection = gallery.querySelector( '.elayne-gallery-desktop .elayne-main-image-wrapper' );
		const mobileSection  = gallery.querySelector( '.elayne-gallery-mobile' );

		const desktopSlides = desktopSection
			? Array.from( desktopSection.querySelectorAll( '.woocommerce-product-gallery__image' ) )
			: [];
		const mobileSlides = mobileSection
			? Array.from( mobileSection.querySelectorAll( '.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image' ) )
			: [];

		const allThumbs = Array.from( gallery.querySelectorAll( '.elayne-thumb, .elayne-mobile-thumb' ) );

		allThumbs.forEach( function ( thumb ) {
			thumb.addEventListener( 'click', function () {
				const idx = parseInt( thumb.getAttribute( 'data-gallery-index' ) || '0', 10 );

				// Update active state across both thumb sets.
				allThumbs.forEach( function ( t ) {
					t.classList.toggle(
						'active',
						parseInt( t.getAttribute( 'data-gallery-index' ) || '0', 10 ) === idx
					);
				} );

				// Show the matching slide, hide the rest — in both sections.
				desktopSlides.forEach( function ( slide, i ) {
					slide.style.display = i === idx ? 'block' : 'none';
				} );
				mobileSlides.forEach( function ( slide, i ) {
					slide.style.display = i === idx ? 'block' : 'none';
				} );
			} );
		} );
	}

	function initColorSwatches() {
		document.querySelectorAll( '.elayne-color-options' ).forEach( function ( widget ) {
			const options = widget.querySelectorAll( '.elayne-colour-option' );
			const label = widget.querySelector( '.elayne-selected-value' );
			options.forEach( function ( option ) {
				option.addEventListener( 'click', function () {
					options.forEach( function ( o ) { o.classList.remove( 'active' ); } );
					option.classList.add( 'active' );
					if ( label ) {
						const name = option.querySelector( '.elayne-colour-name' );
						if ( name ) label.textContent = name.textContent;
					}
				} );
			} );
		} );
	}

	function initStyleOptions() {
		document.querySelectorAll( '.elayne-style-options' ).forEach( function ( widget ) {
			const options = widget.querySelectorAll( '.elayne-style-option:not(.unavailable)' );
			const label = widget.querySelector( '.elayne-selected-value' );
			options.forEach( function ( option ) {
				option.addEventListener( 'click', function () {
					options.forEach( function ( o ) { o.classList.remove( 'active' ); } );
					option.classList.add( 'active' );
					if ( label ) {
						const text = option.querySelector( 'p' );
						if ( text ) label.textContent = text.textContent;
					}
				} );
			} );
		} );
	}

	function initEngravingOption() {
		const engraving = document.querySelector( '.elayne-engraving-option' );
		if ( ! engraving ) return;
		engraving.addEventListener( 'click', function () {
			engraving.classList.toggle( 'selected' );
		} );
	}

	function initAccordionTabs() {
		const triggers = document.querySelectorAll( '.elayne-accordion-trigger' );
		if ( ! triggers.length ) return;

		triggers.forEach( function ( trigger ) {
			trigger.addEventListener( 'click', function () {
				const item = trigger.closest( '.elayne-accordion-item' );
				if ( ! item ) return;
				const content = item.querySelector( '.elayne-accordion-content' );
				const icon = trigger.querySelector( '.elayne-accordion-icon' );
				const isOpen = content && content.classList.contains( 'open' );

				document.querySelectorAll( '.elayne-accordion-content' ).forEach( function ( c ) {
					c.classList.remove( 'open' );
				} );
				document.querySelectorAll( '.elayne-accordion-icon' ).forEach( function ( i ) {
					i.textContent = '+';
				} );

				if ( ! isOpen && content ) {
					content.classList.add( 'open' );
					if ( icon ) icon.textContent = '−';
				}
			} );
		} );
	}

	function initGalleryLightbox() {
		const gallery = document.querySelector( '.elayne-product-gallery' );
		if ( ! gallery ) return;

		const lightbox  = gallery.querySelector( '.elayne-lightbox' );
		if ( ! lightbox ) return;

		const lightboxImg = lightbox.querySelector( '.elayne-lightbox-img' );
		const closeBtn    = lightbox.querySelector( '.elayne-lightbox-close' );
		const prevBtn     = lightbox.querySelector( '.elayne-lightbox-prev' );
		const nextBtn     = lightbox.querySelector( '.elayne-lightbox-next' );

		// Build image list from desktop slides (each has an <a href> pointing to the full-size URL).
		const desktopSlides = Array.from(
			gallery.querySelectorAll( '.elayne-main-image-wrapper .woocommerce-product-gallery__image' )
		);

		const images = desktopSlides.map( function ( slide ) {
			const a   = slide.querySelector( 'a' );
			const img = slide.querySelector( 'img' );
			return {
				src: a   ? a.getAttribute( 'href' )    : '',
				alt: img ? img.getAttribute( 'alt' )   : '',
			};
		} );

		if ( ! images.length ) return;

		// Move lightbox to <body> so no ancestor stacking context can clip it.
		document.body.appendChild( lightbox );

		let currentIndex = 0;

		function showImage( index ) {
			lightboxImg.src = images[ index ].src;
			lightboxImg.alt = images[ index ].alt;
			prevBtn.hidden  = index === 0;
			nextBtn.hidden  = index === images.length - 1;
		}

		function openLightbox( index ) {
			currentIndex = index;
			showImage( currentIndex );
			lightbox.hidden = false;
			document.body.style.overflow = 'hidden';
			closeBtn.focus();
		}

		function closeLightbox() {
			lightbox.hidden = true;
			document.body.style.overflow = '';
		}

		// Open on click — desktop and mobile slides both map to the same image index.
		desktopSlides.forEach( function ( slide, i ) {
			slide.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				openLightbox( i );
			} );
		} );

		const mobileSlides = Array.from(
			gallery.querySelectorAll( '.elayne-gallery-mobile .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image' )
		);
		mobileSlides.forEach( function ( slide, i ) {
			slide.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				openLightbox( i );
			} );
		} );

		closeBtn.addEventListener( 'click', closeLightbox );

		prevBtn.addEventListener( 'click', function () {
			if ( currentIndex > 0 ) {
				showImage( --currentIndex );
			}
		} );

		nextBtn.addEventListener( 'click', function () {
			if ( currentIndex < images.length - 1 ) {
				showImage( ++currentIndex );
			}
		} );

		// Close on backdrop click (anything that is not the image or a button).
		lightbox.addEventListener( 'click', function ( e ) {
			if ( e.target === lightbox ) {
				closeLightbox();
			}
		} );

		// Keyboard: Escape closes, arrows navigate.
		lightbox.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' ) {
				closeLightbox();
			} else if ( e.key === 'ArrowLeft' && currentIndex > 0 ) {
				showImage( --currentIndex );
			} else if ( e.key === 'ArrowRight' && currentIndex < images.length - 1 ) {
				showImage( ++currentIndex );
			}
		} );
	}

	function initWishlistButton() {
		const wishlist = document.querySelector( '.elayne-wishlist-button' );
		if ( ! wishlist ) return;
		wishlist.addEventListener( 'click', function () {
			wishlist.classList.toggle( 'active' );
		} );
	}

	function init() {
		initProductGallery();
		initGalleryLightbox();
		initColorSwatches();
		initStyleOptions();
		initEngravingOption();
		initAccordionTabs();
		initWishlistButton();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
