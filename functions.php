<?php 

require_once( get_theme_file_path( 'inc/class-sociel-icon.php' ) );

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


function sharemind_theme_setup() {
	add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'sharemind_theme_setup' );


function philosophy_widgets() {
	register_sidebar( array(
		'name'          => __( 'About Us Page', 'wordpress_theme' ),
		'id'            => 'about-us',
		'description'   => __( 'Widgets in this area will be shown on about us page.', 'philosophy' ),
		'before_widget' => '<div id="%1$s" class="col-block %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="quarter-top-margin">',
		'after_title'   => '</h3>',
	) );
}

add_action( "widgets_init", "philosophy_widgets" );


add_filter( 'use_widgets_block_editor', '__return_false' );