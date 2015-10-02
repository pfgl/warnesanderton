<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */

automatic_feed_links();

/* Widgetize me baby! */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

/* Add Wordpress Menu Support */
add_theme_support('nav-menus');
register_nav_menu('main-menu', 'Main Menu');


/* Remove WP generator details and all the other gubbins that aren't required */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra');

function remove_generator() {
	return '';
}

add_filter('the_generator', 'remove_generator');

function new_excerpt_more($more) {
	return '[.....]';
}

add_filter('excerpt_more', 'new_excerpt_more');


/* Gravity Forms Code */

if(!is_admin()){
wp_enqueue_script("gforms_ui_datepicker", WP_PLUGIN_URL . "/gravityforms/js/jquery-ui/ui.datepicker.js", array("jquery"), "1.3.9", true);

wp_enqueue_script("gforms_datepicker", WP_PLUGIN_URL . "/gravityforms/js/datepicker.js", array("gforms_ui_datepicker"), "1.3.9", true);

wp_enqueue_script("gforms_conditional_logic_lib", WP_PLUGIN_URL . "/gravityforms/js/conditional_logic.js", array("gforms_ui_datepicker"), "1.3.9", true);

wp_enqueue_style("gforms_css", WP_PLUGIN_URL . "/gravityforms/css/forms.css");
}


?>
