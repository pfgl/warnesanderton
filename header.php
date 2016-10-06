<!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="64oZ4ajVJkWs432XGw7_gpiINZ7c0Bn5XywFWNde5H0" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="icon" type="image/x-icon" href="/favicon.ico" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link media="screen" type="text/css" href="<?php bloginfo('template_url'); ?>/css/cookies/cookiecss.css" rel="stylesheet"/>
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/cookie.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var visited = $.cookie("warncookie");
            if (visited == null) {
                $('.cookie_layer').show();
                $.cookie('warncookie', 'yes', { expires: 365, path: '/' });
            }
            $.cookie('warncookie', 'yes', { expires: 365, path: '/' });
        });
    </script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.dwFadingLinks.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cyclic-fade.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/script.js"></script>

<?php if (is_page('14')) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/tooltip.js"></script>
<?php  } ?>

<!--[if IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" />
<![endif]-->

<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" />
<![endif]-->

<!-- WP generated header -->
<?php wp_head(); ?>
<!-- WP generated header -->

<?php flush(); ?>

</head>

<body>

<div id="wrapper">

	<div id="header">

		<div id="logo">
			<a href="<?php bloginfo('url'); ?>"><span>Perspective Financial Group LTD - Creating Wealth</span></a>
		</div><!--logo -->

		<h3 class="header-tel">01909 560 677</h3>

		<?php wp_nav_menu('leftnav'); ?>

		<!-- <ul id="social-links">
			<li><a href="http://www.twitter.com/perspectivefgl"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter" width="24" height="24" /></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook" width="24" height="24" /></a></li>
			<li><a href="http://uk.linkedin.com/pub/david-hesketh/17/5b8/b78"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="linkedin" width="24" height="24" /></a></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" alt="rss" width="24" height="24" /></a></li>
		</ul> -->

		<div class="legal">
			<p>Warnes Anderton Limited is authorised and regulated by the Financial Conduct Authority</p>
		</div>



	</div><!--header-->

<div id="body">
