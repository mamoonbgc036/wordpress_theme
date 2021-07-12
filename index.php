<?php 
echo "index";die();
get_header(); 


include_once "inc/helpers/autoload.php";


new wordpress_theme\inc\classes\wordpress_theme();die();


?>
    <div class="content">
        hello wordpress
    </div>
<?php get_footer(); ?>
