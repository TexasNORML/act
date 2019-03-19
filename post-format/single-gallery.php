                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="post wow animated fadeIn">

                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
						<?php if(get_post_meta( get_the_ID(), 'klb_show_authorname', true ) == true){?>
                        <p class="lead">by <a href="#"><?php the_author(); ?></a></p>
                        <div class="accent-rule-short-left"></div>
                        <?php } ?>
                        <ul class="post-details list-unstyled list-inline">
							<?php if(get_post_meta( get_the_ID(), 'klb_show_backtolist', true ) == true){?>
								<li><p> <a class="back-to-list" href="<?php echo esc_url(get_permalink( get_option( 'page_for_posts' ) )); ?>">
								<span class="bta-icon"><i class="fa fa-th-list"></i></span> 
								<span class="bta-text"><?php esc_html_e('Back to list','act'); ?></span></a> 
                                </p></li>
                            <?php } ?>
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
                        <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
                        <div class="image"> 
							<?php $images = rwmb_meta( 'klb_blogitemslides', 'type=image_advanced&size=medium' ); ?>
							<?php if($images) { ?>
								<?php wp_enqueue_style('owlcarousel');  ?>
								<?php wp_enqueue_style('owltheme');  ?>
								<?php wp_enqueue_script('owlcarousel');  ?>
								<?php wp_enqueue_script('blog-carousel');  ?>
								<div class="blog-slider owl-carousel">
									<?php  foreach ( $images as $image ) { ?>
										<div class="item"><img src="<?php echo esc_url($image['full_url']); ?>" alt="blogimage"></div>
									<?php } ?>
								</div>
							<?php } ?>
                        </div>
                        <?php } ?>
                        <div class="act-post"><?php the_content(); ?></div>
                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                        <hr>

                  </div>   
                 </article><!-- End of the Standard Post -->


