<?php
/**
 * Day View Loop
 * This file sets up the structure for the day loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/loop.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

global $more, $post, $wp_query;
$more = false;
$current_timeslot = null;

?>

<div class="col-lg-8 col-left-responsive-fix posts-column">
	<div class="tribe-events-day-time-slot">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'tribe_events_inside_before_loop' ); ?>

		<?php if ( $current_timeslot != $post->timeslot ) :
		$current_timeslot = $post->timeslot; ?>
	</div>
	<!-- .tribe-events-day-time-slot -->

	<div class="tribe-events-day-time-slot">
		<h5><?php echo esc_html($current_timeslot); ?></h5>
		<?php endif; ?>

		<!-- Event  -->
	<div class="panel">
	   <div class="panel-body">    
           <div class="item active">       
              <div class="col-lg-12 row-of-columns">
		<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>">
			<?php tribe_get_template_part( 'day/single', 'event' ) ?>
		</div>
		   </div>
		 </div>
	   </div>	
     </div>
		<!-- .hentry .vevent -->


		<?php do_action( 'tribe_events_inside_after_loop' ); ?>
	<?php endwhile; ?>

	</div>
	<!-- .tribe-events-day-time-slot -->
</div><!-- .tribe-events-loop -->
<div class="col-lg-4 col-left-responsive-fix posts-column">
<?php get_sidebar(); ?>
</div>
