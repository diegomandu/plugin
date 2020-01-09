<?php

function recipe_admin_init(){
	include( 'column.php' );

	add_filter( 'manage_recipe_posts_columns', 'r_add_new_recipe_columns' );
}