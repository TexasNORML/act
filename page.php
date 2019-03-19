<?php
/**
 * page.php
 * @package WordPress
 * @subpackage Act
 * @since Act 2.0
 */
?>

<?php get_header(); ?>


  <?php while(have_posts()) : the_post(); ?>

   <?php if ( class_exists( 'woocommerce' ) ) { ?>
       <?php if(is_checkout() || is_cart() || is_account_page()) { ?>

			<section id="blog" class="subpage bg-white"> 
			    	 <div class="container text-black">
			        	<div class="row">
	                          <?php the_content(); ?>
			             </div>
			         </div>
			</section> 
	  <?php } elseif(function_exists('vc_set_as_theme')) { ?>
			<section id="blog" class="subpage bg-white"> 
	             <?php the_content(); ?>
			</section> 
      <?php } else { ?>
			<section id="blog" class="subpage bg-white"> 
			    	 <div class="container text-black">
			        	<div class="row">
						      <h2><?php the_title(); ?></h2>
	                          <?php the_content(); ?>
                         	  <?php comments_template(); ?> 
			             </div>
			         </div>
			</section>

	  <?php } ?>
   <?php } elseif(function_exists('vc_set_as_theme')) { ?>
			<section id="blog" class="subpage bg-white"> 
	             <?php the_content(); ?>
			</section> 
   <?php } else { ?>
			<section id="blog" class="subpage bg-white"> 
			    	 <div class="container text-black">
			        	<div class="row">
						      <h2><?php the_title(); ?></h2>
	                          <?php the_content(); ?>
                         	  <?php comments_template(); ?> 
			             </div>
			         </div>
			</section>

   <?php } ?>
   <?php endwhile; ?>
<?php get_footer(); ?>