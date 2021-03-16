(function($) {
	'use strict';
	
	//Sticky header/mobile menun fix
	$(document).on('click', 'a#menu-toggle', function(){
		$('header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
	
	if( $('.sm-slider').length ) {
	
		$('.sm-slider').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			rows: 0,
		    prevArrow: $(".sm-slide-prev"),
		    nextArrow: $(".sm-slide-next")
		});
	
	}
	

	if ($('body').hasClass('page-template-page-insights')) {
		
		$(window).on("load resize", function() {	
			// Get an array of all element heights
			var elementHeights = $('.filter-buttons button').map(function() {
				return $(this).width();
			}).get();
			
			// Math.max takes a variable number of arguments
			// `apply` is equivalent to passing each height as an argument
			var maxHeight = Math.max.apply(null, elementHeights);
			
			// Set each height to the max height
			$('.filter-buttons button').width(maxHeight);
		});
		
		window.almOnLoad = function(alm){
			$('.ajax-load-more-wrap').addClass('grid-container');
			$('.ajax-load-more-wrap').addClass('fluid');

/*
			$('.post-grid').attr('data-equalizer', '');
			$('.post-grid').attr('data-equalize-on', 'medium');
			$('.post-grid').attr('data-equalize-on-stack', 'true');
			$('.content').foundation();
*/
		}
		
		window.almComplete = function(alm){
			var $count = $('.post-grid article').length;			
			$('.post-grid').attr('data-count', $count)
		}
						
		// Animation flag
		var alm_is_animating = false; 
		  
		// Click Event
		function filterClick(){
			
			if ( $(this).hasClass('active') && !alm_is_animating) { // Exit if active
				return false;
				$(this).removeClass('active');
				console.log(this);
			} else {
				$(this).addClass('active');
				$(this).parent().siblings().find('button').removeClass('active');
				alm_is_animating = true;			
			};
			
			if ( $(this).hasClass('theme-button') && $(this).hasClass('active') ) {
				$('.filter-buttons button.all').addClass('show');
			} else {
				$('.filter-buttons button.all').removeClass('show');
			}
				   
		   // Set filters 
			var transition = 'fade';
			var speed = 250;
			var data  = this.dataset;
			
			// Call core Ajax Load More `filter` function
			ajaxloadmore.filter(transition, speed, data);
		}
		 
		// Event Handlers
		var filter_buttons = document.querySelectorAll('.filter-buttons button');
		if(filter_buttons){
			[].forEach.call(filter_buttons, function(button) {
				button.addEventListener('click', filterClick);
			});
		}
		 
		// Callback
		window.almFilterComplete = function(){      
		   alm_is_animating = false; // Clear animation flag
/*
			var $count = $('.post-grid article').length;			
			$('.post-grid').attr('data-count', $count)	
*/	   
		};

	}
	
})(jQuery);


