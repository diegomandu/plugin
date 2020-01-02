<?php

function r_filter_recipe_content( $content ){
	if( !is_singular( 'recipe' ) ){
		return $content;
	}

	$recipe_html			=	file_get_contents( 'recipe-template.php', true );

	return $recipe_html . $content;
	
}