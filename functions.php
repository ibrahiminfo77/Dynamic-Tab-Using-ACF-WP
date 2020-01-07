<?php 

define('THEMEROOT', get_stylesheet_directory_uri());


//Theme assets

function rscb_assets(){
	wp_enqueue_script( 'rscb_responsiveTabs', THEMEROOT.'/js/jquery.responsiveTabs.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'rscb_main_js', THEMEROOT.'/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'rscb_assets' );


// ACF Theme Options

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
}



