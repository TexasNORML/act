<?php
/**
 * archive.php
 * @package WordPress
 * @subpackage Act
 * @since Act 2.0
 */
?>

<?php get_header(); ?>

     	<section id="blog" class="subpage bg-white">       

    	 <div class="container text-black">

		    <h2 class="text-uppercase color-dark text-bold">
			   <?php the_archive_title(); ?>
			</h2>         
				
			 <?php if( get_option_tree( 'act_layout_set' ) == 'left-sidebar') { ?>
				<div class="row">
				
                      <div class="col-lg-4">
						  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
							
							<?php get_sidebar(); ?>
							   
						  <?php } ?>
					  </div>
					  <div class="col-lg-8 col-left-responsive-fix posts-column">
					   <?php if (have_posts()) : while (have_posts()) : the_post();  

							get_template_part( 'post-format/content', get_post_format() ); 

						endwhile; 

						 get_template_part( 'post-format/pagination' ); 

						 else : ?>

						<h2><?php esc_html_e('No Posts Found', 'act') ?></h2>

						<?php

						endif; 

						wp_reset_query();

						?> 
				   </div>
				</div>

			 <?php } elseif( get_option_tree( 'act_layout_set' ) == 'full-width') { ?>

				<div class="row">
					  <div class="col-lg-12 col-left-responsive-fix posts-column">
					   <?php if (have_posts()) : while (have_posts()) : the_post();  

							get_template_part( 'post-format/content', get_post_format() ); 

						endwhile; 

						 get_template_part( 'post-format/pagination' ); 

						 else : ?>

						<h2><?php esc_html_e('No Posts Found', 'act') ?></h2>

						<?php

						endif; 
						
						wp_reset_query();

						?> 
				   </div>
				</div>

			<?php } else { ?>
				<div class="row">
					  <div class="col-lg-8 col-left-responsive-fix posts-column">
					   <?php if (have_posts()) : while (have_posts()) : the_post();  

							get_template_part( 'post-format/content', get_post_format() ); 

						endwhile; 

						 get_template_part( 'post-format/pagination' ); 

						 else : ?>

						<h2><?php esc_html_e('No Posts Found', 'act') ?></h2>

						<?php

						endif; 

						wp_reset_query();

						?> 
				   </div>
				   <div class="col-lg-4">
					  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
						
						<?php get_sidebar(); ?>
						   
					  <?php } ?>
				   </div>
				</div>
		   <?php } ?>
          </div><!-- /container -->
 	  </section><!--=== END blog ===-->


<?php get_footer(); ?>