<?php
/**
 * single-portfolio.php
 * @package WordPress
 * @subpackage Act
 * @since Act 1.0
 * 
 */
 ?>

<?php while(have_posts()) : the_post(); ?>

<div class="cbp-l-project-title"><?php the_title(); ?></div>

		<?php if ( has_post_format( 'audio' )) { ?>

		     <?php echo get_post_meta(get_the_ID(), 'klb_projectaudiourl', true); ?>

		<?php } elseif( has_post_format( 'gallery' )) { ?>

			 <?php $images = rwmb_meta( 'klb_project_item_slides', 'type=image_advanced&size=medium' ); ?>
			 
			 <?php if($images) { ?>
				<div class="cbp-slider">
					<ul class="cbp-slider-wrap">
					<?php  foreach ( $images as $image ) {
                        $imagem = aq_resize( $image['full_url'], 1200, 800, true, true, true ); 
						$title=get_the_title();
						echo "<li class='cbp-slider-item'> <img src='".$imagem."' alt='{$title}'> </li>";
					} ?>
					</ul>
				</div>
			 <?php } ?>

		<?php } elseif( has_post_format( 'video' )) { ?>

			  <?php if (get_post_meta( get_the_ID(), 'klb_project_video_type', true ) == 'vimeo') {  
						  echo '<div class="js-video widescreen"> <iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'klb_project_video_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';  
					  }  
					  else if (get_post_meta( get_the_ID(), 'klb_project_video_type', true ) == 'youtube') {  
						  echo '<div class="js-video widescreen"> <iframe width="100%" height="480" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'klb_project_video_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe></div>';  
					  } 
			  ?>

		<?php } else { ?>

			  <?php 
				 $att=get_post_thumbnail_id();
				 $image_src = wp_get_attachment_image_src( $att, 'full' ); 
				 $image_src = $image_src[0]; 
			  ?>
				<img src="<?php echo esc_url($image_src); ?>">
		<?php } ?>

<div class="cbp-l-project-container">
    <div class="cbp-l-project-desc">
        <div class="cbp-l-project-desc-text">
           <?php the_content(); ?>
        </div>
    </div>
</div>

<br><br><br>

<?php endwhile; ?>