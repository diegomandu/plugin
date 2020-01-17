 <?php 

function r_recipe_creator_shortcode(){
	$creator_tpl_res	=	wp_remote_get(
		plugins_url( 'includes/shortcodes/creator-template.php', RECIPE_PLUGIN_URL )
	);
	$creatorHTML		=	wp_remote_retrieve_body( $creator_tpl_res );
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

