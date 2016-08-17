<?php

function clinkittheme_script_enqueue() {

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );

	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/clinkit.js', array(), '1.0.0', true );
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/clinkit.css', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'clinkittheme_script_enqueue');

function clinkittheme_setup () {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'clinkittheme_setup');