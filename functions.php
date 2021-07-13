<?php

//echo "function";die();

//use wordpress_theme\inc\classes\wordpress_theme;

//include_once "inc/helpers/autoload.php";

// use wordpress_theme\inc\classes\wordpress_theme;

// spl_autoload_register(function($class){
//     $file = str_replace("wordpress_theme\\","",$class);
//     //die($file);
//     include_once str_replace("\\","/",$file).".php";
// });

// new wordpress_theme();die();

use wordpress_theme\inc\classes\wordpress_theme;

include_once "inc/helpers/autoload.php";

new wordpress_theme();die();