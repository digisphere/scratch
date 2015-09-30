<?php
/*
 * Bootstrap Row Shortcode
 */
function scratch_SC_row( $atts , $content = null ) {
	
	$output = '';
	
	extract( shortcode_atts(
		array(
		),
		$atts
	));
	
	$output .= '<div class="row">';
		$output .= do_shortcode( $content );
	$output .= '</div>';
	
	return $output;

}
add_shortcode( 'row', 'scratch_SC_row' );