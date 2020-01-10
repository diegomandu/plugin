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

/*
*
*@param array $instance The Widget option
*/
public function form( $instance ){
	// outputs the options form on admin
	$default		= [ 'title' => 'Recipe of the day' ];
	$instance		= wp_parse_args( (array) $instance, $default );

	?>
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title: </label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
		name="<?php echo $this->get_field_name( 'title' ); ?>"
		value="<?php echo esc_attr( $instance['title'] ); ?>">
	</p>
	<?php

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

}


