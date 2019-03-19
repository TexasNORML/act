<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
get_template_part('menu_section1');
 ?>
     	<section id="events"> 
    	     <div class="bg-white">
        	   <div class="inner-container overlay-light row-of-columns">
                    <div class="text-black">
                        <div class="row">
	  
	
		<?php tribe_events_before_html(); ?>
		<?php tribe_get_view(); ?>
		<?php tribe_events_after_html(); ?>
	 <!-- #tribe-events-pg-template -->
                   

                    					   
                   </div>             
                </div>				
              </div>
           </div>
 	  </section><!--=== END events ===-->	
<?php get_footer(); ?>