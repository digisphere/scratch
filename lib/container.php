<?php

/*
 * Retrieve the container type
 *
 * @since 1.0.0
 */
function get_container() {
	$container_option = of_get_option('container');
	$container = ( $container_option ) ? $container_option : 'container';
	
	return $container;
}

/*
 * Display the container type
 *
 * @since 1.0.0
 * @param bool   $echo   Optional, default to true (Whether to display or return).
 */
function the_container( $echo = true ) {
	$container = get_container();
	
	if( $echo )
		echo $container;
	else
		return $container;
}

