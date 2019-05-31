<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<main class="page-mussels">
		
		<section class="mussels">
			<div class="container">

				<?php
					/**
					 * woocommerce_before_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				?>

				
					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'single-product' ); ?>

					<?php endwhile; // end of the loop. ?>

			</div>
		</section>


		<section class="addition">
			<div class="container">
				
				<h3>Вот бы <span>добавки...</span></h3>


				<div class="addition__list addition__list_drink swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => -1,
								'product_cat' => 'napitki',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>

									<div class="addition__item swiper-slide">
										
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
										<?php } ?>

										<h2><?php the_title(); ?></h2>

										<div class="addition__order">

											<?php if ( $price_html = $product->get_price_html() ) : ?>
												<span class="price"><?php echo $price_html; ?></span>
											<?php endif; ?>

											<?php

											/**
											 * Hook: woocommerce_after_shop_loop_item.
											 *
											 * @hooked woocommerce_template_loop_product_link_close - 5
											 * @hooked woocommerce_template_loop_add_to_cart - 10
											 */
											do_action( 'woocommerce_after_shop_loop_item' );

											?>

										</div>


									</div>

								<?php
							}
							wp_reset_postdata();
						?>


					</div>
				</div>				
			</div>
		</section>

	</main>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
