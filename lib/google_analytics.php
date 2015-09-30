<?php
function google_analytics() {
	if( of_get_option( 'analytics' ) ) {
		return '<script>' . of_get_option( 'analytics' ) . '</script>';
	}
}
add_action( 'wp_head', 'google_analytics' );