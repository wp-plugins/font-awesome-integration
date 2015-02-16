<?php
/**
 * Plugin Name: Font Awesome Integration
 * Description: This plugin integrate the Font Awesome library with your wordpress installation.
 * Version: 1.0
 * Author: Manuel Costales
 * Author URI: http://www.manuelcostales.com
 */

/*add javascripts to the header*/
add_action('wp_head', 'add_script');
function add_script() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}