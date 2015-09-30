<?php

register_nav_menus(
	array( 
		'main' => 'Main Menu',
		'footer' => 'Footer Menu'
	)
);

// Add 'Active' class to current menu items according to Bootstrap Navigation menu
function bootstrap_active_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'bootstrap_active_class' , 10 , 2);