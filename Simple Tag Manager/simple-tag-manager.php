<?php
/**
* Plugin Name: Simple Tag Manager
* Plugin URI: https://dansedmak.com/simple-tag-manager/
* Description: A simple plugin through which you can insert Google Tag Manager in the website.
* Version: 1.0
* Author: Daniel Sedmak
* Author URI: https://dansedmak.com/
* License: MIT
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
include( plugin_dir_path( __FILE__ ) . '/settings.php');

// Create the option page
function ecpt_stm_45t5dsfzxv22_zdx_35_option_page()
{
    add_options_page('Simple Tag Manager', 'Simple Tag Manager', 'administrator', 'simple-tag-manager', 'ecpt_stm_45t5dsfzxv22_zdx_35_page');
}

add_action('admin_menu', 'ecpt_stm_45t5dsfzxv22_zdx_35_option_page');
register_activation_hook( __FILE__, 'ecpt_stm_45t5dsfzxv22_zdx_35_activate' );
register_deactivation_hook( __FILE__, 'ecpt_stm_45t5dsfzxv22_zdx_35_deactivate' );
if(get_option('ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1') == "on"){ add_action('wp_head','ecpt_stm_45t5dsfzxv22_zdx_35_hook_head'); add_action('wp_footer','ecpt_stm_45t5dsfzxv22_zdx_35_hook_body'); }

// Activate the plugin
function ecpt_stm_45t5dsfzxv22_zdx_35_activate(){
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1', 'off', '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2', '', '', 'yes' );
	add_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3', '', '', 'yes' );
}

// Deactivate the plugin
function ecpt_stm_45t5dsfzxv22_zdx_35_deactivate(){
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_1');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2');
	delete_option( 'ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3');
}

// Add the Tag Manager's script in the head
function ecpt_stm_45t5dsfzxv22_zdx_35_hook_head() {
	echo get_option('ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_2');
}

// Add the Tag Manager's script in the body
function ecpt_stm_45t5dsfzxv22_zdx_35_hook_body() {
	echo get_option('ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_3');
}

// Update the options
function ecpt_stm_45t5dsfzxv22_zdx_35_stm_update($x, $y){
	if(is_admin()){
	update_option( "ecpt_stm_45t5dsfzxv22_zdx_35_stm_option_$x", $y, 'yes' );
	}
}

// When the form is submitted ...
if(isset($_POST['stmx'])){
	ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("1", $_POST['opt1']);
	ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("2", $_POST['opt2']);
	ecpt_stm_45t5dsfzxv22_zdx_35_stm_update("3", $_POST['opt3']);
}
?>
