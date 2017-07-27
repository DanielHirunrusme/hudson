var settings = require( "modules/settings" ),
	throttle = require("modules/throttle"),
	menu = require("modules/menu"),
	footer = require("modules/footer"),
	barba = require("modules/barba")

	
module.exports = function( el ) {
		var $el = $( el ),
		$window = $( window ),
		resizeTimer;
 
 
 	    init();
 
		function init(){
			
			barba.init();
			menu.init();
			footer.init();
			
			console.log('body init');
			
			
			$window.on('resize', winResize);
		}
		
		function animOff(){
			$('body').addClass('noTransition');
		}
		
		function animOn(){
			$('body').removeClass('noTransition');
		}
		
		function winResizeEnd(){
			animOn();
		}
		
		function winResize(){
			clearTimeout(resizeTimer);
			animOff();
			
			resizeTimer = setTimeout(function(){
				winResizeEnd();
			}, 300);
		} 
		
};
  