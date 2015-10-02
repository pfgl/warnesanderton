<?php get_header(); ?>

	<div id="perspective-news">

		<div class="pagetitle">
			<h1>News</h1>
		</div><!--pagetitle-->

		<?php if (have_posts()) : ?>

		<?php if (is_category()) { ?>
		<h3>Browsing the <?php single_cat_title(); ?> Category</h3>
		<?php } elseif( is_month() ) { ?>
		<h3>Browsing posts from <?php the_time('F Y'); ?></h3>
		<?php } elseif( is_year() ) { ?>
		<h3>Browsing posts from <?php the_time('F Y'); ?></h3>
		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?>>
			<div class="date">
				<span class="day"><?php the_time('d') ?> </span>
				<span class="month"><?php the_time('M'); ?></span>
			</div><!--date-->

			<div class="excerpt">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<p class="more"><a href="<?php the_permalink(); ?>">Read More</a></p>
			</div><!--excerpt-->
		</div>

		<?php endwhile; ?>

		<?php wp_pagenavi(); ?>

		<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
