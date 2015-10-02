	</div><!--body-->

</div><!--container-->

<div id="extended-footer-wrap">

	<div id="extended-footer">
		<div id="contact">
			<h3>Contact Us</h3>

			<address>
				<p>Unit 4,<br>
Clock Court, <br>
Campbell Way,<br>
Dinnington<br>
Sheffield<br>
S25 3QD</p>
			</address>

			<ul id="contact-details">
				<li id="telephone">01909 560 677</li>
				<li id="email"><a href="mailto:office@warnesanderton.co.uk">Send us an E-mail</a></li>
			</ul>
		</div><!--contact-->

		<div id="footernav">
		</div><!--footernav-->

		<div id="pfg-news">
			<h3>News</h3>

			<ul id="news-items">
				<?php query_posts('posts_per_page=2'); ?>
				<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
					<li>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</li>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</ul>

			<p><a href="/news" class="more">View more news items &raquo;</a></p>
		</div>

		<div id="happy-clients">
			<?php query_posts('posts_per_page=1&cat=3'); ?>
			<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
				<blockquote>
					<?php the_content(); ?>
				</blockquote>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

	<div id="subsidary-statement">
		<a href="http://www.pfgl.co.uk"><img src="<?php bloginfo('template_url'); ?>/images/perspective_logo_small.png" alt="Perspective Financial Group Ltd Logo" /></a>
		<p><?php bloginfo('name'); ?> is a subsidiary of Perspective Financial Group Limited.</p>
	</div>
</div>

<div id="footer">
		<p><small>Registered in England and Wales No: 4742035. Registered Office: Paradigm House, Brooke Court, Wilmslow, Cheshire, SK9 3ND.</small></p>
		<p><small>Warnes Anderton Limited is a subsidiary of Perspective Financial Group Limited.</small></p>
		<p><small>Warnes Anderton Limited is authorised and regulated by the Financial Conduct Authority.</small></p>

    <p><small>Should you have cause to complain, and you are not satisfied with our response to your complaint, you may be able to refer it to the Financial Ombudsman Service, which can be contacted as follows:</small></p>
   <p><small>The Financial Ombudsman Service Exchange Tower, London, E14 9SR</small></p>
     <p><small>Tel: 0800 023 4567 or 0300 123 9 123</small></p>
     <p><small><a href="http://www.financial-ombudsman.org.uk">www.financial-ombudsman.org.uk</a></small></p>


		<ul class="footer-links">
			<li><a href="/sitemap.xml">Sitemap</a> | </li>
			<li><a href="/find-us">Find Us</a></li>
		</ul>

		<ul>
			<li>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All rights reserved. | </li>
			<li>Web design by <a id="oiLogo" href="http://www.space48.com"><span>Space 48</span></a></li>
		</ul>
</div><!--footer-->

<?php wp_footer(); ?>

<div class="cookie_layer">
            <div class="cookie_inner"><span class="cookie_icon">&nbsp;</span><div class="cookie_text">This website uses analytical cookies. By continuing to browse the site, you are agreeing to our use of cookies. To find out more about the analytical cookies we use and how to switch them off please follow this <a href="/privacy-policy">link</a>.</div></div>
        </div>
</body>
</html>
