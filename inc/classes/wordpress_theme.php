<?php 
namespace wordpress_theme\inc\classes;

use wordpress_theme\inc\traits\Singleton;

class wordpress_theme{
    use Singleton;

    public function __construct()
    {
        //wp_die('hello');
        $this->set_hooks();
    }

    protected function set_hooks() {
        //add_action('wp_enqueue_scripts', [$this, 'registerStyle']);
    }

}