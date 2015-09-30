<?php
/*
 * Scratch theme setup
 * 
 * since 0.0.1
 */

/*
 * Activate Options panel
 */
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'scratch_OptionsPanel', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
	include 'inc/options-styles.php';
}

function scratch_theme_setup()  {

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	load_theme_textdomain( 'scratch', get_template_directory() );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	if( of_get_option( 'rss' ) )
		add_theme_support( 'automatic-feed-links' );

	if( of_get_option('wp-version' ) )
		remove_action('wp_head', 'wp_generator');
	
	// Crop Images in specific size
	// add_image_size( 'big_banner', 800, 320, true );
	
}
add_action( 'after_setup_theme', 'scratch_theme_setup' );

/*
 * Sanitize the title string for the browser tab
 * 
 * since 0.0.1
 */
function scratch_title( $title, $sep ) {
	global $paged, $page;	
	if ( is_feed() ) { return $title; }
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'scratch' ), max( $paged, $page ) );
	}
	return $title;
}
add_filter( 'wp_title', 'scratch_title', 10, 2 );

/*
 * Disable WP Emoji support
 */
if( of_get_option('disable_emoji') ) {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

/*
 * Remove assets version parameter
 */
function firmasite_remove_version_from_assets(){
	function remove_cssjs_ver( $src ) {
		if( strpos( $src, '?ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	add_filter( 'style_loader_src', 'remove_cssjs_ver', 999 );
	add_filter( 'script_loader_src', 'remove_cssjs_ver', 999 );
}
if( of_get_option('assets-version') ) {
	add_action("wp_head", "firmasite_remove_version_from_assets",1);
}
/*
 * Library
 */
include 'lib/container.php';
include 'lib/logo.php';
include 'lib/breadcrumbs.php';
include 'lib/pagination.php';
include 'lib/bootstrap_menu.php';
include 'lib/google_analytics.php';
include 'lib/bootstrap-thumbnail.php';

include 'inc/widget-areas.php';
include 'inc/quicktags.php';
include 'inc/shortcodes.php';

