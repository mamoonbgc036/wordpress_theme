<?php 
 namespace wordpress_theme\inc\helpers;

 function My_Autoloader($class){
     //echo $class;die();
     include_once $class.".php";
 }

 spl_autoload_register("wordpress_theme\inc\helpers\My_Autoloader");

