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

function r_alt_authenticate( $user, $username, $password ){
	if( $_SERVER['REQUEST_METHOD'] !== 'POST' ){
		return $user;
	}

	if( !is_wp_error($user) ){
		return $user;
	}

	$error_codes		= join( ',', $user->get_error_codes() );
	$login_url			= home_url( 'account' );
	$login_url			= add_query_arg(
		'login', $error_codes, $login_url
	);

	wp_redirect($login_url);
	exit;
}