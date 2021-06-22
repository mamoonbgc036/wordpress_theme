<?php 
function mamoon_enqueue_scripts(){
    wp_register_style('stylesheet', get_template_directory_uri(). '/assets/style.css', [], filemtime(get_template_directory(). '/assets/style.css'));
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'mamoon_enqueue_scripts');