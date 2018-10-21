<?php
function google_analytics() {
	if( get_option( 'analytics' ) ) {
		return '<script>' . get_option( 'analytics' ) . '</script>';
	}
}
add_action( 'wp_head', 'google_analytics' );