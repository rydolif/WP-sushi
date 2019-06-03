<?php
	/**
		* Template name: index
	*/

get_header();
?>

	<main class="main">

		<section class="hero" id="app">

			<div class="hero__slider">
				<?php if( have_rows('bunner') ): ?>

					<?php while( have_rows('bunner') ): the_row(); 

						$title = get_sub_field('title');
						$text = get_sub_field('text');
						$link = get_sub_field('link');
						$action = get_sub_field('action');
						$img = get_sub_field('img');

						?>

							<div class="hero__item" style="background-image: url(<?php echo $img; ?>)">
								<div class="container">
									
									<div class="hero__info">
										<div class="hero__info_text">
											<h1><?php echo $title; ?></h1>
											<p><?php echo $text; ?></p>
										</div>
										<p class="hero__info_action"><?php echo $action; ?></p>
									</div>

									<a href="<?php echo $link; ?>" class="btn hero__btn order_open">Сделать заказ</a>

								</div>
							</div>

					<?php endwhile; ?>

				<?php endif; ?>
			</div>

			<div class="hero__slider_arrows container"></div>

		</section>

		<section class="gallery">
			<div class="container">

				<div class="gallery__top">
					<h3>Роллы</h3>
					<div class="gallery__top_pages gallery__top_rolls">
						<div class="swiper-button-prev swiper-button-prev1"></div>
						<div class="swiper-pagination swiper-pagination1"></div>
						<div class="swiper-button-next swiper-button-next1"></div>
					</div>
					<a href="<?php echo get_home_url(); ?>/product-category/roly/" class="btn btn--transparent">Показать все</a>
				</div>

 				<div class="gallery__slider gallery__slider1 swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'roly',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>

									<div class="gallery__slider_item swiper-slide">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
										<?php } ?>
										<div class="gallery__slider_info">
											<h4><?php the_title(); ?></h4>
											<?php the_content(); ?>


											<div class="gallery__slider_order addition__order">

											<?php if ( $price_html = $product->get_price_html() ) : ?>
												<p class="price"><b><?php echo $price_html; ?></b></p>
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
									</div>

								<?php
							}
							wp_reset_postdata();
						?>

					</div>
				</div>


				<div class="gallery__top">
					<h3>Суши</h3>
					<div class="gallery__top_pages gallery__top_sushi">
						<div class="swiper-button-prev swiper-button-prev2"></div>
						<div class="swiper-pagination swiper-pagination2"></div>
						<div class="swiper-button-next swiper-button-next2"></div>
					</div>
					<a href="<?php echo get_home_url(); ?>/product-category/sushi/" class="btn btn--transparent">Показать все</a>
				</div>

				<div class="gallery__slider gallery__slider2 swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'sushi',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>

									<div class="gallery__slider_item swiper-slide">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
										<?php } ?>
										<div class="gallery__slider_info">
											<h4><?php the_title(); ?></h4>
											<?php the_content(); ?>


											<div class="gallery__slider_order addition__order">

											<?php if ( $price_html = $product->get_price_html() ) : ?>
												<p class="price"><b><?php echo $price_html; ?></b></p>
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
									</div>

								<?php
							}
							wp_reset_postdata();
						?>
						
					</div>
				</div>


				<div class="gallery__top">
					<h3>Сеты</h3>
					<div class="gallery__top_pages gallery__top_sets">
						<div class="swiper-button-prev swiper-button-prev3"></div>
						<div class="swiper-pagination swiper-pagination3"></div>
						<div class="swiper-button-next swiper-button-next3"></div>
					</div>
					<a href="<?php echo get_home_url(); ?>/product-category/sety/" class="btn btn--transparent">Показать все</a>
				</div>

				<div class="gallery__slider gallery__slider3 swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'sety',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>

									<div class="gallery__slider_item swiper-slide">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
										<?php } ?>
										<div class="gallery__slider_info">
											<h4><?php the_title(); ?></h4>
											<?php the_content(); ?>


											<div class="gallery__slider_order addition__order">

											<?php if ( $price_html = $product->get_price_html() ) : ?>
												<p class="price"><b><?php echo $price_html; ?></b></p>
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
									</div>

								<?php
							}
							wp_reset_postdata();
						?>

					</div>
				</div>


				<div class="gallery__top">
					<h3>WOK</h3>
					<div class="gallery__top_pages gallery__top_wok">
						<div class="swiper-button-prev swiper-button-prev4"></div>
						<div class="swiper-pagination swiper-pagination4"></div>
						<div class="swiper-button-next swiper-button-next4"></div>
					</div>
					<a href="<?php echo get_home_url(); ?>/product-category/wok/" class="btn btn--transparent">Показать все</a>
				</div>

				<div class="gallery__slider gallery__slider4 swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'wok',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>

									<div class="gallery__slider_item swiper-slide">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
										<?php } ?>
										<div class="gallery__slider_info">
											<h4><?php the_title(); ?></h4>
											<?php the_content(); ?>


											<div class="gallery__slider_order addition__order">

											<?php if ( $price_html = $product->get_price_html() ) : ?>
												<p class="price"><b><?php echo $price_html; ?></b></p>
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
									</div>

								<?php
							}
							wp_reset_postdata();
						?>

					</div>
				</div>
				
			</div>
		</section>

		<section class="addition">
			<div class="container">
				
				<h3>Топпинги</h3>

				<div class="addition__list addition__list_toping swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'topingi',
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
												<p class="price"><b><?php echo $price_html; ?></b></p>
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

				<h3>Напитки</h3>

				<div class="addition__list addition__list_drink swiper-container">
					<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
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
												<p class="price"><b><?php echo $price_html; ?></b></p>
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

		<section class="delivery">
			<div class="container ">
				<div class="delivery__container">

					<div class="delivery__image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-delivery.png" alt="alt">
					</div>
					
					<div class="delivery__info">
						<h3>Доставка и оплата</h3>

						<p>Доставка осуществляется по всему городу.</p>
						<p>Стоимость доставки в отдельные районы - <b>150 рублей</b> <br>(подробности уточняйте у оперетора).</p>
						<p>Заказать на сумму <b>500 рублей</b> и выше доставляется <b>бесплатно. </b><br>Вы можете оформить самовывоз по адресу: <br>г. Тула, ул. Новомосковская, д. 25Б</p>
						<p>Оплатить покупки можно наличными курьеру при получении.</p>
					</div>

				</div>
			</div>
		</section>

		<section class="contacts">
			<div id="map" class="map">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa7267d7ab0d7f615c80d6cb1fc0e5339e2bb3bc70705d5d35a5d54340cf5dd68&amp;source=constructor" frameborder="0"></iframe>
			</div>

			<div class="container contacts__container">
				<h3>Контакты</h3>

				<div class="contacts__place">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/placeholder.png" alt="alt">
					<span>300045, г. Тула, Новомосковскя 25Б</span>
				</div>

				<div class="contacts__phone">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="alt">
					<a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
					<p>Прием звонков: с <b>11:00 </b>до <b>22:30</b></p>
				</div>

				<div class="contacts__soc">
					<span>Мы в соцсетях:</span>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/vk.png" alt="alt"></a>
					<a href="<?php the_field('in', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/ins.png" alt="alt"></a>
				</div>
			</div>
		</section>

	</main>


<?php
get_footer();
