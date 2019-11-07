jQuery( document ).ready(function( $ ) {
	// Inside of this function, $() will work as an alias for jQuery()
	// and other libraries also using $ will not be accessible under this shortcut
	// https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

	// Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
		$('body').addClass('touch');
	}

	// Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
	if( bowser.msie && bowser.version == 11 ) {
		$('body').addClass('ie-11');
	} else if ( bowser.safari ) {
		$('body').addClass('safari');
	}

	// Menu function
	$('.menu-icon').on('click', function() {
		$(this).toggleClass('active');
		$('.nav--mobile').toggleClass('active');
	});

	$(window).on('resize', function() {
		if( $(window).width() > 1024 ) {
			$('.menu-icon').removeClass('active');
			$('.nav--mobile').removeClass('active');
		}
	});

	// Modals
	MicroModal.init();

	// Home Testimonials 1
	if( $('.home-testimonials__slider').length ) {
		$('.home-testimonials__slider').slick({
			autoplay: false,
			arrows: true,
			dots: true,
			adaptiveHeight: true,
		});
	}

	// Global Testimonials
	if( $('.testimonials-section__slider').length ) {
		$('.testimonials-section__slider').slick({
			autoplay: false,
			arrows: true,
			dots: false,
			slidesToShow: 2,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});
	}

	// Form Label Animation
	$('.gform_wrapper form .animated').find('input, select, textarea').on('focusin', function() {
		$(this).parents('.animated').children('label').addClass('active-position active-weight active-color');

		// Off focus
		$('.gform_wrapper form .animated').find('input, select, textarea').on('focusout', function() {
			if( $(this).val() !== '' ) { // Remove active weight and keep raised position if input has content
				$(this).parents('.animated').children('label').removeClass('active-weight');
			} else { // Else remove both weight and raised position
				$(this).parents('.animated').children('label').removeClass('active-position active-weight active-color');
			}
		});
	});

});
