<?php
/*
 * Bootstrap Jumbotron Shortcode
 * 
 * since 0.0.1
 */
function scratch_SC_jumbotron( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
			'margin_top' => '30',
			'margin_bottom' => '30',
		),
		$atts
	));
	
	return '<div class="jumbotron" style="margin-top: ' . $margin_top . 'px; margin-bottom: ' . $margin_bottom . 'px;">' . do_shortcode( $content ) . '</div>';

}
add_shortcode( 'jumbotron', 'scratch_SC_jumbotron' );