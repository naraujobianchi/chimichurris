define(['jquery','scrollreveal'], function($, ScrollReveal)
{
	return function(element)
	{
		// Changing the defaults
		var sr = new ScrollReveal();

		var scale = {
			enter    : 'top',
			origin   : 'top',
			distance : '24px',
			duration : 1000,
			delay    : 500,
			scale    : 1.05,
		};

		var moveUp = {
			enter    : 'top',
			origin   : 'bottom',
			distance : '64px',
			duration : 900,
			delay    : 300,
			scale    : 1,
		};

		var moveUpDelayed = {
			enter    : 'top',
			origin   : 'bottom',
			distance : '64px',
			duration : 900,
			delay    : 1000,
			scale    : 1,
		};

		var show = {
			enter    : 'top',
			origin   : 'bottom',
			distance : '0',
			duration : 900,
			delay    : 200,
			scale    : 1,
		};

		var carouselScale = {
			enter    : 'top',
			origin   : 'top',
			distance : '24px',
			duration : 1000,
			scale    : 1.05,
		};
		var carouselMoveUpDelayed = {
			enter    : 'top',
			origin   : 'bottom',
			distance : '64px',
			duration : 900,
			delay    : 700,
			scale    : 1,
		};

		// Customizing a reveal set
		sr.reveal('.sr-scale', scale);
		sr.reveal('.sr-move-up-delayed', moveUpDelayed);
		sr.reveal('.sr-move-up', moveUp);
		sr.reveal('.sr-show', show);

		// On carousel init event tigger scrollreveal
		$(document).on('bgCarouselInit', function(e){
			sr.reveal('.sr-scale-carousel', carouselScale);
			sr.reveal('.sr-move-up-delayed-carousel', carouselMoveUpDelayed);
		});

	};

});