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

	add_settings_field(
		'recipe_submission_login_required',
		'User login required for submitting recipes',
		'recipe_submission_login_required_input_cb',
		'r_opts_sections'
		'recipe_settings'
	);
}

function r_settings_section(){
	echo '<p> You can change the recipe settings here </p>';
}

function rating_login_required_input_cb(){
	$recipe_opts			=	get_option( 'r_opts' );
	?>
	<select id='rating_login_required' name='r_opts[rating_login_required]'>
		<option value="1">No</option>
		<option value="2">Yes
			<?php echo $recipe_opts['rating_login_required'] == 2 ? 'SELECTED' : '' ?>>Yes</option>
	</select>
	<?php
}

function recipe_submission_login_required_input_cb(){
	$recipe_opts			=	get_option( 'r_opts' );
	?>
	<select id='recipe_submission_login_required' name='r_opts[recipe_submission_login_required]'>
		<option value="1">No</option>
		<option value="2">Yes</option>
			<?php echo $recipe_opts['recipe_submission_login_required'] == 2 ? 'SELECTED' : ''; ?>>Yes</option>
	</select>
	<?php
}