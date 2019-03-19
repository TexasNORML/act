<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Filter
/*-----------------------------------------------------------------------------------*/

vc_remove_element( "vc_gmaps");
vc_remove_element( "vc_wp_search");
vc_remove_element(  "vc_wp_meta" );
vc_remove_element(  "vc_wp_recentcomments" );
vc_remove_element(  "vc_wp_calendar" );
vc_remove_element(  "vc_wp_pages" );
vc_remove_element(  "vc_wp_tagcloud" );
vc_remove_element(  "vc_wp_custommenu" );
vc_remove_element(  "vc_wp_text" );
vc_remove_element(  "vc_wp_posts" );
vc_remove_element(  "vc_wp_categories" );
vc_remove_element(  "vc_wp_archives" );
vc_remove_element(  "vc_wp_rss" );
vc_remove_element(  "vc_progress_bar" );
vc_remove_element(  "vc_message" );
vc_set_as_theme( $disable_updater = false ); 
vc_is_updater_disabled();

function act_vc_remove_woocommerce() {
    if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        vc_remove_element( 'woocommerce_cart' );
        vc_remove_element( 'woocommerce_checkout' );
        vc_remove_element( 'woocommerce_order_tracking' );
        vc_remove_element( 'woocommerce_my_account' );
        vc_remove_element( 'recent_products' );
        vc_remove_element( 'featured_products' );
        vc_remove_element( 'product' );
        vc_remove_element( 'products' );
        vc_remove_element( 'add_to_cart' );
        vc_remove_element( 'add_to_cart_url' );
        vc_remove_element( 'product_page' );
        vc_remove_element( 'product_category' );
        vc_remove_element( 'product_categories' );
        vc_remove_element( 'sale_products' );
        vc_remove_element( 'best_selling_products' );
        vc_remove_element( 'top_rated_products' );
        vc_remove_element( 'product_attribute' );
        vc_remove_element( 'related_products' );
    }
}
// Hook for admin editor.
add_action( 'vc_build_admin_page', 'act_vc_remove_woocommerce', 11 );
// Hook for frontend editor.
add_action( 'vc_load_shortcode', 'act_vc_remove_woocommerce', 11 );

/*-----------------------------------------------------------------------------------*/
/*	Act Row Style
/*-----------------------------------------------------------------------------------*/

$attributes = array(
       array(
		'type' => 'dropdown',
		'heading' => esc_html__( 'Background Style', 'act' ),
		'param_name' => 'klb_style',
		'value' => array(
			esc_html__( 'Select Type', 'act') => '',
			esc_html__( 'Overlay Light', 'act' ) => 'overlaylight',
			esc_html__( 'Overlay No', 'act' ) => 'no-overlay',
		),
		'description' => esc_html__( 'Select type of style for background.', 'act' ),
        'group' => 'Design Options',
		),	
);
vc_add_params( 'vc_row', $attributes );

$attributes = array(
       array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'CSS Animation', 'act' ),
			'param_name' => 'klb_css_animation',
			'value' => array(
				esc_html__( 'No', 'act') => '',
				esc_html__( 'Top to bottom', 'act' ) => 'wow animated fadeInDown',
				esc_html__( 'Bottom to top', 'act' ) => 'wow animated fadeInUp',
				esc_html__( 'Left to right', 'act' ) => 'wow animated fadeInLeft',
				esc_html__( 'Right to left', 'act' ) => 'wow animated fadeInRight',
				esc_html__( 'Appear from center', 'act' ) => 'wow animated fadeIn',
			),
			'description' => esc_html__( 'Select type of animation for element to be animated when it "enters" the browsers viewport (Note: works only in modern browsers).', 'act' ),
			'group' => 'Animation',
		),	
		
       array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'CSS Animation Delay', 'act' ),
			'param_name' => 'klb_css_animation_delay',
			'value' => array(
				esc_html__( 'No', 'act') => '',
				esc_html__( 'Delay 100', 'act' ) => 'animated-longer-delay-1',
				esc_html__( 'Delay 200', 'act' ) => 'animated-longer-delay-2',
				esc_html__( 'Delay 300', 'act' ) => 'animated-longer-delay-3',
				esc_html__( 'Delay 400', 'act' ) => 'animated-longer-delay-4',
				esc_html__( 'Delay 500', 'act' ) => 'animated-longer-delay-5',
				esc_html__( 'Delay 600', 'act' ) => 'animated-longer-delay-6',
				esc_html__( 'Delay 700', 'act' ) => 'animated-longer-delay-7',
				esc_html__( 'Delay 800', 'act' ) => 'animated-longer-delay-8',
				esc_html__( 'Delay 900', 'act' ) => 'animated-longer-delay-9',
				esc_html__( 'Delay 1000', 'act' ) => 'animated-longer-delay-10',
			),
			'description' => esc_html__( 'Select Animation Delay Time', 'act' ),
			'group' => 'Animation',
		),	
);
vc_add_params( 'vc_column', $attributes );

/*-----------------------------------------------------------------------------------*/
/*	Act Home Image
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_home_image_integrateWithVC' );
function act_home_image_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Home Image", "act" ),
	  "category" => "Act",
      "base" => "home_image",
      "params" => array( 
	  
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Background', 'act' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add a image for background.', 'act' ),
		),

		array(
			'type' => 'checkbox',
			'param_name' => 'overlay',
			'heading' => esc_html__( 'Disable Overlay?', 'act' ),
			'description' => esc_html__( 'You want to deactivate overlay?', 'act' ),
			'value' => array( esc_html__( 'Yes', 'act' ) => 'yes' ),
			'group' => 'Overlay',
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text Interval', 'act' ),
			'param_name' => 'texttime',
			'description' => esc_html__( 'Set Carousel interval for texts', 'act' ),
			'group' => 'Time',
		),
				
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Carousel', 'act' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'contentm' => esc_html__( 'mycontent', 'act' )
				),
			) ) ),			
			'params' => array(
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Content', 'act' ),
					'param_name' => 'contentm',
					'description' => esc_html__( 'Add Desciption for carousel item.', 'act' ),
				),
				
				array(
					'type' => 'vc_link',
					'heading' => esc_html__( 'URL (Link)', 'act' ),
					'param_name' => 'link',
					'description' => esc_html__( 'Add Button for item', 'act' ),
				),
				


			)
		),
		
      ),
   ) );
}
class WPBakeryShortCode_home_image extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Title
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_title_integrateWithVC' );
function act_title_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Title", "act" ),
	  "category" => "Act",
      "base" => "title",
      "params" => array( 
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'act' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Add title for the box.', 'act' ),
			'admin_label' => true,
		),
				
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Subtitle', 'act' ),
			'param_name' => 'subtitle',
			'description' => esc_html__( 'Add content for the title.', 'act' ),
		),
		
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Text Alignment', 'act' ),
			'param_name' => 'textalign',
			'value' => array(
				esc_html__( 'Select Align', 'act' ) => 'select-title',
				esc_html__( 'Left', 'act' ) => 'left',
				esc_html__( 'Center', 'act' ) => 'center',
				esc_html__( 'Right', 'act' ) => 'right',
			),
			'description' => esc_html__( 'Select Text Alignment', 'act' ),
			'group' => 'Text Alignment',
		),
				
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Color", "act"),
			"param_name" => "fontcolor",
			"description" => esc_html__("Select font color.", "act"),
			"group" => 'Color',
		),
		
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Border Color", "act"),
			"param_name" => "bordercolor",
			"description" => esc_html__("Select border color.", "act"),
			"group" => 'Color',
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Title extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Carousel
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_carousel_integrateWithVC' );
function act_carousel_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Carousel", "act" ),
	  "category" => "Act",
      "base" => "carousel",
      "params" => array( 
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'act' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Add title for the shortcode.', 'act' ),
		),
		
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Carousel', 'act' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'contentm' => esc_html__( 'mycontent', 'act' )
				),
			) ) ),			
			'params' => array(
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Content', 'act' ),
					'param_name' => 'contentm',
					'description' => esc_html__( 'Add Desciption for carousel item.', 'act' ),
				),

			)
		),
				
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Text Interval', 'act' ),
			'param_name' => 'texttime',
			'description' => esc_html__( 'Set Carousel interval for texts', 'act' ),
			'group' => 'Time',
		),
				

		
      ),
   ) );
}
class WPBakeryShortCode_Carousel extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Act Process Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_process_box_integrateWithVC' );
function act_process_box_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Process Box", "act" ),
	  "category" => "Act",
      "base" => "process_box",
      "params" => array( 
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'act' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Add title for the box.', 'act' ),
		),
				
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Content', 'act' ),
			'param_name' => 'contentm',
			'description' => esc_html__( 'Add content for the box.', 'act' ),
		),
		
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Icon library', 'act' ),
			'value' => array(
				esc_html__( 'Font Awesome', 'act' ) => 'fontawesome',
				esc_html__( 'Open Iconic', 'act' ) => 'openiconic',
				esc_html__( 'Typicons', 'act' ) => 'typicons',
				esc_html__( 'Entypo', 'act' ) => 'entypo',
				esc_html__( 'Linecons', 'act' ) => 'linecons',
				esc_html__( 'Mono Social', 'act' ) => 'monosocial',
				esc_html__( 'Elegant', 'act' ) => 'elegant',
			),
			'param_name' => 'type',
			'description' => esc_html__( 'Select icon library.', 'act' ),
		),
			
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-info-circle',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),		
		),
		

		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_openiconic',
			'value' => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'openiconic',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_typicons',
			'value' => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'typicons',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_entypo',
			'value' => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'entypo',
			),
		),
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_linecons',
			'value' => 'vc_li vc_li-heart', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'linecons',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'act' ),
			'param_name' => 'icon_monosocial',
			'value' => 'vc-mono vc-mono-fivehundredpx', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'monosocial',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'monosocial',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'act' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add Button for box', 'act' ),
            'group'       => 'Button',
		),
		
		array(
			"type" => "colorpicker",
			"heading" => esc_html__("Color", "act"),
			"param_name" => "bgcolor",
			"description" => esc_html__("Select background color.", "act"),
			"group" => 'Color',
		),
				

		
      ),
   ) );
}
class WPBakeryShortCode_Process_Box extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Latest Blog
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_blog_integrateWithVC' );
function act_blog_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Latest Blog", "act" ),
      "base" => "blog",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "act"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "act")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "act"),
            "param_name" => "categories",
            "description" => esc_html__("Add a post category or write all", "act")
        ),	
		
      ),
   ) );
}
class WPBakeryShortCode_Blog extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Blog Masonry
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_blog_masonry_integrateWithVC' );
function act_blog_masonry_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Blog Masonry", "act" ),
      "base" => "blog_masonry",
	  "category" => "Act",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "act"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "act")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Excerpt Size", "act"),
            "param_name" => "excerpt_size",
            "description" => esc_html__("Add Post Excerpt Size for example : 15", "act")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "act"),
            "param_name" => "categories",
            "description" => esc_html__("Add a post category or write all", "act")
        ),

        array(
            "type" => "dropdown",
            "heading" => esc_html__("Order", "act"),
            "param_name" => "order",
            "description" => esc_html__("Designates the ascending or descending order.", "act"),
			'value' => array(
				esc_html__( 'Select Type', 'act' ) => 'select-type',
				esc_html__( 'DESC', 'act' ) => 'DESC',
				esc_html__( 'ASC', 'act' ) => 'ASC',						
			),	
        ),		
		
      ),
   ) );
}
class WPBakeryShortCode_Blog_Masonry extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Latest Events
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_latest_events_integrateWithVC' );
function act_latest_events_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Latest Events", "act" ),
      "base" => "events",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "act"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "act")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "act"),
            "param_name" => "categories",
            "description" => esc_html__("Add a post category or write all", "act")
        ),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Date Type', 'act' ),
			'param_name' => 'date_type',
			'value' => array(
				esc_html__( 'Select Type', 'act' ) => 'select-type',
				esc_html__( 'Start Date', 'act' ) => 'startdate',
				esc_html__( 'End Date', 'act' ) => 'enddate',
			),
			'description' => esc_html__( 'Select one of the both Start date and End date to be displaied.', 'act' ),
		),	
		
      ),
   ) );
}
class WPBakeryShortCode_Latest_Events extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Volunteer Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_volunteer_box_vc' );
function act_volunteer_box_vc() {
   vc_map( array(
      "name" => esc_html__( "Act Volunteer_Box", "act" ),
      "base" => "volunteer_box",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Name", "act"),
            "param_name" => "name",
            "description" => esc_html__("Add person name", "act")
        ),
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Message", "act"),
            "param_name" => "warningmessage",
            "description" => esc_html__("Add warning message for the box", "act")
        ),
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Description", "act"),
            "param_name" => "desc",
            "description" => esc_html__("Add descriptin for the person", "act")
        ),
		
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Image', 'act' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add a image for volunteer box.', 'act' ),
		),
		
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'act' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add a url for image box', 'act' ),
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Volunteer_Box extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Campaign Form
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_campaign_form_integrateWithVC' );
function act_campaign_form_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Campaign Form", "act" ),
      "base" => "campaign_form",
      "params" => array(
	  
		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Id", "act"),
			"param_name" => "campaign_id",
			"description" => esc_html__("Add one of the available id of the campaign(Total Donations > Campaign) ", "act"),
			"admin_label" => true,
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Campaign_Form extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Campaign Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_campaign_box_vc' );
function act_campaign_box_vc() {
   vc_map( array(
      "name" => esc_html__( "Act Campaign Box", "act" ),
      "base" => "campaign_box",
      "params" => array(
		
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Campaign Image', 'act' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add Campaign Image', 'act' ),
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Title", "act"),
			"param_name" => "title",
			"description" => esc_html__("Add one of the available name of the campaign(Total Donations > Campaign)", "act"),
			'admin_label' => true,
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Id", "act"),
			"param_name" => "campaign_id",
			"description" => esc_html__("Add one of the available id of the campaign(Total Donations > Campaign)", "act"),
		),
		
		array(
			"type" => "textfield",
			"heading" => esc_html__("Due Date", "act"),
			"param_name" => "duedate",
			"description" => esc_html__("Add due date for example : 25 December 2016", "act"),
		),

		array(
			"type" => "textarea_html",
			"heading" => esc_html__("Content", "act"),
			"param_name" => "content",
			"description" => esc_html__("Text area with default WordPress WYSIWYG Editor", "act"),
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Campaign_Box extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Fundraise Bar
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_fundraise_bar_vc' );
function act_fundraise_bar_vc() {
   vc_map( array(
      "name" => esc_html__( "Act Fundraise Bar", "act" ),
      "base" => "fundraise_bar",
      "params" => array(

		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Title", "act"),
			"param_name" => "title",
			"description" => esc_html__("Add one of the available name of the campaign(Total Donations > Campaign)", "act"),
			'admin_label' => true,
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Id", "act"),
			"param_name" => "campaign_id",
			"description" => esc_html__("Add one of the available id of the campaign(Total Donations > Campaign)", "act"),
		),
		
		array(
			"type" => "textfield",
			"heading" => esc_html__("Due Date", "act"),
			"param_name" => "duedate",
			"description" => esc_html__("Add due date for example : 25 December 2016", "act"),
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Text Goal", "zirto"),
			"param_name" => "translate_goal",
			"description" => esc_html__("Translate the word for your own language.", "zirto"),
			'group' => esc_html__('Translation','zirto'),
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Text of our goal", "zirto"),
			"param_name" => "translate_of_our_goal",
			"description" => esc_html__("Translate the word for your own language.", "zirto"),
			'group' => esc_html__('Translation','zirto'),
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Text Days Left", "zirto"),
			"param_name" => "translate_days_left",
			"description" => esc_html__("Translate the word for your own language.", "zirto"),
			'group' => esc_html__('Translation','zirto'),
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Text Donations", "zirto"),
			"param_name" => "translate_donations",
			"description" => esc_html__("Translate the word for your own language.", "zirto"),
			'group' => esc_html__('Translation','zirto'),
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Fundraise_Bar extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Act Button
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_btn_button_integrateWithVC' );
function act_btn_button_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Button", "act" ),
      "base" => "btn_button",
      "params" => array( 

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button Type', 'act' ),
			'param_name' => 'button_type',
			'value' => array(
				esc_html__( 'Select Type', 'act' ) => 'select-type',
				esc_html__( 'Default', 'act' ) => 'default',
				esc_html__( 'Modal(Popup)', 'act' ) => 'modal',						
			),		
			'description' => esc_html__( 'Select Button Type', 'act' ),
			'group' => 'Button',
		),
		
		//Button
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'act' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add Button for item', 'act' ),
			'dependency' => array(
				'element' => 'button_type',
				'value' => array( 'default','select-type' ),
			),
            'group'       => 'Button',
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Button Text", "act"),
			"param_name" => "buttonname",
			"description" => esc_html__("Add a text for button.for example 'mybutton'", "act"),
			'dependency' => array(
				'element' => 'button_type',
				'value' => 'modal',
			),
            'group'       => 'Button',
		),
		
		array(
			"type" => "textfield",
			"heading" => esc_html__("Modal Id", "act"),
			"param_name" => "modal_id",
			"description" => esc_html__("Add a id for modal popup.for example 'mymodal1'.", "act"),
			'dependency' => array(
				'element' => 'button_type',
				'value' => 'modal',
			),
            'group'       => 'Button',
		),
		
		array(
			"type" => "textarea_html",
			"heading" => esc_html__("Modal content", "act"),
			"param_name" => "content",
			"description" => esc_html__("Add content for modal popup screen.", "act"),
			'dependency' => array(
				'element' => 'button_type',
				'value' => 'modal',
			),
            'group'       => 'Button',
		),
		array(
			'type' => 'checkbox',
			'param_name' => 'button_icon',
			'heading' => esc_html__( 'Add Icon?', 'act' ),
			'description' => esc_html__( 'You want to use icon on button?', 'act' ),
			'value' => array( esc_html__( 'Yes', 'act' ) => 'yes' ),
			'group' => 'Icon',
		),

		array(
			'type' => 'colorpicker',
			'param_name' => 'bgcolor',
			'heading' => esc_html__( 'Background Color', 'act' ),
			'description' => esc_html__( 'Set background color for act button', 'act' ),
			'group' => 'Color',
		),
		
		array(
			'type' => 'colorpicker',
			'param_name' => 'bordercolor',
			'heading' => esc_html__( 'Border Color', 'act' ),
			'description' => esc_html__( 'Set border color for act button', 'act' ),
			'group' => 'Color',
		),
		
		array(
			'type' => 'colorpicker',
			'param_name' => 'fontcolor',
			'heading' => esc_html__( 'Font Color', 'act' ),
			'description' => esc_html__( 'Set font color for act button', 'act' ),
			'group' => 'Color',
		),

		array(
			'type' => 'colorpicker',
			'param_name' => 'hoverbgcolor',
			'heading' => esc_html__( 'Background Color', 'act' ),
			'description' => esc_html__( 'Set hover background color for act button', 'act' ),
			'group' => 'Hover',
		),
		
		array(
			'type' => 'colorpicker',
			'param_name' => 'hoverbordercolor',
			'heading' => esc_html__( 'Border Color', 'act' ),
			'description' => esc_html__( 'Set Hover border color for act button', 'act' ),
			'group' => 'Hover',
		),
		
		array(
			'type' => 'colorpicker',
			'param_name' => 'hoverfontcolor',
			'heading' => esc_html__( 'Font Color', 'act' ),
			'description' => esc_html__( 'Set Hover font color for act button', 'act' ),
			'group' => 'Hover',
		),
		
		
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-info-circle',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'button_icon',
				'value' => 'yes',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
			'group' => 'Icon',
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Icon Alignment', 'act' ),
			'param_name' => 'icon_alignment',
			'value' => array(
				esc_html__( 'Select', 'act' ) => 'select-type',
				esc_html__( 'Left', 'act' ) => 'left',
				esc_html__( 'Right', 'act' ) => 'right',						
			),
			'dependency' => array(
				'element' => 'button_icon',
				'value' => 'yes',
			),			
			'description' => esc_html__( 'Select icon alignment.', 'act' ),
			'group' => 'Icon',
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button Alignment', 'act' ),
			'param_name' => 'btnalignment',
			'value' => array(
				esc_html__( 'Select', 'act' ) => 'select-type',
				esc_html__( 'Left', 'act' ) => 'left',
				esc_html__( 'Center', 'act' ) => 'center',
				esc_html__( 'Right', 'act' ) => 'right',						
			),		
			'description' => esc_html__( 'Select button alignment.', 'act' ),
			'group' => 'Alignment',
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Button Size', 'act' ),
			'param_name' => 'button_size',
			'value' => array(
				esc_html__( 'Select Size', 'act' ) => 'select-size',
				esc_html__( 'Default', 'act' ) => '1',
				esc_html__( 'Big', 'act' ) => '2',	
			),
			'description' => esc_html__( 'Select predefined list design ', 'act' ),
			'group' => 'Size',
		),
		
        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'act' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'act' ),
        ),
		
      ),
   ) );
}
class WPBakeryShortCode_btn_button extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Act Latest Portfolio
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_portfolio_integrateWithVC' );
function act_portfolio_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Portfolio", "act" ),
      "base" => "portfolio",
      "params" => array(
        array(
            "type" => "textarea",
            "heading" => esc_html__("Title", "act"),
            "param_name" => "title",
            "description" => esc_html__("Add project title", "act")
        ),
	  
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "act"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:5", "act")
        ),
		
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "act"),
            "param_name" => "categories",
            "description" => esc_html__("Add category slug or use all", "act")
        ),
		
      ),
   ) );
}
class WPBakeryShortCode_Portfolio extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Latest Portfolio Two
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_portfolio_two_integrateWithVC' );
function act_portfolio_two_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Portfolio Two", "act" ),
      "base" => "portfolio_two",
      "params" => array(
	  
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "act"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:5", "act")
        ),
		
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "act"),
            "param_name" => "categories",
            "description" => esc_html__("Add category slug or use all", "act")
        ),

		array(
			'type' => 'checkbox',
			'param_name' => 'filter',
			'heading' => esc_html__( 'Activate Category Filter?', 'act' ),
			'description' => esc_html__( 'You want to use filter with categories?', 'act' ),
			'value' => array( esc_html__( 'Yes', 'act' ) => 'yes' ),
		),

        array(
            "type" => "textfield",
            "heading" => esc_html__("All", "act"),
            "param_name" => "all_text",
            "description" => esc_html__("Translate All button", "act")
        ),
		
      ),
   ) );
}
class WPBakeryShortCode_Portfolio_Two extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Act Action Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_action_box_integrateWithVC' );
function act_action_box_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Action Box", "act" ),
      "base" => "action_box",
      "params" => array(
	  
        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", "act"),
            "param_name" => "title",
            "description" => esc_html__("Add a title for action box.", "act"),
			"admin_label" => true,
        ),
		
        array(
            "type" => "textarea_html",
            "heading" => esc_html__("Content", "act"),
            "param_name" => "content",
            "description" => esc_html__("Add content for action box", "act")
        ),
		
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Icon library', 'act' ),
			'value' => array(
				esc_html__( 'Font Awesome', 'act' ) => 'fontawesome',
				esc_html__( 'Open Iconic', 'act' ) => 'openiconic',
				esc_html__( 'Typicons', 'act' ) => 'typicons',
				esc_html__( 'Entypo', 'act' ) => 'entypo',
				esc_html__( 'Linecons', 'act' ) => 'linecons',
				esc_html__( 'Mono Social', 'act' ) => 'monosocial',
				esc_html__( 'Elegant', 'act' ) => 'elegant',
			),
			'param_name' => 'type',
			'description' => esc_html__( 'Select icon library.', 'act' ),
		),
			
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-info-circle',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),		
		),
		

		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_openiconic',
			'value' => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'openiconic',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_typicons',
			'value' => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'typicons',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_entypo',
			'value' => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'entypo',
			),
		),
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'act' ),
			'param_name' => 'icon_linecons',
			'value' => 'vc_li vc_li-heart', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'linecons',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'act' ),
			'param_name' => 'icon_monosocial',
			'value' => 'vc-mono vc-mono-fivehundredpx', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'monosocial',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'monosocial',
			),
			'description' => esc_html__( 'Select icon from library.', 'act' ),
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Action_Box extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Google Map
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_map_integrateWithVC' );
function act_map_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Google Map", "act" ),
      "base" => "map_container",
	  "category" => "act",
      "params" => array(

        array(
            "type" => "textfield",
            "heading" => esc_html__("Latitude", "act"),
            "param_name" => "latitude",
            "description" => esc_html__("Add latitude for google map", "act")
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Longitude', 'act' ),
            'param_name' => 'longitude',
            "description" => esc_html__("Add longitude for google map", "act"),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Zoom', 'act' ),
            'param_name' => 'zoom',
            "description" => esc_html__("Adjust zoom for google map", "act"),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Height', 'act' ),
            'param_name' => 'height',
            "description" => esc_html__("Adjust height for google map", "act"),
        ),
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Map Icon', 'act' ),
			'param_name' => 'mapimage',
			'description' => esc_html__( 'Add a image for map marker', 'act' ),
		),
        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'act' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'act' ),
        ),


      ),
   ) );
}
class WPBakeryShortCode_Map extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Act Google Map
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_toggle_bar_integrateWithVC' );
function act_toggle_bar_integrateWithVC() {

vc_map( array(
    "name" => esc_html__("Act Toggle Bar", "act"),
    "base" => "toggle_bar",
    "content_element" => true,
    "show_settings_on_create" => true,
    "is_container" => true,
    "params" => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => esc_html__("Button Text", "act"),
            "param_name" => "buttonname",
            "description" => esc_html__("Add a text for toggle button.", "act")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Toggle Id", "act"),
            "param_name" => "toggleid",
            "description" => esc_html__("Add a unique id for toggle.for example; mytoggle1", "act")
        ),

    ),
    "js_view" => 'VcColumnView'
) );


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Toggle_Bar extends WPBakeryShortCodesContainer {
    }
}

}


/*-----------------------------------------------------------------------------------*/
/*	Act Donor Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_donor_box_integrateWithVC' );
function act_donor_box_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Donor Box", "act" ),
	  "category" => "Act",
      "base" => "donor_box",
      "params" => array( 
	  
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Background', 'act' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add a image for donor box.', 'act' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Name', 'act' ),
			'param_name' => 'name',
			'description' => esc_html__( 'Add donor name.', 'act' ),
		),
		
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Subtitle', 'act' ),
			'param_name' => 'subtitle',
			'description' => esc_html__( 'Add subtitle for the box.', 'act' ),
		),
		
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Content', 'act' ),
			'param_name' => 'content',
			'description' => esc_html__( 'Add content for fonor box.', 'act' ),
		),
		
		
      ),
   ) );
}
class WPBakeryShortCode_donor_box extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Act Team Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'act_team_box_integrateWithVC' );
function act_team_box_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Act Team Box", "act" ),
	  "category" => "Act",
      "base" => "team_box",
      "params" => array( 
	  
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Background', 'act' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add a image for team box.', 'act' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Name', 'act' ),
			'param_name' => 'name',
			'description' => esc_html__( 'Add a team member name.', 'act' ),
		),
		
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Subtitle', 'act' ),
			'param_name' => 'subtitle',
			'description' => esc_html__( 'Add subtitle for the box.', 'act' ),
		),
		
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Content', 'act' ),
			'param_name' => 'content',
			'description' => esc_html__( 'Add content for fonor box.', 'act' ),
		),
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Socials', 'act' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'title' => esc_html__( 'mysocial', 'act' )
				),
			) ) ),	
			'group' => 'Social',
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'Icon', 'act' ),
					'param_name' => 'icon_fontawesome',
					'value' => 'fa fa-info-circle',
					'settings' => array(
						'emptyIcon' => false, // default true, display an "EMPTY" icon?
						'iconsPerPage' => 4000, // default 100, how many icons per/page to display
					),
					'description' => esc_html__( 'Select icon from library.', 'act' ),
					'admin_label' => true,				
				),
				array(
					'type' => 'vc_link',
					'heading' => esc_html__( 'URL (Link)', 'act' ),
					'param_name' => 'link',
					'description' => esc_html__( 'Add a url for button.', 'act' ),
				),
			)
		),
		
      ),
   ) );
}
class WPBakeryShortCode_team_box extends WPBakeryShortCode {
}