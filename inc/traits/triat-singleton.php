<?php 
namespace wordpress_theme\inc\traits;
trait singleton{
    public function __construct(){

    }

    public function __clone(){

    }

    final public static function get_instance(){
        static $instance = [];
        $class_name = get_called_class();
        echo $class_name;die();
        if(!isset($instance[$class_name])){
            $instance[$class_name] = new $class_name;
        }
        return $instance[$class_name];
    }
}