<?php
/*
Plugin Name: WP Login Styles
Description: A plugin to customize the WordPress login page styles.
Version: 1.0
Author: Matin Khamooshi
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Enqueue login styles
function login_styles() {
    wp_enqueue_style('login-styles', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('login_enqueue_scripts', 'login_styles');

// Login logo URL
function login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_logo_url');

// Login logo title
function login_logo_url_title() {
    return 'Matin Khamooshi';
}
add_filter('login_headertitle', 'login_logo_url_title');
?>