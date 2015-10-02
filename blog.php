<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

	<div id="perspective-news">

		<div class="pagetitle">
			<h1>News</h1>
		</div><!--pagetitle-->

		<div id="content">

			<?php
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query('posts_per_page=10'.'&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post();
			?>

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

				</div><!--post-->

			<?php endwhile; ?>

			<?php wp_pagenavi(); ?>

			<?php $wp_query = null; $wp_query = $temp;?>

		</div><!--content-->

	</div><!--perspective-news-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
