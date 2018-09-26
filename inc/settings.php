<?php

/*
 * Sanitize the title string for the browser tab
 *
 * @since	0.0.1
 * @param	string	$title
 * @param	string	$sep
 * @return	string	$title
 */
function scratch_title( $title, $sep ) {

	global $paged, $page;

	if( is_feed() )
		return $title;

	$title .= get_bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', ThemeID ), max( $paged, $page ) );
	}
	return $title;
}
add_filter( 'wp_title', 'scratch_title', 10, 2 );

/*
 * Setup for our theme
 *
 * @since	0.0.1
 */
function scratch_theme_setup()  {

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// add_theme_support( 'automatic-feed-links' );
	remove_action('wp_head', 'wp_generator');

	load_theme_textdomain( 'scratch', get_template_directory() . '/lang' );

	// add_image_size( 'big_banner', 800, 320, true );

}
add_action( 'after_setup_theme', 'scratch_theme_setup' );

/*
 * Disable WP Emoji support
 *
 * @since	1.0
 */
// remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// remove_action( 'wp_print_styles', 'print_emoji_styles' );

/*
 * Remove the version parameter from assets
 *
 * @since	1.0
 */
function scratch_remove_version_from_assets(){
	function remove_cssjs_ver( $src ) {
		if( strpos( $src, '?ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	add_filter( 'style_loader_src', 'remove_cssjs_ver', 999 );
	add_filter( 'script_loader_src', 'remove_cssjs_ver', 999 );
}
// add_action("wp_head", "scratch_remove_version_from_assets",1);