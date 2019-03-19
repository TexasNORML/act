<?php
/**
 * List View Loop
 * This file sets up the structure for the list loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/loop.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php
global $more;
$more = false;
?>
	<?php while ( have_posts() ) : the_post(); ?>

		<!-- Month / Year Headers -->
		<?php tribe_events_list_the_date_headers(); ?>
		<?php endwhile; ?>
<div class="col-lg-8 col-left-responsive-fix posts-column">
                    			
	<?php while ( have_posts() ) : the_post(); ?>

		<?php do_action( 'tribe_events_inside_before_loop' ); ?>


	<div class="panel">
	   <div class="panel-body">    
           <div class="item active">       
              <div class="col-lg-12 row-of-columns">
		<!-- Event  -->
		<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>">
			<?php tribe_get_template_part( 'list/single', 'event' ) ?>
		</div><!-- .hentry .vevent -->
		   </div>
		 </div>
	   </div>	
     </div><!-- .tribe-events-loop -->

		<?php do_action( 'tribe_events_inside_after_loop' ); ?>

	<?php endwhile; ?>

</div>
<div class="col-lg-4 col-left-responsive-fix posts-column">
                    			
<?php get_sidebar(); ?>
</div>