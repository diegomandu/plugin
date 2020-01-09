<?php 

function r_add_new_recipe_columns( $columns ){
	$new_columns 				=	[];
	$new_columns['cb']			=	'<input type="checkbox" />';
	$new_columns['title']		=	__( 'Title', 'recipe' );
	$new_columns['author']		=	__( 'Author', 'recipe' );
	$new_columns['categories']	=	__( 'Categories', 'recipe' );
	$new_columns['count']		=	__( 'Rating count', 'recipe' );
	$new_columns['rating']		=	__( 'Average Rating', 'recipe' );
	$new_columns['date']		=	__( 'Date', 'recipe' );

	return $new_columns;
}

