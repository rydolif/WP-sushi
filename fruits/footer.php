

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


	<script>
      function initMap() {
        var uluru = {lat: 34.9307386, lng: 33.6249393};
        var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: uluru,
        });


          var marker = new google.maps.Marker({
            position: {lat: 34.9307386, lng: 33.6249393},
            map: map,
            // icon: '<?php echo get_template_directory_uri(); ?>/assets/img/mark.png'
          });

         var contentString = '<div id="content" class="map__content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h5 id="firstHeading" class="firstHeading map__title">Новомосковская улица, 25Б</span></h5>'+
          '</div>';

          var infowindow = new google.maps.InfoWindow({
                content: contentString
              });

              infowindow.open(map, marker);

          }
 	</script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnk4RCDwjSucIJ2WXRnLkuCrsWR4DUM4&callback=initMap"></script>

	<?php wp_footer(); ?>

</body>
</html>