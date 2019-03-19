<ul class="pager wow animated fadeIn">
	 <?php act_pagination(); ?> 
         <?php $args = array(
                    'base'         => '%_%',
                    'format'       => '?page=%#%',
                    'total'        => 1,
                    'current'      => 0,
                  );
                ?>

         <?php echo paginate_links( $args ) ?> 
</ul>
