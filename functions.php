<?php 
function mamoon_enqueue_scripts(){
    // Registering style
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], false, 'all');
    // Registering script
    //wp_register_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', ['jquery'], false, true);
    wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery'], false, true);
    wp_register_script('main-js', get_template_directory_uri(). '/assets/js/main.js', [], filemtime(get_template_directory(). '/assets/js/main.js'), true);

    // Enqueueing script
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

    // Enqueueing style
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootstrap-css');
}
add_action('wp_enqueue_scripts', 'mamoon_enqueue_scripts');