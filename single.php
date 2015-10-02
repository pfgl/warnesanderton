<?php get_header(); ?>

<div id="perspective-news">

	<div class="pagetitle">
		<h1>News</h1>
	</div><!--pagetitle-->

	<div class="post-content">

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post-head">
			<h2><?php the_title(); ?></h2>
			<p class="meta">This entry was posted on <?php the_time('d') ?> <?php the_time('F'); ?></p>
		</div><!--post-head-->

			<?php the_content(''); ?>

		<?php endwhile; ?>
		<?php endif; ?>

	</div><!--post-content-->

	<div class="post-options">
		<p><a href="/news">&laquo; Back to News Articles</a></p>
	</div><!--post-options-->

</div><!--perspective-news-->

<?php get_footer(); ?>
