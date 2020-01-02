<?php

function r_filter_recipe_content( $content ){
	if( !is_singular( 'recipe' ) ){
		return $content;
	}

	return $content;
	
}