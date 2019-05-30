<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package schoolstudy
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="cabinet--courses__item">
		<div class="cabinet--courses__item_img">
			<?php schoolstudy_post_thumbnail(); ?>
		</div>
		<div class="cabinet--courses__item_wrap">
			<?php the_title( sprintf( '<h2 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php the_excerpt(); ?>
		</div>
	</div>

</article>
