<?php 

// namespace wordpress_theme\inc\helpers;

// function my_autoload($class){
//     //echo $class;die();
//     include_once str_replace("wordpress_theme\\","",$class).".php";
// }

// spl_autoload_register("wordpress_theme\inc\helpers\my_autoload");

//namespace wordpress_theme\inc\helpers;

spl_autoload_register(function($class){
    $filePath = str_replace("wordpress_theme\\","",$class);
    die($filePath);
    include_once str_replace("\\","/",$filePath).".php";
    return str_replace("\\","/",$filePath).".php";
});