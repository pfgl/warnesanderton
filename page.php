<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="pagetitle">
				<h1><?php the_title(); ?></h1>

				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>
			</div><!--pagetitle-->

			<div id="content">
				<?php the_content(''); ?>
			</div><!--content-->

		<?php endwhile; ?>

		<?php endif; ?>

<?php get_footer(); ?>
