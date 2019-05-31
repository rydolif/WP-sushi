<?php
	/**
		* Template name: checkout
	*/

get_header();
?>

<main class="main">
	<section class="page">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					
					
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
			</div>
		</div>
	</section>

</main>


<?php
get_footer();
