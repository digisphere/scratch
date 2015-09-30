<?php

/*
 * Retrieve the breadcrumbs
 *
 * @since 1.0.0
 */
function get_breadcrumbs() {
     
    global $post, $wp_query;
    
    $home_title	= __('Home', 'scratch');
    $category	= get_the_category();
     
    /*
	 * Start the output
     */
    
    $output = '';
    
    if ( !is_front_page() && !is_home() ) {
	    
	    $output .= '<ol class="breadcrumb">';
        	$output .= '<li class="item-home"><a href="' . get_home_url() . '">' . $home_title . '</a></li>';
        
	        /*
		     * Single
	         */
	        if ( is_single() ) {
	            $output .= '<li><a href="' . get_category_link($category[0]->term_id ) . '">' . $category[0]->cat_name . '</a></li>';
	            $output .= '<li><strong>' . get_the_title() . '</strong></li>';
	        }
        
	        /*
		     * Category
	         */
	        elseif ( is_category() ) {
	            $output .= '<li><strong>' . $category[0]->cat_name . '</strong></li>';
	        }
        
        /*
	     * Page
         */
        else if ( is_page() ) {
            if( $post->post_parent ){

                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                 
                // Get parents in the right order
                $anc = array_reverse($anc);
                 
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }
                 
                // Display parent pages
                $output .= $parents;
                 
                // Current page
                $output .= '<li><strong> ' . get_the_title() . '</strong></li>';
                 
            }
            else {
                // Just display current page if not parents
                $output .= '<li><strong> ' . get_the_title() . '</strong></li>';
                 
            }
             
        }
        
        /*
	     * Tags
         */
        elseif ( is_tag() ) {
             
            // Get tag information
            $term_id	= get_query_var('tag_id');
            $taxonomy	= 'post_tag';
            $args		= 'include=' . $term_id;
            $terms		= get_terms( $taxonomy, $args );
             
            // Display the tag name
            $output .= '<li><strong>' . $terms[0]->name . '</strong></li>';
         
        }
        
        /*
	     * Day archive
         */
        elseif ( is_day() ) {
             
            // Year link
            $output .= '<li><a href="' . get_year_link( get_the_time('Y') ) . '">' . get_the_time('Y') . '</a></li>';
             
            // Month link
            $output .= '<li ><a href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '">' . get_the_time('M') . '</a></li>';
             
            // Day display
            $output .= '<li><strong> ' . get_the_time('jS') . ' ' . get_the_time('M') . '</strong></li>';
             
        }
        
        /*
	     * Month archive
         */
        elseif ( is_month() ) {
             
            // Year link
            $output .= '<li><a href="' . get_year_link( get_the_time('Y') ) . '">' . get_the_time('Y') . ' ' . __('Archives', 'scratch') . '</a></li>';
             
            // Month display
            $output .= '<li><strong>' . get_the_time('M') . '</strong></li>';
             
        }
        
        /*
	     * Year archive
         */
        elseif ( is_year() ) {
             
            // Display year archive
            $output .= '<li><strong>' . get_the_time('Y') . '</strong></li>';
             
        }
        
        /*
	     * Author
         */
        elseif ( is_author() ) {
             
            global $author;
            $userdata = get_userdata( $author );
             
            // Display author name
            $output .= '<li><strong>' . $userdata->display_name . '</strong></li>';
         
        }
        
        elseif ( get_query_var('paged') ) {
             
            // Paginated archives
            $output .= '<li><strong>' . __('Page', 'scratch') . ' ' . get_query_var('paged') . '</strong></li>';
             
        }
        
        /*
	     * Search
         */
        elseif ( is_search() ) {
         
            // Search results page
            $output .= '<li><strong>' . __('Search results for: ', 'scratch') . get_search_query() . '</strong></li>';
         
        }
        
        /*
	     * 404
         */
        elseif ( is_404() ) {
             
            // 404 page
            $output .= '<li>' . 'Error 404' . '</li>';
        }
         
    }
    $output .= '</ol>';
    
    return $output;
}

/*
 * Display the container type
 *
 * @since 0.2.0
 * @param bool   $echo   Optional, default to true (Whether to display or return).
 */
function the_breadcrumbs( $echo = true ) {
	$breadcrumbs = get_breadcrumbs();
	
	if( $echo )
		echo $breadcrumbs;
	else
		return $breadcrumbs;
}