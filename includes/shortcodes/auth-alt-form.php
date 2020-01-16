<?php 

function r_recipe_auth_alt_form_shortcode(){
	if( is_user_logged_in() ){
		return '';
	}

	$formHTML			=	'<div class="col_one_third nobottommargin">';

	$formHTML			.=	wp_login_form([
		'echo'			=>	false,
		'redirect'		=> 	home_url( '/' )	
	]);

	$formHTML			.=	'</div>';

	return $formHTML;
} 