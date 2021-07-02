<?php 

trait singleton{
    public function __construct(){

    }

    public function __clone(){

    }

    final public static function get_instance(){
        static $instance = [];
        $class_name = get_called_class();
        if(!isset($instance[$class_name])){
            $instance[$class_name] = new $class_name;
        }
        return $instance[$class_name];
    }
}