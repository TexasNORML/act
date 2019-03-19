      <!--=== FOOTER ===-->
      <section id="footer">
			  <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
				  <div class="row footer-top row-of-columns">
					  <div class="inner-container-small wow animated fadeIn">
						  <?php dynamic_sidebar( 'footer-1' ); ?>
						  <div class="clearfix"></div>
					   </div>
				  </div>
			  <?php } ?>			  
              <div class="row footer-bottom">
                  <div class="inner-container-small wow animated fadeIn">
                      <div class="col-lg-6 col-sm-12 left"><p><small class="transparent-50">
									<?php  $allowed_html = array(
										'a' => array(
											'href' => array(),
											'title' => array(),
											'class' => array(),
                                            'target' => array('_blank', '_top'),
										), );	?>						
								     <?php echo  wp_kses(ot_get_option( 'act_copyright1' ),$allowed_html); ?></small></p></div>
                      <div class="col-lg-3 col-sm-12 pull-right">
                           <div class="list-social transparent-50 pull-right">
                                <ul class="list-inline">
                              <?php 
	                             	$clients = ot_get_option( 'act_socialicons' );
		                            $clientslist = ot_get_option( 'act_socialicons' );

		                            if ($clientslist) { ?>
                
                                    <?php foreach($clientslist as $key => $value) {
					 	              echo '<li>							';
					 	               if ($value['act_socialicon']) { 
					 		             echo '<a href="'.esc_url($value['act_sociallink']).'"><i class="fa fa-'.esc_attr($value['act_socialicon']).' transparent"></i></a>';
					 	               } else {
						 	             echo '';
					 	                      }
					 	                 echo '</li>';
				                      } ?>		
	                                <?php } ?> 
                                </ul>
                            </div>
                      </div>
                  </div>
              </div><!-- / end Row 2 -->
        </section><!--=== END Footer ===-->

         <style type="text/css">
        <?php echo ot_get_option( 'act_css' ); ?>
        </style>

      
        <script type="text/javascript">
        <?php echo ot_get_option( 'act_js' ); ?>
        </script>


        <?php echo ot_get_option( 'act_googleanalitycs' ); ?>

    <?php wp_footer(); ?>

	</body>
</html>