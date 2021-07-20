<?php

if( ! defined('WORDPRESS_THEME') ){
    // define('WORDPRESS_THEME', untrailingslashit(get_template_directory()));
    // str_replace("\\","/",WORDPRESS_THEME);
    $root = get_template_directory();
    $finalRoot = str_replace("\\","/",$root);
    define('WORDPRESS_THEME', $finalRoot );
}


use wordpress_theme\inc\classes\wordpress_theme;

require_once WORDPRESS_THEME."/inc/autoload.php";

function wordpressTheme() {
    wordpress_theme::get_instance();
}

wordpressTheme();

function site_enqueue_scripts() {
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'site_enqueue_scripts');


// function My_Enqueue_Scripts(){
//     // Registering script
//     wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', ['jquery'], false, true);
//     //wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery'], false, true);
//     wp_register_script('main-js', get_template_directory_uri(). '/assets/js/main.js', [], filemtime(get_template_directory(). '/assets/js/main.js'), true);

//     // Enqueueing script
//     wp_enqueue_script('main-js');
//     wp_enqueue_script('bootstrap-js');

//     // Enqueueing style
//     wp_enqueue_style('stylesheet');
//     wp_enqueue_style('bootstrap-css');
// }
// add_action('wp_enqueue_scripts', 'My_Enqueue_Scripts');
