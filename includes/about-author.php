<?php if(get_post_meta( get_the_ID(), 'klb_show_authorname', true ) == true){?>
                 <div id="about-author" class="media wow animated fadeIn">
                      <h3>About the Author</h3>
                      <br>
                           <div class="avatar-md pull-left">
                              <?php
		                         $author_bio_avatar_size = apply_filters( 'act_author_bio_avatar_size', 56 );

	                            	echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
	                          ?>
                          </div>
                          <div class="description">
                              <h5><?php echo get_the_author(); ?></h5>
                              <p><?php the_author_meta( 'description' ); ?></p>
                          </div>
                          <div class="pull-right"><a href="#" class="wrote-posts-count"><i class="fa fa-comments"></i><span><a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				          <?php printf( __( 'All posts by %s', 'act' ), get_the_author() ); ?>
			              </a></span></a></div>

                  </div><!-- / end about author -->
      			  <hr>
<?php } ?>