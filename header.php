<?php
/**
 * The template for displaying the header
 * @subpackage Act
 * @since Act 2.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- preloader -->
    <div id="preloader-wrapper">
        <div class="preloader">
        </div>
    </div><!-- / preloader -->
        
    <!--=== NAVIGATION ===-->  
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
          <div class="container-wide">
                  <div class="navbar-header">
                      <ul class="list-unstyled list-inline pull-right">
                          <li>
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                                  <i class="fa fa-bars"></i>
                              </button>     
                          </li>
						 <?php if( get_option_tree( 'donate_button' ) == 'on') { ?>
						    <?php if( get_option_tree( 'donate_button_type' ) == 'default_type') { ?>
								<li id="donate-button-responsive" class="donate bg-brand-tertiary bg-br">
								  <a  href="<?php echo esc_url(ot_get_option('act_donate_button_url')); ?>" class="nav-show-hide"><?php echo esc_html(ot_get_option('act_donate_button_text')); ?></a>
								</li>
							<?php } else { ?>
							   <li id="donate-button-responsive" class="donate bg-brand-tertiary bg-br">
								  <a  href="#donateModal" class="nav-show-hide"><?php echo esc_html(ot_get_option('act_donate_button_text')); ?></a>
							   </li>
							<?php } ?>
						<?php  } ?>     
                      </ul>         
                        <?php if (ot_get_option( 'act_logo' )) { ?>
                          <a class="navbar-brand-home navbar-brand" title="<?php bloginfo('name'); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(ot_get_option( 'act_logo' )); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                        <?php } elseif (ot_get_option( 'act_logotext' )) { ?>
                          <a class="navbar-brand-home navbar-brand klb-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php echo esc_html(ot_get_option( 'act_logotext' )); ?></a>
                        <?php } else { ?>
                          <a class="navbar-brand-home navbar-brand klb-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php esc_html_e('Act','act'); ?></a>
                        <?php } ?>

                  </div>
  
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  
					<?php 
						wp_nav_menu(array(
						  'theme_location' => 'main-menu',
						  'container' => '',
						  'fallback_cb' => 'show_top_menu',
						  'menu_id' => '',
						  'menu_class' => 'nav navbar-nav',
						  'echo' => true,
						  'walker' => new act_description_walker(),
						  'depth' => 0 
						)); 
					   ?>
					 
                   <!-- navbar donation button -->
					 <?php if( get_option_tree( 'donate_button' ) == 'on') { ?>
					   <?php if( get_option_tree( 'donate_button_type' ) == 'default_type') { ?>
						   <div id="donate-homepage" class="donate bg-brand-tertiary pull-right">
							  <a  href="<?php echo esc_url(ot_get_option('act_donate_button_url')); ?>"><?php echo esc_html(ot_get_option('act_donate_button_text')); ?></a>
						   </div>
						<?php } else { ?>
						   <div id="donate-homepage" class="donate bg-brand-tertiary pull-right">
							  <a  href="#donateModal"><?php echo esc_html(ot_get_option('act_donate_button_text')); ?></a>
						   </div>
						<?php } ?>
					<?php  } ?>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav><!--=== END Navigation ===-->  

      <!--=== DONATE modal ===-->
      <?php if( ot_get_option( 'donate_button' ) == 'on' && ot_get_option('donate_button_type') == 'modal_type') { ?>
		<div class="remodal" data-remodal-id="donateModal">
		  <button data-remodal-action="close" class="remodal-close"></button>
          <?php echo do_shortcode(get_option_tree('act_donate_modal_content')); ?>                    
		</div>
	  <?php } ?>