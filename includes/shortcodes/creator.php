 <?php 

function r_recipe_creator_shortcode(){
	$creatorHTML		=	file_get_contents('creator-template.php', true);
	return $creatorHTML;
}

