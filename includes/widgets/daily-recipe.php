<?php

class R_Daily_Recipe_Widget extends WP_Widget{
/**
* Sets up the widgets name etc
*/
public function __construct(){
	$widget_ops = array(
		'description'	=>	'Display a random recipe each day.',
	);
	parent::__construct( 'r_daily_recipe_widget', 'Recipe of the Day', $widget_ops );
}

}


/**
*
* Outputs the content of the widget
*
*@param array $args
*@param array $instance
*/
public function widget( $args, $instance ){
	// outputs the content of the widget

}