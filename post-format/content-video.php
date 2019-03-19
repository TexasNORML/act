                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="post wow animated fadeIn">

                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
						<?php if(get_post_meta( get_the_ID(), 'klb_show_authorname', true ) == true){?>
                        <p class="lead">by <a href="#"><?php the_author(); ?></a></p>
                        <div class="accent-rule-short-left"></div>
                        <?php } ?>
                        <ul class="post-details list-unstyled list-inline">
							<?php if(get_post_meta( get_the_ID(), 'klb_show_date', true ) == true){?>
                            <li><p><span class="fa fa-clock-o"></span> Posted on <?php the_time('F j, Y') ?></p></li>
                            <?php } ?>
                            <li><p><?php the_tags( '<span class="fa fa-bookmark"></span> ', ',&nbsp;  ', ' '); ?></p></li>
							<?php if ( comments_open() ) : ?>
                            <li><p><span class="fa fa-comment"></span> <?php comments_popup_link( __( 'Leave a comment', 'act' ), __( '1 Comment', 'act' ), __( '% Comments', 'act' ) ); ?></p></li>
							<?php endif; ?>
                            <?php if(get_post_meta( get_the_ID(), 'klb_show_category', true ) == true){?>
							<li><p><?php _e('<span class="fa fa-book"></span> ', 'act'); the_category(' / '); ?></p></li>
                            <?php } ?>
                        </ul>

                        <div class="image"> 
                        <?php global $blog_post_type; ?>
                        <div class="flex-video"> 
							<?php  
							if (get_post_meta( get_the_ID(), 'klb_blog_video_type', true ) == 'vimeo') {  
							  echo '<iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'klb_blog_video_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="960" height="500"  webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';  
							}  
							else if (get_post_meta( get_the_ID(), 'klb_blog_video_type', true ) == 'youtube') {  
							  echo '<iframe width="960" height="474" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'klb_blog_video_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" allowfullscreen></iframe>';  
							}  
							else {  
								echo ' '.get_post_meta( get_the_ID(), 'klb_blog_video_embed', true ).' '; 
							}  
							?> 
                        </div>

                        <?php the_excerpt(); ?>
                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                        <br>
                        <hr>
                  </div>   
                 </article><!-- End of the Standard Post -->


