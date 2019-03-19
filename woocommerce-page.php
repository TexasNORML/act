<?php
/**
 * woocommerce-page.php
 * @package WordPress
 * @subpackage Act
 * @since Act 2.0
 */
?>

<?php get_header(); ?>

<section id="blog" class="subpage bg-white"> 

    	 <div class="container text-black">

        	<div class="row">

                   <div class="col-xs-12 col-sm-4 col-lg-3 side hidden-xs">
               <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Shop Sidebar')): endif; ?>

                   </div>

                   <div class="col-xs-12 col-sm-8 col-lg-9 main">
                     <?php woocommerce_content(); ?>
                   </div>



   </div>
</div>
</section>            
<?php get_footer(); ?>