<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta name="theme-color" content="#000">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<?php wp_head(); ?>

<body>

	<header class="header">
		<div class="container">
			<div class="header__container">

				<div class="header__top">
					<div class="header__logo">
						<a href="<?php echo get_home_url(); ?>">ВотБы<span>Суши</span></a>
					</div>

					<div class="header__phone">
						
						<a href="tel:+74872574147">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="ph">
							<span>+7(4872)57-41-47</span>
						</a>

						<div class="header__phone_info">
							<p><b>Оформить заказ:</b></p>
							<p>Прием звонков с <span>11:00 </span>до <span>22:30</span></p>
							<p>г. Тула, ул. Новомосковская, д. 25Б</p>
						</div>
					</div>
					
					<nav class="header__links">

						<?php 
							wp_nav_menu( array(
								'menu'=>'menu',
								'menu_class'=>'list',
							    'theme_location'=>'menu',
							) );
						?> 


						<p class="header__links_green mobile"><b>Оформить заказ:</b></p>

						<a href="tel:+74872574147" class="header__links_call mobile">+7 (4872) 57-41-47</a>
						<p class="mobile">Прием звонков с 11:00 до 22:30</p>
						<p class="mobile">г. Тула, ул. Новомосковская, д. 25Б</p>

						<div class="header__links_soc mobile">
							<p><b>Мы в соцсетях:</b></p>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins-footer.png" alt="">
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk-footer.png" alt="">
							</a>
						</div>
					</nav>

					<a href="#" class="header__basket mobile">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-basket.png" alt="">
						<span>10</span>
					</a>

					<button class="btn btn--cart header__top_btn">Корзина</button>

					<button class="header__top_cart-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.png" alt="cart">
					</button>

					<button class="hamburger" type="button">
						<span class="hamburger__box">
							<span class="hamburger__item"></span>
						</span>
					</button>
				</div>

			</div>
		</div>
	</header>

	<nav class="nav">
		<div class="container nav__container">

 			<?php 
				wp_nav_menu( array(
					'menu'=>'nav',
					'menu_class'=>'list',
				    'theme_location'=>'nav',
				) );
			?> 

			<button class="btn btn--cart">Корзина</button>

		</div>
	</nav>

