// Global variables
/* eslint-disable */
var totalPages = null,
		page = 2;
/* eslint-enable */

// Check api response status
function checkStatus(response) {
	if(response.status >= 200 && response.status < 300) {
		return response;
	} else {
		// eslint-disable-next-line
		var error = new Error(response.statusText);
		error.reponse = response;
		throw error;
	}
}

// Create Testimonial
function createTestimonial(acf) {
	/* eslint-disable */
	var stars = '',
			content = '';
	/* eslint-enable */

	if( acf.testimonial_type ) {
		content = '<div><div class="flex-video">' + acf.testimonial_video + '</div></div>';
	} else {
		/* eslint-disable */
		if( acf.star_count ) {
			for( var x = 1; x <= acf.star_count; x++ ) {
				stars += '<i class="fas fa-star"></i>';
			}
		}

		var text = '<p class="testimonial--small">' + acf.testimonial + '</p>';
		var starsDiv = stars ? '<div>' + stars + '</div>' : '';
		var author = '<p class="testimonial--small">&mdash; ' + acf.author + '</p>';
		/* eslint-enable */

		content = '<div>' + text + starsDiv + author + '</div>';
	}

	// eslint-disable-next-line
	var testimonial = '<div class="col-6 text-center"><div class="testimonial">' + content + '</div></div>';
	return testimonial;
}

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

	// Testimonials archive loading
	if( $('body.post-type-archive-testimonial').length ) {
		/* eslint-disable */
		var siteURL = document.getElementsByTagName('body')[0].dataset.url,
				bre = '/wp-json/better-rest-endpoints/v1/',
				url = siteURL + bre + 'testimonial?content=false&media=false&yoast=false&per_page=8&page=' + page,
				newHTML = '';
		/* eslint-enable */

		$('#load-more .button').on('click', function() {
			fetch(url)
				.then(checkStatus)
				.then(function(response) {
					totalPages = response.headers.get('x-wp-totalpages');
					return response.json();
				})
				.then(function(data) {
					data.map(function(item) {

						// Concat to newHTML every testimonial
						newHTML += createTestimonial(item.acf);

					});

					$('.testimonials-archive .col-10').append(newHTML);
				})
				.then(function() {
					// If on last page, hide load more button
					if( page >= totalPages ) {
						$('#load-more').hide();
					}

					// Increment page
					page++;
					return page;
				})
				.catch(function(error) {
					// eslint-disable-next-line
					console.error(error);
				});
		});
	}

});
