<?php

//Enqueue Styles
function loadStyles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap', array(), null, 'all');
}
add_action( 'wp_enqueue_scripts', 'loadStyles' );

//Register Menus
add_theme_support('menus');
function addMenus() {
	register_nav_menus(
		array(
			'top_menu' => __('Top Menu', 'top_menu' ),
			'footer_menu' => __('Footer Menu', 'footer_menu' ),
		)
	);
}
add_action( 'init', 'addMenus' );

//Enqueue Script
function loadScripts() {
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
}
add_action( 'wp_enqueue_scripts', 'loadScripts');

//Add Thumbnails
add_theme_support( 'post-thumbnails' );