<?php
/*
Template Name: Bottom Links
*/
?>


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

				<!-- <div class="sub-links bottom">

					<div id="enquire" class="sub-link first">
						<h3>Enquire</h3>

						<a href="/enquire" class="banner"><img src="/wp-content/uploads/enquire.jpg" alt="David Hesketh" /></a>

						<p>For a no obligation discussion about how Perspective could be a viable proposition for your IFA business please provide us with some further details and David Hesketh, our Group M&A Manager, will contact you.</p>

						<p>The acquisition process is straightforward and quicker than you might think.</p>

						<p><a href="/enquire" class="more">Read more &raquo;</a></p>
					</div>enquire

					<div id="testimonials" class="sub-link">
						<h3>Testimonials</h3>

						<a href="/why-perspective/testimonials" class="banner"><img src="/wp-content/uploads/testimonials.jpg" alt="Testimonials" /></a>

						<p>Find out why some of our existing firms chose Perspective as their partner of choice.  Our firm Principal’s are happy to discuss why they work with Perspective.</p>

						<p><a href="/why-perspective/testimonials" class="more">Read more &raquo;</a></p>
					</div>testimonials

					<div id="thegroup" class="sub-link">
						<h3>The Group</h3>

						<a href="/the-group" class="banner"><img src="/wp-content/uploads/group.jpg" alt="sublinkthegroup" /></a>

						<p>This website is for use by financial advisers and intermediaries only.</p>

						<p>If you are not a financial intermediary and are looking for financial advice from a reputable adviser near you, please check our interactive map of Perspective firms and contact your local adviser.</p>

						<p><a href="/the-group" class="more">Read more &raquo;</a></p>
					</div>thegroup

				</div> -->

			</div><!--content-->

		<?php endwhile; ?>

		<?php endif; ?>

<?php get_footer(); ?>
