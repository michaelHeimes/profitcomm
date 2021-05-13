(function($) {
	'use strict';
	
// 	Allow tabbing through nav
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	

        	
// 	Banner spacing for pages with banner bg images

	if ( $('body').hasClass('header-bg-img') ) {

		function setPadding() {
			var $navHeight = $('header.header').height();
			var $bannerTopPadding = $('header.article-header').css('padding-top');
			var $homeHeroTopPadding = $('.home-hero').css('padding-top');
			var $newHHPadding = parseInt($navHeight, 10) + parseInt($homeHeroTopPadding, 10) + 'px';
			var $newPadding = parseInt($navHeight, 10) + parseInt($bannerTopPadding, 10) + 'px';
						
			$('.home-hero').css('padding-top', $newHHPadding);
			$('header.article-header').css('padding-top', $newPadding);
			
		};
		setPadding();
		
		
		$(function() {
		    var header = $('header.header');
		    $(window).scroll(function() {
		        var scroll = $(window).scrollTop();
		
		        if (scroll >= 10) {
		            header.removeClass('clear-header').addClass("dark-header");
		        } else {
		            header.removeClass('dark-header').addClass('clear-header');
		        }
		    });
		    
		    if(window.scrollY >= 10){
			    header.removeClass('clear-header').addClass("dark-header");
		    }	    
		    
		});
		
	}
	
	
// 	Mobile Navigation
    var $window = $(window);
    var $mobileNav = $('div#off-canvas');

	$(document).on('click', 'a#mobile-toggle', function(){
		$(this).toggleClass('clicked');
		$('body').toggleClass('mobile-menu-open');
		$mobileNav.fadeToggle(300);
	});	
	
    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 991) {
            $mobileNav.fadeOut(300);
            $('a#mobile-toggle').removeClass('clicked');
            $('body').removeClass('mobile-menu-open');
        }
    }
    checkWidth();
    $(window).resize(checkWidth);
	
	
// 	Slider
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
	
// 	Wrap each mobile nav link with span for underlin effect
	$('.off-canvas #offcanvas-nav li a').wrapInner('<span></span>')


// 	News and Insights Archives
	if ( $('body').hasClass('page-template-page-insights') || $('body').hasClass('page-template-page-news') ) {
		
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
			$('.ajax-load-more-wrap').addClass('insights-cards-wrap');

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
	
	if ($('body').hasClass('page-template-page-contact')) {
		$('.ginput_container_name label').append('<span class="gfield_required">*</span>');
	}
	
})(jQuery);


