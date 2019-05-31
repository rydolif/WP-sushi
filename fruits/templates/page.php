<?php
	/**
		* Template name: page
	*/

get_header();
?>

<main class="main">
	<section class="page">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
					
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
			</div>
		</div>
	</section>

	<section class="contacts">
		<div id="map" class="map"></div>

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
