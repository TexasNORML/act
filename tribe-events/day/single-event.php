<?php
/**
 * Day View Single Event
 * This file contains one event in the day view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

$venue_details = array();

if ( $venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;
}

if ( $venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;
}
// Venue microformats
$has_venue = ( $venue_details ) ? ' vcard' : '';
$has_venue_address = ( $venue_address ) ? ' location' : '';
?>



<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'medium' ) ?>

<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ) ?>
<div class="col-md-9">

			 <!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h3>
			<a class="url" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h3>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		<div class="tribe-events-event-meta vcard">
			<div class="author <?php echo $has_venue_address; ?>">

				<!-- Schedule & Recurrence Details -->
								<ul class="post-details list-unstyled list-inline ">
									<li><p><span class="fa fa-clock-o"></span><?php echo tribe_events_event_schedule_details() ?></p></li>
							

				<?php if ( $venue_details ) : ?>
					<!-- Venue Display Info -->
					
						  <li><?php echo implode( ', ', $venue_details ); ?></li>

					</ul> <!-- .tribe-events-venue-details -->
				<?php endif; ?>

			</div>
		</div><!-- .tribe-events-event-meta -->
		<?php do_action( 'tribe_events_after_the_meta' ) ?>	

<p>	<?php echo tribe_events_get_the_excerpt() ?> </p>

			<!-- Event Cost -->
		<?php if ( tribe_get_cost() ) : ?>
			<div class="tribe-events-event-cost">
				<span><?php echo tribe_get_cost( null, true ); ?></span>
			</div>
		<?php endif; ?>
	<a href="<?php echo tribe_get_event_link() ?>" class="btn btn-black btn-xs" rel="bookmark"><?php _e( 'Event Details', 'tribe-events-calendar' ) ?> &raquo;</a>

</div><!-- .tribe-events-list-event-description -->
<?php do_action( 'tribe_events_after_the_content' ) ?>
