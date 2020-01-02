<?php 
/*
*	Plugin Name: Recipe
*	Description: A simple WordPress plugin that allows user to create recipes and rate those   recipes
*	Version: 1.0
*	Author: Diego Mandu
*	Author URI: http://mandudev.com/
* 	text domain: recipe
*/

if( !function_exists( 'add_action' ) ){
		echo "Hi there! I'm just a plugin, not much I can do when called directly.";
		exit;
}

// Setup


// Includes 
include( 'includes/activate.php' );
include( 'includes/init.php' );


// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'recipe_init' );


// Shortcodes
