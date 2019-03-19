<?php
/**
 * 404.php
 * @package WordPress
 * @subpackage Act
 * @subpackage Act 1.7
 */
?>

<?php get_header(); ?>

<?php  get_template_part('menu_section1');   ?>

         <!--=== Intro ===-->
         <section class="hero bg-brand-primary">
            <div class="col-lg-12 inner-container wow animated fadeInDown text-center">
                   <span class="text-xl transparent-30"><?php _e('404', 'act') ?></span><br>
                   <h2><?php _e('Requested page not found! Let s head back to the ', 'act') ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-underline">Home Page.</a></h2>
                   <br><br><br><br><br><br>
                   
             </div>             
            <div class="clearfix"></div>
         </section><!--=== / END intro  ===-->
      
<?php get_footer(); ?>