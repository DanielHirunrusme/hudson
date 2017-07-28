var Instafeed = require("instafeed.js");


module.exports = function( el ) {
	
	var $el = $(el);
	
	var feed = new Instafeed({
	        get: 'user',
	        userId: '5439801',
	        clientId: '6ed34b4b3be94240810a7111ede3a4f9',
			accessToken: '5439801.1677ed0.a9079583b03b4f6a8c572e0f25409665'
	    });
		
	    feed.run();
		
};
