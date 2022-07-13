<?php 

/* 
	This is Zante Child Theme functions file
	You can use it to modify specific features and styling of Zante Theme
*/	

add_action( 'after_setup_theme', 'zante_child_theme_setup', 99 );

function zante_child_theme_setup(){
	add_action('wp_enqueue_scripts', 'zante_child_load_scripts');
}

function zante_child_load_scripts() {	
	wp_register_style('zante_child_style', trailingslashit(get_stylesheet_directory_uri()).'style.css', false, ZANTE_THEME_VERSION, 'screen');
	wp_enqueue_style('zante_child_style');
}

 