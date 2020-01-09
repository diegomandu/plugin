<?php

function recipe_admin_init(){
	add_filter( 'manage_recipe_posts_column', 'r_add_new_recipe_columns' );
}