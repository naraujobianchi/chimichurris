// This file is being called as many time as required on the page (per each carousel)

define(['jquery','slick'], function($, slick)
{
	return function(element)
	{
		// On carousel init trigger event to be used by scrollreveal.js
		$('.background-carousel').on('init', function(event, slick) {
			$(document).trigger('bgCarouselInit', {});
			$('.background-carousel').css('visibility', 'visible');
		});

		// On carousel init trigger event to be used by smooth-scroll.js
		$(element).on('init', function(event, slick) {
			$(document).trigger('carouselInit', {});
			$(element).css('visibility', 'visible');
		});		

		// setting for hero carousel
		var settings = {
			arrows: false,
			dots: true,
			fade: true,
			autoplay: false,
			autoplaySpeed: 5000
		};

		$(element).slick(settings);
	};

});