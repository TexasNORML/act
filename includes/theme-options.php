<?php


if ( ! class_exists( 'OT_Loader' )){
	function ot_get_option() {
		return false;
	}

	function get_option_tree() {
		return false;
	}
}



/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'General Config'
      ),
	  
      array(
        'id'          => 'header_settings',
        'title'       => 'Header Settings'
      ),

      array(
        'id'          => 'color_settings',
        'title'       => 'Color Settings'
      ),

      array(
        'id'          => 'blog_layout',
        'title'       => 'Blog Layout'
      ),
	  
      array(
        'id'          => 'donate_settings',
        'title'       => 'Donate Button'
      ),
	  
      array(
        'id'          => 'google_fonts',
        'title'       => 'Google Fonts'
      ),

      array(
        'id'          => 'typography',
        'title'       => 'Typography'
      ),
	  
	  array(
        'id'          => 'social',
        'title'       => 'Social'
      ),
  	  
	  array(
        'id'          => 'map_settings',
        'title'       => 'Map Settings'
      ),
	  
      array(
        'id'          => 'copyright',
        'title'       => 'Footer / Copyright'
      )
 
    ),
    'settings'        => array(
      array(
        'label'       => esc_html__( 'Logo', 'act' ),
        'id'          => 'tab_logo',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
	array(
        'id'          => 'act_logo',
        'label'       => 'Logo Image',
        'desc'        => 'Upload your own logo.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'act_logo_first_size',
        'label'       => esc_html__( 'The size of the logo above', 'act' ),
        'desc'        => esc_html__( 'You can set logo width.', 'act' ),
        'std'         => '75',
        'type'        => 'numeric-slider',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '50,400,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'act_logo_second_size',
        'label'       => esc_html__( 'The size of the logo below', 'act' ),
        'desc'        => esc_html__( 'You can set logo width.', 'act' ),
        'std'         => '60',
        'type'        => 'numeric-slider',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '50,400,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

	  array(
        'id'          => 'act_logotext',
        'label'       => 'Logo Text',
        'desc'        => 'Add Logo Text',
        'std'         => 'Act',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	

      array(
        'label'       => esc_html__( 'Css', 'act' ),
        'id'          => 'tab_css',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
      array(
        'id'          => 'act_css',
        'label'       => esc_html__('Additional CSS','act'),
        'desc'        => 'Additional css here (optional)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
      array(
        'label'       => esc_html__( 'Js', 'act' ),
        'id'          => 'tab_js',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
       array(
        'id'          => 'act_js',
        'label'       => esc_html__('Additional JS','act'),
        'desc'        => 'Additional js here (optional)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Genearal', 'act' ),
        'id'          => 'general_color_head',
        'type'        => 'tab',
        'section'     => 'header_settings'
      ),

	  array(
        'id'          => 'act_header_background',
        'label'       => 'Header Background Color',
        'desc'        => 'Select Background Color For Header',
        'std'         => '#000',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'act_header_font',
        'label'       => 'Header Font Color',
        'desc'        => 'Select Font Color For Header',
        'std'         => '#fff',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Hover', 'act' ),
        'id'          => 'hover_color_head',
        'type'        => 'tab',
        'section'     => 'header_settings'
      ),

	  array(
        'id'          => 'act_header_hover_bg',
        'label'       => 'Header Hover Background Color',
        'desc'        => 'Select Background Color For Menu Items',
        'std'         => '#364244 ',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'act_header_hover_font',
        'label'       => 'Header Hover Font Color',
        'desc'        => 'Select Hover Color For Header',
        'std'         => '#fff',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Regular', 'act' ),
        'id'          => 'regular_color',
        'type'        => 'tab',
        'section'     => 'color_settings'
      ),

	  array(
        'id'          => 'act_main_color',
        'label'       => 'One :Select Color',
        'desc'        => 'One Color Option',
        'std'         => '#ec601c',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ), 

	  array(
        'id'          => 'act_second_color',
        'label'       => 'Second: Select  Color',
        'desc'        => 'Second Color Option',
        'std'         => '#64bf9e',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'act_link_color',
        'label'       => 'Link Color',
        'desc'        => 'Set a color for links',
        'std'         => '#64bf9e',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),

      array(
        'label'       => esc_html__( 'Hover', 'act' ),
        'id'          => 'hover_color',
        'type'        => 'tab',
        'section'     => 'color_settings'
      ),

	  array(
        'id'          => 'act_main_color_hover',
        'label'       => 'One: Select Hover Color',
        'desc'        => 'One Hover Color Option',
        'std'         => '#ad420e',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
 

	  array(
        'id'          => 'act_second_color_hover',
        'label'       => 'Second: Select Hover Color',
        'desc'        => 'Second Color Hover Option',
        'std'         => '#378669',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ), 

	  array(
        'id'          => 'act_link_color_hover',
        'label'       => 'Link Color Hover',
        'desc'        => 'Set a color hover-over for links',
        'std'         => '#378669',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
      ),

      array(
        'id'          => 'act_layout_set',
        'label'       => esc_html__( 'Blog Layout', 'act' ),
        'desc'        => esc_html__( 'Left Sidebar - Right Sidebar - Full Width Sections', 'act' ),
        'std'         => 'right-sidebar',
        'type'        => 'radio-image',
        'section'     => 'blog_layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  

      array(
        'label'       => esc_html__( 'General', 'act' ),
        'id'          => 'tab_donate_general',
        'type'        => 'tab',
        'section'     => 'donate_settings'
      ),

      array(
        'id'          => 'donate_button',
        'label'       => esc_html__( 'On/Off Donate Button', 'act' ),
        'desc'        => 'Disable or Enable Donate Button on Primary Menu',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),


	  array(
        'id'          => 'act_donate_button_text',
        'label'       => esc_html('Name of Button','act'),
        'desc'        => 'Set text for donation button',
        'std'         => 'Donate',
        'type'        => 'text',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'donate_button_type',
        'label'       => esc_html__( 'Select Button Type', 'act' ),
        'desc'        => esc_html__( '<strong>Modal Type:</strong> Popup window will be appeared.<br><strong>Default Type:</strong> You can set a url to redirect the button.', 'act' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'modal_type',
            'label'       => esc_html__( 'Modal Type', 'act' ),
            'src'         => ''
          ),
          array(
            'value'       => 'default_type',
            'label'       => esc_html__( 'Default Type', 'act' ),
            'src'         => ''
          )
        )
      ),

	  array(
        'id'          => 'act_donate_modal_content',
        'label'       => 'Modal Content',
        'desc'        => 'Add content for modal popup screen.To add donation form use "[totaldonations]" shortcode',
        'std'         => 'Donate',
        'type'        => 'textarea',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'condition'   => 'donate_button_type:is(modal_type)'
      ),

	  array(
        'id'          => 'act_donate_button_url',
        'label'       => 'Button Url',
        'desc'        => 'Add url for donation button ',
        'std'         => '#',
        'type'        => 'text',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'condition'   => 'donate_button_type:is(default_type)'
      ),

      array(
        'label'       => esc_html__( 'Color', 'act' ),
        'id'          => 'tab_donate_color',
        'type'        => 'tab',
        'section'     => 'donate_settings'
      ),

     array(
        'id'          => 'act_donate_button_color',
        'label'       => 'Button Color',
        'desc'        => 'Select Background Color for donation button',
        'std'         => '#ec601c',
        'type'        => 'colorpicker',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

     array(
        'id'          => 'act_donate_button_hover_color',
        'label'       => 'Button Hover Color',
        'desc'        => 'Select Background Hover Color for donation button',
        'std'         => '#ad420e',
        'type'        => 'colorpicker',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	 array(
	    'id'          => 'body_google_fonts',
	    'label'       => esc_html__('Google Fonts','act'),
	    'desc'        => esc_html__('Add Google Font and after the save settings follow these steps Dashboard > Appearance > Theme Options > Typography','act'),
	    'std'         => '',
	    'type'        => 'google-fonts',
	    'section'     => 'google_fonts',
	    'rows'        => '',
	    'post_type'   => '',
	    'taxonomy'    => '',
	    'min_max_step'=> '',
	    'class'       => '',
	    'condition'   => '',
	    'operator'    => 'and'
	),


      array(
        'label'       => esc_html__( 'General', 'act' ),
        'id'          => 'tab_general',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'tipigrof',
        'label'       => esc_html__( 'Body Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H1 Title', 'act' ),
        'id'          => 'tab_h1title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h1_tipigrof',
        'label'       => esc_html__( 'H1 Title Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H2 Title', 'act' ),
        'id'          => 'tab_h2title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h2_tipigrof',
        'label'       => esc_html__( 'H2 Title Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H3 Title', 'act' ),
        'id'          => 'tab_h3title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h3_tipigrof',
        'label'       => esc_html__( 'H3 Title Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H4 Title', 'act' ),
        'id'          => 'tab_h4title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h4_tipigrof',
        'label'       => esc_html__( 'H4 Title Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H5 Title', 'act' ),
        'id'          => 'tab_h5title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h5_tipigrof',
        'label'       => esc_html__( 'H5 Title Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H6 Title', 'act' ),
        'id'          => 'tab_h6title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),


      array(
        'id'          => 'h6_tipigrof',
        'label'       => esc_html__( 'H6 Title Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'P(Content)', 'act' ),
        'id'          => 'tab_pcontent',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'p_tipigrof',
        'label'       => esc_html__( 'P(Content) Typography', 'act' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
      array(
        'id'          => 'act_socialicons',
        'label'       => 'Set Social Icon',
        'desc'        => 'Create Social Icons',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 
		
          array(
            'id'          => 'act_sociallink',
            'label'       => 'Link',
            'desc'        => 'Add Your Link',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),

          array(
            'id'          => 'act_socialicon',
            'label'       => 'Icon Name',
            'desc'        => 'Add Your Icon : telephone46',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )

        )
      ),
	  
      array(
        'id'          => 'act_mapapi',
        'label'       => 'Google Map Api Key',
        'desc'        => 'add your google map api key',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'map_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Copyright', 'act' ),
        'id'          => 'tab_copyright',
        'type'        => 'tab',
        'section'     => 'copyright'
      ),

      array(
        'id'          => 'act_copyright1',
        'label'       => 'Footer Copyright',
        'desc'        => 'Footer Copyright',
        'std'         => 'Copyright 2015.KlbTheme . All rights reserved',
        'type'        => 'text',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Top Colors', 'act' ),
        'id'          => 'tab_footer_color',
        'type'        => 'tab',
        'section'     => 'copyright'
      ),

      array(
        'id'          => 'act_footertop_bgcolor',
        'label'       => 'Footer Top Background',
        'desc'        => 'Footer Top Background Color',
        'std'         => '#2b3436',
        'type'        => 'colorpicker',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Bottom Colors', 'act' ),
        'id'          => 'tab_footer_bottomcolor',
        'type'        => 'tab',
        'section'     => 'copyright'
      ),

      array(
        'id'          => 'act_footerbottom_bgcolor',
        'label'       => 'Footer Bottom Background',
        'desc'        => 'Footer Bottom Background Color',
        'std'         => '#202628',
        'type'        => 'colorpicker',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
       array(
        'id'          => 'act_footerbottom_fontcolor',
        'label'       => 'Footer Bottom Color',
        'desc'        => 'Set Footer Bottom Font Color',
        'std'         => '#fff',
        'type'        => 'colorpicker',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
 
 
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}