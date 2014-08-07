<?php
/**
 * Plugin Name: moreishi-flickr-slideshow
 * Plugin URI: https://github.com/moreishi/moreishi-flickr-slideshow
 * Description: This is a flickr none flash version slideshow
 * Version: 1.0
 * Author: Moreishi
 * Author URI: http://www.facebook.com/moreishi
 * License: Free
 */

defined('ABSPATH') or die("No script kiddies please!");

//$current = "";

add_action('template_redirect', 'add_my_scripts');
add_action( 'wp_enqueue_scripts', 'wpse87681_enqueue_custom_stylesheets', 11 );		

function add_my_scripts() {
    wp_enqueue_script('moreishi-galleria-min', plugins_url('galleria/galleria-1.4.min.js', __FILE__), array('jquery'), '1.0', true);
    wp_enqueue_script('moreishi-galleria-flickr-min', plugins_url('galleria/plugins/flickr/galleria.flickr.min.js', __FILE__), array('jquery'), '1.0', true);
    wp_enqueue_script('moreishi-galleria-classic-min', plugins_url('galleria/themes/classic/galleria.classic.min.js', __FILE__), array('jquery'), '1.0', true);
    wp_enqueue_script('moreishi-flickr-slideshow', plugins_url('moreishi-flickr-slideshow.js', __FILE__), array('jquery'), '1.0', true);
}

function wpse87681_enqueue_custom_stylesheets() {
    if ( ! is_admin() ) {
        wp_enqueue_style('moreishi-galleria-style', plugins_url('moreishi-flickr-ss.css', __FILE__));
    }
}