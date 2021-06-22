<?php 
function mamoon_enqueue_styles(){
    wp_enqueue_style('style', get_stylesheet_uri(), [], fileatime( get_template_directory(). '/style.css' ));
}
add_action('wp_enqueue_scripts', 'mamoon_enqueue_styles');