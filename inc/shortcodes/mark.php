<?php
/*
 * Bootstrap Mark Shortcode
 */
function scratch_SC_mark( $atts , $content = null ) {
	
	$output = '';
	
	extract( shortcode_atts(
		array(
		),
		$atts
	));
	
	$output .= '<mark>';
		$output .= do_shortcode( $content );
	$output .= '</mark>';
	
	return $output;

}
add_shortcode( 'mark', 'scratch_SC_mark' );