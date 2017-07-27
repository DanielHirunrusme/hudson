/**
*	@desc mousewheel the right container when over a fixed element
*/

var mousewheel = require('jquery-mousewheel')($),
	settings = require('modules/settings');


module.exports = function( el ) {
	
	var $el = $(el),
		$window = $(window);
	
	
		$window.on('mousewheel', winWheel);
		
		
		function winWheel(e) {
			//console.log(e.deltaY)
			
			if(e.clientX <= $el.position().left + $el.outerWidth() && e.clientX >= $el.position().left && !settings.isMobile) {
				//console.log('wheeling over element');
				
				$(settings.scrollContainer).scrollTop( $(settings.scrollContainer).scrollTop() - e.deltaY )
			}
		}
	
		
}; 
  