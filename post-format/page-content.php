<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post wow animated fadeIn">

		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
		<div class="image"> 
			<div class="effects-container effects-enlarge">
				<a href="javascript:void(0)"><?php the_post_thumbnail('post-thumb'); ?></a>
			</div>
		</div>
		<?php } ?>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

  </div>   
 </article><!-- End of the Standard Post -->


