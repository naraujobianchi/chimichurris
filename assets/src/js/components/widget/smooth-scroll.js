define(['jquery'],function($)
{
	return function(element)
	{
		function scrollToElement(target, time) {
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 20 }, time || 1000); 
				return false;
			}		
		}

		function onCLickScroll(event) {		
			var targetID = $(event.currentTarget).attr('href');
			targetID = targetID.replace('/','');
			var target = $(targetID);
			if (target.length) {
				event.preventDefault();
				scrollToElement(target);
			}	
		}

		function onPageLoadScroll() {
			var hash = location.hash;
			var target = $(hash);
			if (target.length) {
				scrollToElement(target, 0.01);
			}
		}

		// Click event to scroll
		$('.menu-item > a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
			onCLickScroll(event);
			// close the nav when menu item is clicked (on mobile)
			if (document.body.className.indexOf('nav-open') > -1) {
				document.body.className = document.body.className.replace(/nav\-open/g, '');
			}
		});	

		// If there are carousels on page
		if ($('.carousel').length) {
			var count = 0;

			// on the carousel init completed event
			// add 1 to the counter
			$(document).on('carouselInit', function(e){
				count++;

				// if the counter is equal to the number of carousels on the page
				if(count === $('.carousel').length){
					// trigger a new event 'all-carousels-loaded'
					$(document).trigger('all-carousels-loaded');			
				}		
			});	

			// listen to the event you created and use it like you would with on page load
			$(document).on('all-carousels-loaded', function(){
				onPageLoadScroll();
			});		
				
		} else {
			onPageLoadScroll();
		}
		
	};
});