<?php
/*
 * Bootstrap Buttons Shortcode
 */
function scratch_SC_buttons( $atts , $content = null ) {

	extract( shortcode_atts(
		array(
			'type' => 'md',
			'size' => 'normal'
		),
		$atts
	));
	
	return '<a class="btn btn-' . $type . ' btn-' . $size . '">' . $content . '</a>';

}
add_shortcode( 'btn', 'scratch_SC_buttons' );