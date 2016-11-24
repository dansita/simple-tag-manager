<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
include( plugin_dir_path( __FILE__ ) . '/settings.php');
/**
* Plugin Name: Simple Tag Manager
* Plugin URI: https://dansedmak.com/simple-tag-manager/
* Description: A simple plugin through which you can insert Google Tag Manager in the website.
* Version: 1.0
* Author: Daniel Sedmak
* Author URI: https://dansedmak.com/
* License: MIT
*/

// Create the option page
function add_option_page()
{
    add_options_page('Simple Tag Manager', 'Simple Tag Manager', 'administrator', 'simple-tag-manager', 'stm_page');
}

add_action('admin_menu', 'add_option_page');
register_activation_hook( __FILE__, 'stm_activate' );
register_deactivation_hook( __FILE__, 'stm_deactivate' );
if(get_option('stm_option_1') == "on"){ add_action('wp_head','hook_head'); add_action('wp_footer','hook_body'); }

// Activate the plugin
function stm_activate(){
add_option( 'stm_option_1', 'off', '', 'yes' );
add_option( 'stm_option_2', '', '', 'yes' );
add_option( 'stm_option_3', '', '', 'yes' );
}

// Deactivate the plugin
function stm_deactivate(){
delete_option( 'stm_option_1');
delete_option( 'stm_option_2');
delete_option( 'stm_option_3');
}

// Add the Tag Manager's script in the head
function hook_head() {
	echo get_option('stm_option_2');
}

// Add the Tag Managerìs script in the body
function hook_body() {
  echo get_option('stm_option_3');
}

// Update the options
function stm_update($x, $y){
  update_option( "stm_option_$x", $y, 'yes' );
}

if(isset($_POST['stmx'])){
  stm_update("1", $_POST['opt1']);
  stm_update("2", $_POST['opt2']);
  stm_update("3", $_POST['opt3']);
}
?>
