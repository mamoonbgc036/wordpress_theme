<?php

require_once get_theme_file_path('inc/class-sociel-icon.php');
require_once get_theme_file_path('inc/tgm.php');
require_once get_theme_file_path('inc/attachments.php');

function sharemind_style_and_scripts() {
    wp_enqueue_style("fontawesome-css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css", null, "1.0");
    wp_enqueue_style('base', get_template_directory_uri() . '/assets/css/base.css', null, '1.0', 'all');
    wp_enqueue_style('vendor', get_template_directory_uri() . '/assets/css/vendor.css', null, '1.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', null, '1.0', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', null, '1.0', 'all');
    wp_enqueue_style('custom', get_stylesheet_uri(), null, '1.0', 'all');

    wp_enqueue_script('modernizer', get_theme_file_uri('assets/js/modernizr.js'), null, '1.0');
    wp_enqueue_script('pace', get_theme_file_uri('assets/js/pace.min.js'), null, '1.0');

    wp_enqueue_script('plugin', get_theme_file_uri('assets/js/plugins.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_theme_file_uri('assets/js/main.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'sharemind_style_and_scripts');

function sharemind_theme_setup() {
    add_theme_support('custom-logo');
    add_theme_support("post-thumbnails");
    add_theme_support("post-formats", array("image", "gallery", "quote", "audio", "video", "link"));

    add_image_size('post-image-square', 400, 400, true);
    add_image_size('post-image-square_one', 300, 300, true);

    register_nav_menu('TopMenus', __('Navigation Menus', 'wordpress_theme'));
}

add_action('after_setup_theme', 'sharemind_theme_setup');

function philosophy_widgets() {
    register_sidebar(array(
        'name'          => __('About Us Page', 'wordpress_theme'),
        'id'            => 'about-us',
        'description'   => __('Widgets in this area will be shown on about us page.', 'philosophy'),
        'before_widget' => '<div id="%1$s" class="col-block %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="quarter-top-margin">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Header Social Icon', 'wordpress_theme'),
        'id'            => 'social-icon',
        'description'   => __('Widgets in this area will be shown on header section', 'philosophy'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}

add_action("widgets_init", "philosophy_widgets");

add_filter('use_widgets_block_editor', '__return_false');

// add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

function wisdom_pagination() {
    global $wp_query;
    $links = paginate_links(array(
        'current'  => max(1, get_query_var('paged')),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => apply_filters("philosophy_pagination_mid_size", 3),
    ));

    //$links = str_replace( 'page-numbers', 'pgn__num', $links);
    $links = str_replace("<ul class='page-numbers'>", '<ul>', $links);
    $links = str_replace('page-numbers', 'pgn__num', $links);
    $links = str_replace('prev pgn__num', 'pgn__prev', $links);
    $links = str_replace('next pgn__num', 'pgn__next', $links);
    echo $links;
}
