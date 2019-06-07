

	<footer class="footer">
		<div class="container">
			<div class="footer__container">

				<div class="footer__col">
					<a href="<?php echo get_home_url(); ?>">ВотБы<span>Суши</span></a>
					<p>&copy; ВотБыСуши Все права защищены <br>
						<a href="#" target="_blank">Пользовательское соглашение</a>
					</p>
				</div>

				<div class="footer__col">
					<?php 
						wp_nav_menu( array(
							'menu'=>'menu',
							'menu_class'=>'list',
						    'theme_location'=>'menu',
						) );
					?> 
				</div>

				<div class="footer__col">

					<div class="footer__phone">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="alt">
						<a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
						<p>Прием звонков: с <span>11:00 </span>до <span>22:30</span></p>
						<a href="tel:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
					</div>

					<div class="footer__place">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/placeholder.png" alt="alt">
						<span>300045, г. Тула, Новомосковскя 25Б</span>
					</div>

				</div>

				<div class="footer__col">
					<div class="footer__soc">
						<span>Мы в соцсетях:</span>
						<a href="<?php the_field('vk', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk-footer.png" alt="alt"></a>
						<a href="<?php the_field('in', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins-footer.png" alt="alt"></a>
					</div>
				</div>

				
			</div>
		</div>
	</footer>



	<?php wp_footer(); ?>

</body>
</html>