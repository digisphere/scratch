<?php
function get_bootstrap_thumbnail( $post_id = null, $type = 'thumbnail' ) {
	$post_id = ( null === $post_id ) ? get_the_ID() : $post_id;
    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        
    if ( $post_thumbnail_id ) {
	    $output = '<img src="' . wp_get_attachment_thumb_url( $post_thumbnail_id ) . '" class="img-' . $type . '" />';
    }
    else {}
    
    echo $output;
}