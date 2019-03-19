<?php
/**
 * functions.php
 * @package WordPress
 * @subpackage Act
 * @since Act 2.2
 * 
 */

 /*************************************************
## Post Type
*************************************************/

if (is_admin() ){
	function act_admin_scripts(){	
		wp_enqueue_script('klbmetajs', get_template_directory_uri() . '/js/init.js', array('jquery','media-upload','thickbox'));
        wp_enqueue_style('kadmin',     get_template_directory_uri() . '/css/admin/klbtheme.css');

	}
}
add_action('admin_enqueue_scripts', 'act_admin_scripts');

add_theme_support( 'post-formats', array('gallery', 'audio', 'video')); 


 /*************************************************
## Post Type Support
*************************************************/

function act_post_formats() {
	add_post_type_support( 'portfolio', 'post-formats' );
}
add_action( 'init', 'act_post_formats' );

 /*************************************************
## Act Fonts
*************************************************/

function act_fonts_url() {
        $fonts_url = '';
 
		$opensans = _x( 'on', 'Opensans font: on or off', 'act' );	
		$condensed = _x( 'on', 'Condensed font: on or off', 'act' );	
		 
		if ( 'off' !== $opensans ) {
		$font_families = array();
		 
		if ( 'off' !== $opensans ) {
		$font_families[] = 'Open+Sans:400,600,700,800,300,400italic';
		}

		if ( 'off' !== $condensed ) {
		$font_families[] = 'Open+Sans+Condensed:300,700';
		}
		
		$query_args = array( 
		'family' => rawurldecode( implode( '|', $font_families ) ), 
		'subset' => rawurldecode( 'latin,latin-ext' ), 
		); 
		 
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}
 
return esc_url_raw( $fonts_url );
}


/*************************************************
## Styles and Scripts
*************************************************/ 
define('ACT_INDEX_JS', get_template_directory_uri()  . '/js');
define('ACT_INDEX_CSS', get_template_directory_uri()  . '/css');

function act_scripts() {

	 if ( is_admin_bar_showing() ) {
	     wp_enqueue_style( 'klbtheme', ACT_INDEX_CSS . '/admin/klbtheme.css', false, '1.0');
	 }   

     if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 
     wp_enqueue_style( 'bootstrap',           	 get_template_directory_uri() . '/dist/css/bootstrap.min.css', false, '1.0');
     wp_enqueue_style( 'onepagebase',         	 get_template_directory_uri() . '/css/one-page-base.css', false, '1.0');
     wp_enqueue_style( 'mainact',             	 get_template_directory_uri() . '/css/act.css', false, '1.0');
     wp_enqueue_style( 'animate',              	 get_template_directory_uri() . '/css/animate.css', false, '1.0');
     wp_enqueue_style( 'hovereffect',         	 get_template_directory_uri() . '/css/hover-effects.css', false, '1.0');
     wp_enqueue_style( 'remodal',              	 get_template_directory_uri() . '/plugins/remodal/remodal.css', false, '1.0');
     wp_enqueue_style( 'remodal-default-theme',	 get_template_directory_uri() . '/plugins/remodal/remodal-default-theme.css', false, '1.0');
     wp_enqueue_style( 'prettyphoto',       	 get_template_directory_uri() . '/plugins/prettyPhoto_uncompressed_3.1.5/css/prettyPhoto.css', false, '1.0');
     wp_enqueue_style( 'datepicker',        	 get_template_directory_uri() . '/plugins/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css', false, '1.0');
     wp_enqueue_style( 'tinyscrollbar',     	 get_template_directory_uri() . '/plugins/tinyscrollbar-master/examples/simple/tinyscrollbar.css', false, '1.0');
     wp_enqueue_style( 'fontawesome',        	 get_template_directory_uri() . '/font-awesome-4.6.3/css/font-awesome.css', false, '1.0');
     wp_enqueue_style( 'act-woocommerce',   	 get_template_directory_uri() . '/css/act-woocommerce.css', false, '1.0');
     wp_register_style( 'cubeportfolio',   	 	 get_template_directory_uri() . '/plugins/cubeportfolio/css/cubeportfolio.min.css', false, '1.0');
     wp_register_style( 'owlcarousel',   	 	 get_template_directory_uri() . '/plugins/owlcarousel/owl.carousel.css', false, '1.0');
     wp_register_style( 'owltheme',   	 	     get_template_directory_uri() . '/plugins/owlcarousel/owl.theme.css', false, '1.0');
     wp_register_style( 'isotope-doc',   	 	 get_template_directory_uri() . '/plugins/isotope-docs/css/isotope.css', false, '1.0');
     wp_enqueue_style( 'act-font',          	 act_fonts_url(), array(), '1.0.0' );
     wp_enqueue_style( 'style',              	 get_stylesheet_uri() );

     $mapkey = ot_get_option('act_mapapi');

	 wp_enqueue_script( 'boostrap',                  get_template_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'modernizr',                 get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'easing',                    get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'wow',                       get_template_directory_uri() . '/plugins/WOW-master/dist/wow.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'prettyPhoto',               get_template_directory_uri() . '/plugins/prettyPhoto_uncompressed_3.1.5/js/jquery.prettyPhoto.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'tinyscrollbar',             get_template_directory_uri() . '/plugins/tinyscrollbar-master/lib/jquery.tinyscrollbar.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'countTo',                   get_template_directory_uri() . '/plugins/jquery-countTo-master/jquery.countTo.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'moment',                    get_template_directory_uri() . '/js/moment.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'remodal',                   get_template_directory_uri() . '/plugins/remodal/remodal.min.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'datetimepicker',            get_template_directory_uri() . '/plugins/bootstrap-datetimepicker-master/src/js/locales/bootstrap-datetimepicker.en-au.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'bootstrap-datetimepicker',  get_template_directory_uri() . '/plugins/bootstrap-datetimepicker-master/src/js/bootstrap-datetimepicker.js', array('jquery'), '1.0', true);
	 wp_register_script( 'googlemap',                'https://maps.googleapis.com/maps/api/js?key='. $mapkey .'', array('jquery'), '1.0', true);
	 wp_register_script( 'custom-home',              get_template_directory_uri() . '/js/custom/custom-home.js', array('jquery'), '1.0', true);
	 wp_register_script( 'custom-carousel',          get_template_directory_uri() . '/js/custom/custom-carousel.js', array('jquery'), '1.0', true);
     wp_register_script( 'blog-carousel',  	         get_template_directory_uri() . '/js/custom/blog-carousel.js', array('jquery'), '1.0', true);
	 wp_register_script( 'owlcarousel',  	         get_template_directory_uri() . '/plugins/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0', true);
	 wp_register_script( 'custom-pretty',            get_template_directory_uri() . '/js/custom/custom-pretty.js', array('jquery'), '1.0', true);
	 wp_register_script( 'cubeportfolio',            get_template_directory_uri() . '/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js', array('jquery'), '1.0', true);
	 wp_register_script( 'custom-cube',     	     get_template_directory_uri() . '/js/custom/custom-cube.js', array('jquery'), '1.0', true);
	 wp_register_script( 'isotopes',     	         get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '1.0', true);
	 wp_register_script( 'custom-isotope',     	     get_template_directory_uri() . '/js/custom/custom-isotope.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'actj', get_template_directory_uri() . '/js/act.js', array('jquery'), '1.0', true);
 
}

add_action( 'wp_enqueue_scripts', 'act_scripts' );

/*************************************************
## Theme Setup
*************************************************/ 

if ( ! isset( $content_width ) ) $content_width = 960;

function act_theme_setup() {
	
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	load_theme_textdomain( 'act', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'act_theme_setup' );


/*************************************************
## Theme option
*************************************************/ 

	require_once get_template_directory() . '/includes/metaboxes.php';
	require_once get_template_directory() . '/includes/aq_resizer.php';
	require_once get_template_directory() . '/includes/style.php'; 
	require_once get_template_directory() . '/includes/post-like.php'; 
	require_once get_template_directory() . '/includes/woocommerce/woocommerce.php';
   	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );
	require_once get_template_directory() . '/includes/theme-options.php';
	if(function_exists('vc_set_as_theme')) { 
	   require_once get_template_directory() . '/includes/js_composer/shortcodes.php';  
	}
	
/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/ 

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'act_register_required_plugins' );

function act_register_required_plugins() {
	
	$plugins = array(

        array(
            'name'                  => esc_html__('Meta Box','act'),
            'slug'                  => 'meta-box',
        ),

        array(
            'name'                  => esc_html__('Portfolio Post Type','act'),
            'slug'                  => 'portfolio-post-type',
        ),

        array(
            'name'                  => esc_html__('Contact Form 7','act'),
            'slug'                  => 'contact-form-7',
        ),
		
        array(
            'name'                  => esc_html__('Woocommerce','act'),
            'slug'                  => 'woocommerce',
        ),

        array(
            'name'                  => 'The Events Calendar',
            'slug'                  => 'the-events-calendar',
        ),
		
        array(
            'name'                  => esc_html__('Theme Options','act'),
            'slug'                  => 'option-tree',
        ),

		 array(
            'name'                  => esc_html__('Klb Shortcode','act'),
            'slug'                  => 'klb-shortcode',
            'source'                => get_template_directory() . '/includes/plugins/klb-shortcode.zip',
            'required'              => false,
            'version'               => '1.4',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Visual Composer','act'),
            'slug'                  => 'js_composer',
            'source'                => get_template_directory() . '/includes/plugins/js-composer.zip',
            'required'              => false,
            'version'               => '5.0.1',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Revolution Slider','act'),
            'slug'                  => 'revslider',
            'source'                => get_template_directory() . '/includes/plugins/revslider.zip',
            'required'              => false,
            'version'               => '5.3.1.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Total Donations','act'),
            'slug'                  => 'totaldonations',
            'source'                => get_template_directory() . '/includes/plugins/totaldonations.zip',
            'required'              => false,
            'version'               => '2.0.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),
		
        array(
            'name'                  => esc_html__('Envato WordPress Toolkit','act'),
            'slug'                  => 'wp-envato-market-master',
            'source'                => get_template_directory() . '/includes/plugins/wp-envato-market-master.zip',
            'required'              => true,
            'version'               => '1.0',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Demo Installation','act'),
            'slug'                  => 'easy_installer',
            'source'                => get_template_directory() . '/includes/plugins/easy_installer.zip',
            'required'              => false,
            'version'               => '1.2',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

/*************************************************
## LeaderX Register Menu 
*************************************************/

function act_register_menus() {
	register_nav_menus( array( 'main-menu' => 'Primary Navigation Menu') );     
}
add_action('init', 'act_register_menus');


class act_description_walker extends Walker_Nav_Menu {
	
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'',
			( $display_depth % 2  ? '' : '' ),
			( $display_depth >=2 ? '' : '' ),
			
			);
		$class_names = implode( ' ', $classes );
	  
		// build html
		$output .= "\n" . $indent . '<ul class="dropdown-menu" role="menu">' . "\n";
	}
	
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }


      function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0) {
           
           global $wp_query;

           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $object->classes ) ? array() : (array) $object->classes;
           $icon_class = $classes[0];
		   $classes = array_slice($classes,1);

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
           $class_names = ' class="page-scroll '. esc_attr( $class_names ) . '"';
		   include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
      
           $attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
           $attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
           $attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
          
           if($object->object == 'page') {
                $varpost = get_post($object->object_id);                
                $separate_page = get_post_meta($object->object_id, "klb_separate_page", true);
                $disable_menu = get_post_meta($object->object_id, "klb_disable_section_from_menu", true);
				$current_page_id = get_option('page_on_front');

                if ( ( $disable_menu != true ) && ( $varpost->ID != $current_page_id ) ) {

                	$output .= $indent . '<li ' . $value . $class_names .'>';

                	if ( ! is_plugin_active( 'meta-box/meta-box.php' ) ){
	                	$attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'" ' : '';
	                } elseif ( $separate_page == true ) {
						  $attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'" ' : '';

					} else {
	                	if (is_front_page()){ 
	                		$attributes .= ' href="' . $varpost->post_name . '"'; 
	                	} else {
	                		$attributes .= ' href="' .  ''.esc_url(home_url('/')).'' . $varpost->post_name . '" ';
						}
	                }	

				    if ( $args->has_children ) {
						$object_output = $args->before;
						$object_output .= '<a class="dropdown-toggle" data-toggle="dropdown" '. $attributes .'><span>';
						$object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
						$object_output .= $args->link_after;
	                    $object_output .= '<span class="caret"></span>';
						$object_output .= '</span></a>';
						$object_output .= $args->after;    
				    } else {
						$object_output = $args->before;
						$object_output .= '<a class="not-dropdown" '. $attributes .'><span>';
						$object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
						$object_output .= $args->link_after;
						$object_output .= '</span></a>';
						$object_output .= $args->after;    
				    }
		             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );            	              	
                }
                                         
           } else {
              if ( $args->has_children ) {
           		$output .= $indent . '<li ' . $value . $class_names .'>';

                $attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

	            $object_output = $args->before;
	            $object_output .= '<a class="dropdown-toggle" data-toggle="dropdown" '. $attributes .'>';
	            $object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
	            $object_output .= $args->link_after;
	            $object_output .= '<span class="caret"></span>';
	            $object_output .= '</a>';
	            $object_output .= $args->after;

	             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
			  } else {
           		$output .= $indent . '<li ' . $value . $class_names .'>';

                $attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

	            $object_output = $args->before;
	            $object_output .= '<a class="not-dropdown" '. $attributes .'>';
	            $object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
	            $object_output .= $args->link_after;
	            $object_output .= '</a>';
	            $object_output .= $args->after;

	             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
			  }
	        }
      }
}

add_filter('nav_menu_css_class' , 'act_nav_class' , 10 , 2);
function act_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

add_filter('nav_menu_css_class' , 'act_nav_class1' , 10 , 2);
function act_nav_class1($classes, $item){
     if( in_array('menu-item-has-children', $classes) ){
             $classes[] = 'dropdown ';
     }
     return $classes;
}


/*************************************************
## Pagination Function Act
*************************************************/

function act_pagination($pages = '', $range = 4) {
	$showitems = ($range * 2)+1;
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a class'button button-small' href='".get_pagenum_link(1)."'>&laquo; " . __('First', 'act') . "</a></li>";
		if($paged > 1 && $showitems < $pages) echo "<li><a class=\"active\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; " . __('Previous', 'act') . "</a></li>";
		
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<li ><a class=\"active\">".$i."</a></li>":"<li><a  href='".get_pagenum_link($i)."' >".$i."</a></li>";
			}
		}
	
		if ($paged < $pages && $showitems < $pages) echo "<a class=\"active\" href=\"".get_pagenum_link($paged + 1)."\">" . esc_html__('Next', 'act') . " &rsaquo;</a>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a class=\"active\" href='".get_pagenum_link($pages)."'>" . __('Last', 'act') . " &raquo;</a></li>";
	
}
	
/*************************************************
## Events Calendar Map Filter
*************************************************/ 
add_filter('tribe_events_google_maps_api','act_google_api_key');
 
function act_google_api_key() {
    $mapkey = ot_get_option('act_mapapi');
    return '//maps.googleapis.com/maps/api/js?key='. $mapkey .'';
}

/*************************************************
## Excerpt More Act
*************************************************/ 

function act_excerpt_more($more) {
  global $post;
  return '&hellip;<div class="pull-left"><a href="'. get_permalink($post->ID) . '" class="btn btn-black btn-sm">' . '<span class="read-more">' . esc_html__('Read More', 'act') . '</span></a></div>';
 }
 add_filter('excerpt_more', 'act_excerpt_more');


/*************************************************
## Word Limiter
*************************************************/ 
function act_limit_words($string, $limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $limit));
}


/*************************************************
## Widgets
*************************************************/ 

function act_widgets_init() {
		register_sidebar( array(
		  'name' => esc_html__( 'Blog Sidebar', 'act' ),
		  'id' => 'blog-sidebar',
		  'description'   => esc_html__( 'These are widgets for the Blog page.','act' ),
		  'before_widget' => '<div class="widget wow animated fadeIn">',
		  'after_widget'  => '</div>',
		  'before_title'  => '<h4>',
		  'after_title'   => '</h4>'
		) );

		register_sidebar(array(
			'id' => 'shop-sidebar',
			'name' => esc_html__('Shop Sidebar','act'),
			'before_widget' => '<div class="category-list">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="section-title">',
			'after_title' => '</h4>',
		));

		register_sidebar( array(
		  'name' => esc_html__( 'Footer', 'act' ),
		  'id' => 'footer-1',
		  'description'   => __( 'These are widgets for the Footer.','act' ),
		  'before_widget' => '<div class="col-md-3">',
		  'after_widget'  => '</div>',
		  'before_title'  => '<div class="headline"><h5>',
		  'after_title'   => '</div></h5>'
		) );

}
add_action( 'widgets_init', 'act_widgets_init' );

/*************************************************
## Act Comment Function
*************************************************/

if ( ! function_exists( 'act_comment' ) ) :
 function act_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
   case 'pingback' :
   case 'trackback' :
  ?>


   <article class="post pingback">
   <p><?php _e( 'Pingback:', 'act' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'act' ), ' ' ); ?></p>
  <?php
    break;
   default :
  ?>
        <div class="media wow animated fadeIn">
			<div class="pull-left avatar"> 
			  <?php echo get_avatar( $comment, 80 ); ?>
			</div>
			<div class="media-body">
				<h5 class="media-heading"><?php comment_author(); ?></h5>
				<span class="time-stamp"><small><time class="comment-date" pubdate datetime="<?php comment_time( 'c' ); ?>"><?php comment_date(); ?> at <?php comment_time(); ?></time></small></span>
				<?php comment_text(); ?>
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				<?php edit_comment_link( __( '<i class="fa fa-pencil"></i> Edit', 'act' ), ' ' ); ?> 
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'act' ); ?></em>
				<?php endif; ?>
			</div>	
			<article class="clearfix" id="comment-<?php comment_ID(); ?>"> 
       </div><hr>
  <?php
    break;
  endswitch;
 }
endif;
