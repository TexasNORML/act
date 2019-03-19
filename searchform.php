<form action="<?php echo home_url(); ?>/" class="box-widget" id="searchform" method="get">
   <div class="input-group">
  <input class="form-control" type="text" id="s" name="s" value="<?php esc_html_e('Search For', 'act') ?>" onfocus="if(this.value=='<?php esc_html_e('Search For', 'act') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php esc_html_e('Search For', 'act') ?>';" autocomplete="off" />  
  <span class="input-group-btn">
   <button class="btn btn-black" type="submit" value="<?php esc_html_e('Search For', 'act') ?>" onfocus="if(this.value=='<?php esc_html_e('Search For', 'act') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php esc_html_e('Search For', 'act') ?>';" id="searchsubmit"><span class="fa fa-search"></span></button>
  </span>
   </div>
</form>
