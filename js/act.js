// 
//
// Cleaned up with JSHint, a tool that helps to detect errors and potential
// problems in your JavaScript code.
// http://www.jshint.com/
// 
//  
//
jQuery.noConflict();

jQuery( document ).ready(function( $ ) {
    "use strict";


new WOW().init();
    // Define your library strictly...

    // Preloader
    var $preloader = $("#preloader-wrapper");
    $preloader.fadeOut();

    //datepicker
    $('#datetimepicker2').datetimepicker({
        language: 'ru'
    });

    //Initialize Carousel
    $('#about .carousel , #events .carousel').carousel({
        interval: 7000
    });


    // jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 100) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });



    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li.page-scroll a.not-dropdown').click(function() {
        $('.navbar-toggle:visible').click();
    });

    //show hide donate button
    $(window).scroll(function() {
        showhideDonate();
    });

    $(window).resize(function() {
        showhideDonate();
    });
	
	$(window).resize(function() {
		// Full height Act Home Image
		$('.klbintro').innerHeight($(window).height()); 
		
	}).resize();

    $(function() {
        showhideDonate();
    });

    function showhideDonate() {
        if ($(window).width() >= 977 && $(".navbar").offset().top > 100) {
            $("#donate-homepage").show();
        } else {
            $("#donate-homepage").hide();
        }
    }

    //tiny scrollbar
    var $scrollbar = $("#custom-scrollbar-rec-news");
    $scrollbar.tinyscrollbar();




    //intialize jQuery countTo Plugin
    // start all the timers
    $('.timer').each(count);

    // restart a timer when a button is clicked
    $('.restart').click(function(event) {
        event.preventDefault();
        var target = $(this).data('target');
        count.call($(target));
        return false;
    });

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
        return false;
    }

    //Rotate toggle icon 
    $(function() {
        $('#contact-toggle h3').click(function() {
            $('#contact-toggle .collapse').toggle();
            $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up', 400);
            event.preventDefault();
        });
    });


    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('.page-scroll a.not-dropdown').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });



    //Modernizer touch
    $(document).ready(function() {
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e) {
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e) {
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function() {
                    $(this).addClass("hover");
                })
                // handle the mouseleave functionality
                .mouseleave(function() {
                    $(this).removeClass("hover");
                });
        }
        return false;
    });
	
    $(document).ready(function() {
		$( ".klb-about p" ).remove( "" );
		$( ".klb-process p:last-child" ).remove( "" );
		$( ".klb-process p:nth-child(1)" ).remove( "" );
		$( ".klb-contact p:last-child" ).remove( "" );

		$( ".vc_tta-tabs-list" ).addClass( "nav nav-tabs nav-justified" );
		$( ".vc_tta-tab" ).addClass( "large" );
    });
});