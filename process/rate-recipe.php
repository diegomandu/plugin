<?php 

function r_rate_recipe(){
	global $wpdb;

	$output			=	[ 'status' => 1 ];
	$post_ID		=	absint( $_POST['rid'] );
	$rating			=	round( $_POST['rating'], 1 );
	$user_IP		=	$_SERVER['REMOTE_ADDR'];

	$rating_count	=	$wpdb->get_var(
		"SELECT COUNT(*) FROM `" . $wpdb->prefix . "recipe_ratings` WHERE recipe_id='" . $post_ID ."' AND  user_ip='"  . 	$user_IP . "'"
	);

	if( $rating_count > 0 ){
		wp_send_json( $output );
	}



	$wpdb->insert(
		$wpdb->prefix . 'recipe_ratings',
		[
			'recipe_id' =>	$post_ID,
			'rating'	=>	$rating,
			'user_ip'	=>	$user_IP
		],
		['%d', '%f', '%s']
	);

	$output['status']	=	2;
	wp_send_json( $output );
}

?>