/* Fullscreen Video Background */
(function($) {
	"use strict";
	
	/* Check if website opened on mobile devices and fallback video to image background on mobile devices */
	if(jQuery.browser.mobile){
		
		var bgImage = $(".player").data('mobile-fallback');
		
		/* Use fullscreen image */
		$('#header').css({
			"background": "transparent url(" + bgImage + ") no-repeat center center fixed",
			"-webkit-background-size": "cover",
			"-moz-background-size": "cover",
			"-o-background-size": "cover",
			"background-size": "cover"
		});
	}else{
		
		/* Not mobile, use YTPlayer Fullscreen Video Background */
		$(".player").mb_YTPlayer();
	}
})(jQuery);
