<?php
/*
 * Bootstrap Lead Shortcode
 */
function scratch_SC_lead( $atts , $content = null ) {
	
	$output = '';
	
	extract( shortcode_atts(
		array(
		),
		$atts
	));
	
	$output .= '<p class="lead">';
		$output .= do_shortcode( $content );
	$output .= '</p>';
	
	return $output;

}
add_shortcode( 'lead', 'scratch_SC_lead' );