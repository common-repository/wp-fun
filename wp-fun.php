<?php

/*
Plugin Name: WP Fun
Plugin URI: http://wpfun.xyz
Description: Just a funny farts sound plugin for WordPress site.  
Author: weXteam
Version: 1.0.0
Author URI: http://wexteam.com
*/


/*-----------------------------------------------------
 *Latest Jquery For WP Fun
 *------------------------------------------------------*/
function wp_fun_latest_jquery() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'init', 'wp_fun_latest_jquery' );



/*-----------------------------------------------------
 * Some predefine Set-up for WP Fun
 *-----------------------------------------------------*/
define('WP_FUN_PlUGIN', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



/*------------------------------------------------------------
 * Main Jquery and Style for WP Fun
 *------------------------------------------------------------*/
function wp_fun_main_jquery() {

	wp_enqueue_script( 'wp-fun-fartscroll', WP_FUN_PlUGIN.'js/fartscroll.js', array('jquery'), 1.0, false);
	
}
add_action( 'init', 'wp_fun_main_jquery' );



/*---------------------------------------------------
 * Add script in footer for WP Fun
 *---------------------------------------------------*/
function wp_fun_active_script(){
?>
	<script>
		jQuery.noConflict();

		(function( $ ) {
		 	$(function() {
				$(document).ready(function($){

					fartscroll();

				});
			});
		})(jQuery);
	</script>
<?php
}
add_action('wp_footer', 'wp_fun_active_script');


