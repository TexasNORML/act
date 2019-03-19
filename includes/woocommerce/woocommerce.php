<?php

/*************************************************
## Woocommerce 
*************************************************/

if ( class_exists( 'woocommerce' ) ) {
add_theme_support( 'woocommerce' );
add_image_size('shopfast-woo-product', 450, 450, true);

// Remove woocommerce defauly styles
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// hide default shop title anasayfadaki title gizlemek için
add_filter('woocommerce_show_page_title', 'override_page_title');
function override_page_title() {
return false;
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 ); /*remove result count above products*/
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ); //remove rating
//remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 ); //remove woo pagination
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

add_action( 'woocommerce_before_shop_loop_item', 'shopfast_shop_thumbnail', 10);
add_action( 'momizat_woo_product_head', 'woocommerce_template_loop_add_to_cart', 10);
add_action( 'momizat_woo_product_details', 'woocommerce_template_loop_add_to_cart', 20);

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20);
remove_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products',10);
add_action( 'woocommerce_after_single_product_summary', 'shopfast_related_products', 20);
function shopfast_related_products()
{
    woocommerce_related_products( array('posts_per_page' => 3));
}


//custom order
function momizat_cusotm_ordering_p1() {
  $output = '
					';
    echo $output;
} 
function momizat_cusotm_ordering_p2() {
    $output = '';
    echo $output; 
}


/*----------------------------
    Add my owns
 ----------------------------*/
add_action( 'woocommerce_before_shop_loop', 'momizat_cusotm_ordering_p1', 10 );
add_action( 'woocommerce_before_shop_loop', 'momizat_cusotm_ordering_p2', 30 );


function shopfast_shop_thumbnail () {
global $product;
	$rating = $product->get_rating_html(); //get rating
	    global $woocommerce;
	    $cart_url = $woocommerce->cart->get_cart_url();
        $price = $product->get_price_html();

	$id = get_the_ID();
	$size = '50';

	$output = "<a href='".get_permalink()." ' class='product-link clearfix'>";
    $output .="<div class='product-thumbnail'>";
	$output .= get_the_post_thumbnail( $id , $size );
    $output .="<div class='caption bottom-left'>";
    $output .= $price;
    $output .="</div></div>";
	$output .= "</a>";
	if($product->product_type == 'simple') $output .= "<a href='$cart_url' class='add-to-cart cart-hover'></a>";

    $output .="<div class='product-info clearfix'>";
	$output .="<h4 class='title'>";
	$output .="<a href='" .get_permalink()."'>";
    $output .= get_the_title();
	$output .="</a>";
    $output .="</h4>";
    $output .="<div class='by'>";
    $output .= $rating;
    $output .= "</div>";
	$output .= shopfast_add_to_cart_button();
	$output .="";
    $output .="</div>";
	echo $output;
}


/*************************************************
## Woocommerce Cart Text
*************************************************/

//add to cart button
function shopfast_add_to_cart_button()
{
	global $product;

	if ($product->product_type == 'bundle' ){
		$product = new WC_Product_Bundle($product->id);
	}

	$btclass  = "asdad";
	$output = '';

	ob_start();
	woocommerce_template_loop_add_to_cart();
	$output .= ob_get_clean();

	if(!empty($output))
	{
		$pos = strpos($output, ">");
		
		if ($pos !== false) {
		    $output = substr_replace($output,">", $pos , strlen(1));
		}
	}
	

	if($product->product_type == 'variable' && empty($output))
	{
		$output = "<a class='add-to-cart cart-hover' href='".get_permalink($product->id)."'>".__('Select options','framework')."</a>";
	}

	if($product->product_type == 'simple')
	{
		$output .= "";
	}
	else
	{
		$btclass  = "single_bt";
	}
	 

	
	if($output) return "$output";
}

function shopfast_is_woocommerce_page () {
        if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
                return true;
        }
        $woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
                                        "woocommerce_terms_page_id" ,
                                        "woocommerce_cart_page_id" ,
                                        "woocommerce_checkout_page_id" ,
                                        "woocommerce_pay_page_id" ,
                                        "woocommerce_thanks_page_id" ,
                                        "woocommerce_myaccount_page_id" ,
                                        "woocommerce_edit_address_page_id" ,
                                        "woocommerce_view_order_page_id" ,
                                        "woocommerce_change_password_page_id" ,
                                        "woocommerce_logout_page_id" ,
                                        "woocommerce_lost_password_page_id" ) ;
        foreach ( $woocommerce_keys as $wc_page_id ) {
                if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
                        return true ;
                }
        }
        return false;
}


} // is woocommerce activated

/*************************************************
## Category Description
*************************************************/ 

  function woocommerce_taxonomy_archive_description() {
    if ( is_tax( array( 'product_cat', 'product_tag' ) ) && get_query_var( 'paged' ) == 0 ) {
      $description = wpautop( do_shortcode( term_description() ) );
      if ( $description ) {
        echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 desc-out"><div class="description">' . $description . '</div></div><div class="clearfix "></div>';
      }
    }
  }

/*************************************************
## Woo Add To Cart
*************************************************/ 


add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<a class="btn btn-iconed cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
												<i class="icon-shopcart"></i>
												<span><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></span>
											</a>
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
	
}

/*************************************************
## Woo Search Form
*************************************************/ 

add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );

function woo_custom_product_searchform( $form ) {

	$form = '
     <div class="search-box">
     <form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
					
			<input class="query" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search', 'woocommerce' ) . '" />
			<button class="btn-search" type="hidden" name="post_type" value="product"><i class="fa fa-search"></i></button>
		
	</form></div>';

	return $form;
	
}
/*************************************************
## Paypal Image
*************************************************/ 

function replacePayPalIcon($iconUrl) {
	return get_stylesheet_directory_uri() . '/img/paypal.png';
}
 
add_filter('woocommerce_paypal_icon', 'replacePayPalIcon');


?>