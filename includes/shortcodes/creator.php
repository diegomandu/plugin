 <?php 

function r_recipe_creator_shortcode(){
	$creatorHTML		=	file_get_contents('creator-template.php', true);
	$editorHTML			=	r_generate_content_editor();
	$creatorHTML		=	str_replace( 'CONTENT_EDITOR', $editorHTML, $creatorHTML );
	
	return $creatorHTML;
}

/*	PICKUP THE TINYMCE EDITOR USING BUFFER BEFORE IT DISPLAYS, 
	SO WE CAN CONTROL AND INSERT INSIDE THE FORM
 */

function r_generate_content_editor(){
	ob_start();
	wp_editor( '', 'recipecontenteditor' );
	$editor_contents		= ob_get_clean();
	return $editor_contents;
}

