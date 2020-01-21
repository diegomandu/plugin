<?php

function recipe_admin_init(){
	include( 'column.php' );
	include( 'enqueue.php' );

	add_filter( 'manage_recipe_posts_columns', 'r_add_new_recipe_columns' );
	add_action( 'manage_recipe_posts_custom_column', 'r_manage_recipe_columns', 10, 2 );
	add_action( 'admin_enqueue_scripts', 'r_admin_enqueue' );
}