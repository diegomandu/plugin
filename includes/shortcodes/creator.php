 <?php 

function r_recipe_creator_shortcode(){
	$creatorHTML		=	file_get_contents('creator-template.php', true);

	wp_editor( '', 'recipecontenteditor' );

	return $creatorHTML;
}

