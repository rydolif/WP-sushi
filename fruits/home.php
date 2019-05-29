<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package schoolstudy
 */

get_header();
?>

	<section class="cabinet--courses">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10">

<!-- 					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
					<?php wptuts_pagination(); ?>  -->
<!-- 
				<?php
				$categories = get_categories(array('taxonomy'=>'category','hide_empty'=>false));
				if($categories){
				foreach($categories as $cat){?>
					<a href="<?php echo get_category_link($cat->term_id);?>" class="cabinet--courses__item">
				<?php if($imgcat1=get_field("imgcat1",$cat)){?>
					<div class="cabinet--courses__item_img"><img src="<?php echo $imgcat1;?>"/></div>
					<div class="cabinet--courses__item_wrap">
						<h3><?php echo $cat->name;?></h3>
					</div>
				<?php }?>
					</a>
				<?php }?>
				<?php }?>
 -->
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
