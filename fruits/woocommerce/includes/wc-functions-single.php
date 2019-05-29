<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



//---------------------------------------------wrapper-img-----------------------------------------------

	add_action( 'woocommerce_before_single_product_summary', 'school_wrapper_img_start',  5 );
		
	function school_wrapper_img_start() {
	?>
		<div class="goods-block">
			<div class="goods-block__image">

	<?php
	}


	add_action( 'woocommerce_before_single_product_summary', 'school_wrapper_img_end',  25 );
		
	function school_wrapper_img_end() {
	?>

		</div>

	<?php
	}

//---------------------------------------------wrapper-content----------------------------------------------

	add_action( 'woocommerce_before_single_product_summary', 'school_wrapper_content_start',  30 );
		
	function school_wrapper_content_start() {
	?>
			<div class="goods-block__info">

	<?php
	}

	 add_action( 'woocommerce_after_single_product_summary', 'school_wrapper_content_end',  5 );
		
	function school_wrapper_content_end() {
	?>


			</div>
		</div>

	<?php
	}
