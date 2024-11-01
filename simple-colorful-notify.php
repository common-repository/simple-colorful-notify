<?php
/*
 *Plugin Name: Simple Colorful Notify
 * Plugin URL :http://zooroofchi.ir/simple-colorful-notify
 * Description: Create colorful notify in wordpress posts and pages
 * Version: 1.0
 * Author: Mahmoud Zooroofchi
 * Author URI: http://zooroofchi.ir
 * Text Domain : simple-colorful-notify
 * Domain Path: /languages
 */
add_action('plugins_loaded','scn_translation');
function scn_translation(){
	load_plugin_textdomain('simple-colorful-notify',false,SCN_LANG_DIR);
}
defined('ABSPATH') || exit();
define('SCN_CSS_URL',plugins_url('css/',__FILE__));
define('SCN_JS_URL',plugins_url('js/',__FILE__));
define('SCN_LANG_DIR',basename(dirname(__FILE__)).'language/');

function scn_editor_css($scn_css){
	if (!empty($scn_css))
		$scn_css .= ',';
	$scn_css.= SCN_CSS_URL.'simple-colorful-notify.css';
	return $scn_css;
}
add_filter('mce_css','scn_editor_css');

function scn_tinymce_plugin( $plugin_array ) {
	$plugin_array['mce_buttons'] = SCN_JS_URL .'tinymce_buttons.js';
	return $plugin_array;
}
add_filter( 'mce_external_plugins', 'scn_tinymce_plugin' );

function scn_tinymce_button( $buttons ) {
	array_push( $buttons, 'mce_button_2' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'scn_tinymce_button' );

function scn_add_stylesheet() {
	wp_register_style( 'simple-colorful-notify', SCN_CSS_URL.'simple-colorful-notify.css' );
	wp_enqueue_style( 'simple-colorful-notify' );
}
add_action( 'wp_enqueue_scripts', 'scn_add_stylesheet' );