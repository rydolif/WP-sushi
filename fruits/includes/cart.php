<?php
	//Вывод кратких данных из корзины
	if ( ! function_exists( 'cart_link' ) ) {
	 function cart_link() {
	 ?>
	<a class="cart-contents btn btn--cart cart-wrap" href="<?php echo get_home_url(); ?>/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
		<?php echo sprintf (_n( '%d шт.', '%d шт.', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> | <?php echo WC()->cart->get_cart_total(); ?>
		</a> 
	 <?php
	 }
	}

	//Ajax Обновление кратких данных из корзины
	add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	 ob_start();
	 ?>
	 <a class="cart-contents btn btn--cart cart-wrap" href="<?php echo get_home_url(); ?>/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
	 	<?php echo sprintf (_n( '%d шт.', '%d шт.', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> | <?php echo WC()->cart->get_cart_total(); ?></a> 
	 <?php
	 $fragments['a.cart-contents'] = ob_get_clean();
	 return $fragments;
	}
