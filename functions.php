<?php 


function sharemind_style_and_scripts() {
	wp_enqueue_style( 'base', get_template_directory_uri(). '/assets/css/base.css', null, '1.0', 'all' );
	wp_enqueue_style( 'vendor', get_template_directory_uri(). '/assets/css/vendor.css', null, '1.0', 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri(). '/assets/css/main.css', null, '1.0', 'all' );
	wp_enqueue_style( 'fonts', get_template_directory_uri(). '/assets/css/fonts.css', null, '1.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/css/font-awesome/font-awesome.min.css', null, '1.0', 'all' );
	wp_enqueue_style( 'custom', get_stylesheet_uri(), null, '1.0', 'all' );

	wp_enqueue_script( 'modernizer', get_theme_file_uri( 'assets/js/modernizr.js' ), null, '1.0' );
	wp_enqueue_script( 'pace', get_theme_file_uri( 'assets/js/pace.min.js' ), null, '1.0' );

	wp_enqueue_script( 'plugin', get_theme_file_uri( 'assets/js/plugins.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'main-js', get_theme_file_uri( 'assets/js/main.js' ), array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'sharemind_style_and_scripts' );