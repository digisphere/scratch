<?php
// register our scripts

function scratch_scripts() {
	
	// Styles
	wp_enqueue_style( 'font-awesome',	get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap',		get_template_directory_uri() . '/assets/css/bootstrap-styles.css' );
	wp_enqueue_style( 'main-style',		get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'style',			get_stylesheet_uri() );
	
	if( is_rtl() )
		wp_enqueue_style( 'bootstrap-rtl',		get_template_directory_uri() . '/assets/css/bootstrap-rtl.min.css' );

	// Scripts - jQuery dependency
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery'),false,false );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js',array( 'jquery' ), false, false );
	
}
add_action( 'wp_enqueue_scripts', 'scratch_scripts' );