<?php 

function r_recipe_auth_form_shortcode(){
	$formHTML			= file_get_contents( 'auth-form-template.php', true );
	return $formHTML;

}