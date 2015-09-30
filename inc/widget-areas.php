<?php
function scratch_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'scratch' ),
		'id'            => 'sidebar',
		'description'   => __( 'Our Sidebar', 'scratch' ),
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'scratch_widgets_init' );