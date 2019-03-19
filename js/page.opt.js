    jQuery(document).ready(function() {
            /**
             * Adjust visibility of the meta box at startup
            */
			
            if((jQuery('#donate_button_type').val() == 'default_type')) {
                // show the meta box
                jQuery('#setting_act_donate_button_url').fadeIn(500).show();				
            } else {
                // hide your meta box
                jQuery('#setting_act_donate_button_url').fadeIn(500).hide();
				
            }


            /**
             * Online Live adjustment of the meta box visibility
            */
            jQuery('#donate_button_type').live('change', function(){
                if((jQuery(this).val() == 'default_type')) {
                    // show the meta box
                    jQuery('#setting_act_donate_button_url').fadeIn(500).show();				
                } else {
                    // hide your meta box
                    jQuery('#setting_act_donate_button_url').fadeIn(500).hide();						
                }
            }); 



			
});