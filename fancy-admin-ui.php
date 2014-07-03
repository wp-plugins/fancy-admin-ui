<?php
  /*
  Plugin Name:  Fancy Admin UI
  Plugin URI:   http://boborchard.com/plugins/fancy-admin-ui/
  Description:  Super clean, blue admin panel theme
  Version:      0.1 Beta
  Author:       Bob Orchard
  Author URI:   http://boborchard.com
  */

// Include Admin Styles
function fau_admin_theme_style() {
    wp_enqueue_style('fau-admin-theme', plugins_url('css/fau-styles-admin.css', __FILE__));
    wp_enqueue_style('fau-adminbar', plugins_url('css/fau-styles-adminbar.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'fau_admin_theme_style');

function fau_adminbar_style() {
    wp_enqueue_style('fau-admin-theme', plugins_url('css/fau-styles-adminbar.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'fau_adminbar_style');

// Login Page Styling
function fau_login_theme_style() {
    wp_enqueue_style( 'fau-login-theme', plugins_url('css/fau-styles-login.css', __FILE__));
    wp_enqueue_script( 'fau-login-theme', plugins_url('css/fau-styles-login.css', __FILE__));
}
add_action( 'login_enqueue_scripts', 'fau_login_theme_style' );

// Update Admin Footer
function fau_swap_footer_admin () {
  echo 'Custom Admin UI by <a href="http://boborchard.com" target="_blank">Bob Orchard</a> | Powered by <a href="http://wordpress.org" target="_blank">Wordpress</a></p>';
}
add_filter('admin_footer_text', 'fau_swap_footer_admin');