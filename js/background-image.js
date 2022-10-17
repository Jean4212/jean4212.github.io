/* Supersized Fullscreen Background Slideshow */
(function($) {
	"use strict";
	
	$(function(){
		$.supersized({
			horizontal_center		:	1,			// Horizontal center

			// Functionality
			keyboard_nav			:	0,			// Disable keyboard nav
			slide_interval          :   10000,		// Length between transitions

			transition				:	1,			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	1000,		// Speed of transition

			// Components
			slide_links				:	'false',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides					:	[			// Slideshow Images
					{image : 'img/background/bg-1.jpg', title : '', thumb : '', url : ''},
					{image : 'img/background/bg-2.jpg', title : '', thumb : '', url : ''},
					{image : 'img/background/bg-3.jpg', title : '', thumb : '', url : ''}
			]
		});
	});
})(jQuery);