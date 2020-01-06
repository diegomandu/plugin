<?php 

function r_rate_recipe(){
	global $wpdb;

	$output			=	[ 'status' => 1 ];
	$post_ID		=	absint( $_POST['rid'] );
	$rating			=	round( $_POST['rating'], 1 );
	$user_IP		=	$_SERVER['REMOTE_ADDR'];


}

?>