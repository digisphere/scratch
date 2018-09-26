<?php

/**
 * Library
 */
$dir = glob(dirname( __FILE__ ) . '/lib/*.php');

if( !empty($dir) ) {
	foreach($dir as $file) {
		require_once $file;
	}
}

/**
 * Includes
 */
$dir = glob(dirname( __FILE__ ) . '/inc/*.php');

if( !empty($dir) ) {
	foreach($dir as $file) {
		require_once $file;
	}
}
