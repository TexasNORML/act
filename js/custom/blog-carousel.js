jQuery(document).ready(function( $ ) {
 "use strict";
 
	  $(".blog-slider").owlCarousel({
		  
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
		  items : 1,
		  itemsDesktop : [1199,1],
		  itemsDesktopSmall : [979,1],
		// Navigation
		navigation : true,
		navigationText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	 
		//Pagination
		pagination : false
	 
	  });

});