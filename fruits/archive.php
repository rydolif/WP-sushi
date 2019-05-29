<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package schoolstudy
 */

get_header();
?>

	<section class="cabinet--courses">
		<div class="container">

			<h2><?php single_cat_title(); ?></h2>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink() ?>" class="cabinet--courses__item">
					<div class="cabinet--courses__item_img">	
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cabinet--courses.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>
					</div>
					<div class="cabinet--courses__item_wrap">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					</div>
					
				</a>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wptuts_pagination(); ?> 

		</div>
	</section>


<?php
get_footer();
