<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


//--------------------------------single-----------------------------
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);




remove_all_filters( 'woocommerce_after_single_product_summary');

remove_all_filters( 'woocommerce_before_shop_loop');


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Все $fields в этой функции будут пропущены через фильтр
function custom_override_checkout_fields( $fields ) {
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_state']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['order']['order_comments']);
	return $fields;
}
