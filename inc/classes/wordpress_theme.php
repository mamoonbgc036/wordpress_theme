<?php 
namespace wordpress_theme\inc\classes;

use wordpress_theme\inc\traits\singleton;
class wordpress_theme{
    use singleton;

    protected function __construct(){
        $this->set_hooks();
    }

    protected function set_hooks(){

    }
}