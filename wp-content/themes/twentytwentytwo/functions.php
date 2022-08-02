<?php

add_theme_support ( 'widgets' );
add_theme_support ( 'title-tag' );
add_theme_support ( 'menus' );

define( 'B_THEME_ROOT', get_stylesheet_directory_uri());
define( 'CSS_DIR', B_THEME_ROOT . '/assets/css');
define( 'JS_DIR', B_THEME_ROOT . '/assets/js');
define( 'IMG_DIR', B_THEME_ROOT . '/assets/img');

function register_styles() {
	wp_register_style( 'theme_styles', CSS_DIR . '/main.css?', rand(1,9999) );
	wp_enqueue_style( 'theme_styles', 9999999 );
}

function register_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', JS_DIR . '/jquery-3.5.1.min.js', array(), date('h:i:s'), false);
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'mainjs', JS_DIR . '/main.js', ['jquery'], date('h:i:s'), true );
	wp_enqueue_script( 'mainjs' );
}

function theme_setup() {
	add_action( 'wp_enqueue_scripts', 'register_styles' );
	add_action( 'wp_enqueue_scripts', 'register_scripts' );
}
add_action( 'after_setup_theme', 'theme_setup', 9999 );

function theme_register_nav_menu() {
	register_nav_menu( 'main', 'Main Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );