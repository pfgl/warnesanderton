<?php
/*
Template Name: Find an IFA
*/
?>

<?php get_header(); ?>

	<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

		<div class="pagetitle">
			<h1><?php the_title(); ?></h1>

			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			} ?>
		</div><!--pagetitle-->


		<div id="ifa-content">
			<?php the_content(); ?>

			<div id="ifa-details">
			</div><!--ifa-details-->

		</div><!--ifa-content-->

		<div id="ifa-map">
			<a id="rutherford-wilkinson" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/rw.jpg" class="bullet preview">Rutherford Wilkinson</a>
			<a id="harrogate-independant" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/harrogate.gif" class="bullet preview">Harrogate Independent Financial Services</a>
			<a id="multiplex" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/multiplex.jpg" class="bullet preview">Multiplex</a>
			<a id="perspective-group" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/pfgl.jpg" class="bullet preview">Perspective Group</a>
			<a id="warnes-anderton" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/warnesanderton.jpg" class="bullet preview">Warnes Anderton</a>
			<a id="mcgregors" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/mcgregors.jpg" class="bullet preview">McGregors Wealth Management</a>
			<a id="cambridge-investments" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/cambridge.jpg" class="bullet preview">Cambridge Investments Limited</a>
			<a id="applewood1" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/applewood.jpg" class="bullet preview">Applewood Wealth Management Ltd</a>
			<a id="applewood2" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/applewood.jpg" class="bullet preview">Applewood Wealth Management Ltd</a>
			<a id="wingham-wyatt" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/wingham-wyatt.jpg" class="bullet preview">Wingham Wyatt Financial Services Ltd</a>
			<a id="perspective-financial" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/perspective.gif" class="bullet preview">Perspective Financial Management Ltd </a>
			<a id="chambers-co" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/chambersandco.jpg" class="bullet preview">Chambers &amp; Co</a>
			<a id="chessman-partners" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/chessmanpartners.jpg" class="bullet preview">Chessman & Partners Ltd</a>
			<a id="charles-reynolds-associates" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/cra.jpg" class="bullet preview">Charles Reynolds Associates</a>
			<a id="pims" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/pims.jpg" class="bullet preview">Professional Investment Management Services (Maidstone) Ltd</a>
			<a id="platinum-portfolios" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/platinum.jpg" class="bullet preview">Platinum Portfolios</a>
			<a id="equilibrium" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/equilibrium.jpg" class="bullet preview">Equilibrium Wealth Management Limited</a>
			<a id="leedham" href="<?php bloginfo ('template_url'); ?>/images/ifa-logos/leedham.jpg" class="bullet preview">Leedham Independent Financial Advisers Limited</a>
		</div><!--ifa-map-->

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>
