<?php

/*
 * Pagination
 *
 * Code credit: wpbeginner
 */
function get_pagination() {
	
	if( is_singular() )
		return;
	
	global $wp_query;

	// Stop execution if there's only 1 page
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	//	Add current page to the array
	if ( $paged >= 1 )
		$links[] = $paged;

	//	Add the pages around the current page to the array
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	
	// Start the output
	
	$output = '';
	
	$output .= '<nav><ul class="pagination">';

	//	Previous Post Link
	if ( get_previous_posts_link() )
		$output .= sprintf( '<li>%s</li>', get_previous_posts_link() );

	//	Link to first page, plus ellipses if necessary
	if ( !in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		$output .= sprintf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( !in_array( 2, $links ) )
			$output .= '<li>…</li>';
	}

	//	Link to current page, plus 2 pages in either direction if necessary
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		
		$output .= sprintf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	//	Link to last page, plus ellipses if necessary
	if ( !in_array( $max, $links ) ) {
		if ( !in_array( $max - 1, $links ) )
			$output .= '<li>…</li>';

		$class = $paged == $max ? ' class="active"' : '';
		
		$output .= sprintf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	//	Next Post Link
	if ( get_next_posts_link() )
		$output .= sprintf( '<li>%s</li>', get_next_posts_link() );

	$output .= '</ul></nav>';
	
	return $output;

}

/*
 * Display the pagination
 *
 * @since 1.0.0
 * @param bool   $echo   Optional, default to true (Whether to display or return).
 */
function the_pagination( $echo = true ) {
	$pagination = get_pagination();
	
	if( $echo )
		echo $pagination;
	else
		return $pagination;
}
