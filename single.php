<?php
/**
 * single.php
 * @package WordPress
 * @subpackage Act
 * @since Act 1.7
 */
?>

<?php get_header(); ?>


<?php
   get_template_part('menu_section1'); ?>


     	<section id="blog" class="subpage bg-white"> 
    	 <div class="container text-black">

			 <?php if( get_option_tree( 'act_layout_set' ) == 'left-sidebar') { ?>
				<div class="row">
				
                      <div class="col-lg-4">
						  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
							
							<?php get_sidebar(); ?>
							   
						  <?php } ?>
					  </div>
					  <div class="col-lg-8 col-left-responsive-fix posts-column">
					   <?php if (have_posts()) : while (have_posts()) : the_post();  

							get_template_part( 'post-format/single', get_post_format() ); 

						endwhile; 

						 else : ?>

						<h2><?php esc_html_e('No Posts Found', 'act') ?></h2>

						<?php

						endif; 

						wp_reset_query();

						?>
                        <?php get_template_part('includes/about-author'); ?>

                        <?php comments_template(); ?> 
				   </div>
				</div>

			 <?php } elseif( get_option_tree( 'act_layout_set' ) == 'full-width') { ?>

				<div class="row">
					  <div class="col-lg-12 col-left-responsive-fix posts-column">
					   <?php if (have_posts()) : while (have_posts()) : the_post();  

							get_template_part( 'post-format/single', get_post_format() ); 

						endwhile; 

						 else : ?>

						<h2><?php esc_html_e('No Posts Found', 'act') ?></h2>

						<?php

						endif; 
						
						wp_reset_query();

						?> 

		                <?php get_template_part('includes/about-author'); ?>
		
		                <?php comments_template(); ?>
				   </div>
				</div>

			<?php } else { ?>
				<div class="row">
					  <div class="col-lg-8 col-left-responsive-fix posts-column">
					   <?php if (have_posts()) : while (have_posts()) : the_post();  

							get_template_part( 'post-format/single', get_post_format() ); 

						endwhile; 

						 else : ?>

						<h2><?php esc_html_e('No Posts Found', 'act') ?></h2>

						<?php

						endif; 

						wp_reset_query();

						?>

                        <?php get_template_part('includes/about-author'); ?>

                        <?php comments_template(); ?> 
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