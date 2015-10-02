<?php get_header(); ?>

		<div class="pagetitle">
			<h1>News</h1>
		</div><!--pagetitle-->

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<p class="date"><?php the_time('d') ?> <span><?php the_time('M'); ?></span></p>
				<ul class="meta">
					<li>Posted in <?php the_category(', '); ?></li>
				</ul>
				<div class="post-content">
					<?php the_content(''); ?>
				</div>
			</div>

		<?php endwhile; ?>

		<div class="pagination">
			<p class="prev"><?php next_posts_link('Older posts'); ?></p>
			<p class="next"><?php next_posts_link('Newer posts'); ?></p>
		</div><!--pagination-->

		<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
