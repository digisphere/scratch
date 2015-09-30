<?php

/*
 * Retrieve the logo
 *
 * @since 1.0.0
 */
function get_logo() {
	
	$site_url	= get_bloginfo('url');
	$site_name	= get_bloginfo('name');
	$site_desc	= get_bloginfo('description');
	
	$logo_option = of_get_option('logo');
	
	$link_class = ( $logo_option ) ? 'logo-image' : 'logo-text';
	$bg_image	= ( $logo_option ) ? ' style="background-image: url(\'' . $logo_option . '\')"' : '';
	
	// Start the output
	
	$output = '';
	
	$output .= '<div id="the-logo">';
		$output .= '<a 
				href="' . $site_url . '" 
				title="' . $site_name . ' | ' . $site_desc . '" 
				class="' . $link_class . '"
				' . $bg_image . '>';
			$output .= $site_name;
		$output .= '</a>';
	$output .= '</div>';
	
	return $output;
}

/*
 * Display the logo
 *
 * @since 0.2.0
 * @param bool   $echo   Optional, default to true (Whether to display or return).
 */
function the_logo( $echo = true ) {
	$logo = get_logo();
	
	if( $echo )
		echo $logo;
	else
		return $logo;
}