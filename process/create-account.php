<?php 

function recipe_create_account(){
	$output				= ['status' => 1];
	$nonce				= isset($_POST['_wpnonce']) ? $_POST['_wpnonce'] : '';

	if( !wp_verify_nonce( $nonce, 'recipe_auth' ) ){
		wp_send_json( $output );
	} 

	if( !isset($_POST['username'], $_POST['email'], $_POST['pass'], $_POST['confirm_pass']) ){
		wp_send_json( $output );
	}

	$name				=	sanitize_text_field( $_POST['name'] );
	$username			=	sanitize_text_field( $_POST['username'] );
	$email				=	sanitize_email( $_POST['email'] );
	$pass 				=	sanitize_text_field( $_POST['pass'] );
	$confirm_pass		=	sanitize_text_field( $_POST['confirm_pass'] );

	if( username_exists($username) || email_exists($email); || $pass != $confirm_pass || !is_email($email) ){
		wp_send_json($output);
	}

	$user_id			=	wp_insert_user([
		'user_login'	=>	$username,
		'user_pass'		=>	$pass,
		'user_email'	=>	$email,
		'user_nicename'	=>	$name
	]);

	if( is_wp_error($user_id) ){
		wp_send_json($output);
	}
}