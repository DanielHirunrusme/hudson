/**
*	@desc homeslideshow
*/

var throttle = require('modules/throttle'),
	settings = require('modules/settings');


module.exports = function( el ) {
	
	var $el = $(el),
		$window = $(window),
		curr = 0,
		total = $('.home-slideshow-image').length - 1,
		slideshowTimer;
	
		init();
		
		function init(){
			console.log('home-slideshow init')
			//setContainers();
			initSlideshow();
			$window.on('resize', throttle(setContainers, 300));
		}
		
		function setContainers(){
			for(var i=0; i<total; i++) {
				//$('.home-slideshow-image').eq(i).css('left', $window.width() * i);
			}
		}
		
		function initSlideshow(){
			slideshowTimer = setTimeout(nextImage, 5000);
			settings.timers.push(slideshowTimer);
		}
		
		function nextImage(){
			clearTimeout(slideshowTimer);
			curr = curr < total ? curr + 1 : 0;
			
			$('.home-slideshow-image.active').removeClass('active');
			$('.home-slideshow-image').eq(curr).addClass('active');
			
			slideshowTimer = setTimeout(nextImage, 5000);
		}
		
		function winResize(){
			//setContainers();
		}
		
	
		
}; 
  