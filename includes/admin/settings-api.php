<?php 

function r_settings_api(){
	register_setting( 'r_opts_group', 'r_opts' );

	add_settings_section(
		'recipe_settings',
		'Recipe Settings',
		'r_settings_section',
		'r_opts_section'
	);

	add_settings_field(
		'rating_login_required',
		'User login required for rating recipes',
		'rating_login_required_input_cb',
		'r_opts_sections',
		'recipe_settings'
	);
}

function r_settings_section(){
	echo '<p> You can change the recipe settings here </p>';
}