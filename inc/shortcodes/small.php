<?php
/*Small * Bootstrap Mark Shortcode
 */
function scratch_SC_small( $atts , $content = null ) {
	
	$output = '';
	
	extract( shortcode_atts(
		array(
		),
		$atts
	));
	
	$output .= '<small>';
		$output .= do_shortcode( $content );
	$output .= '</small>';
	
	return $output;

}
add_shortcode( 'small', 'scratch_SC_small' );