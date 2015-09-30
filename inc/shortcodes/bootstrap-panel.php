<?php
/*
 * Bootstrap Panels Shortcode
 */
function scratch_SC_panels( $atts , $content = null ) {

	extract( shortcode_atts(
		array(
			'type' => 'default',
			'padding' => 'yes'
		),
		$atts
	));
	
	$panel = '<div class="panel panel-' . $type;
	if( $padding === 'yes' ) {
		$panel .= ' pad';
	}
	$panel .= '">';
	$panel .= do_shortcode( $content );
	$panel .= '</div>';
	return $panel;

}
add_shortcode( 'panel', 'scratch_SC_panels' );