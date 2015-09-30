<?php
/*
 * Bootstrap Column Shortcode
 */
function scratch_SC_columns( $atts , $content = null ) {
	
	$output = '';
	
	extract( shortcode_atts(
		array(
			'device' => 'sm',
			'size' => '12'
		),
		$atts
	));
	
	$output .= '<div class="col-' . $device . '-' . $size . '">';
		$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;

}
add_shortcode( 'col', 'scratch_SC_columns' );