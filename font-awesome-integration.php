<?php
/**
 * Plugin Name: Font Awesome Integration
 * Plugin URI: https://wordpress.org/plugins/font-awesome-integration
 * Description: This plugin integrate the Font Awesome library with your wordpress installation.
 * Version: 1.1
 * Author: Manuel Costales
 * Author URI: http://www.manuelcostales.com
 */
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );
/*add javascripts to the header*/
add_action('wp_head', 'add_fawesome_mc');
function add_fawesome_mc() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}
