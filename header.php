<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head(); ?>
</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader <?php
        if( is_home() ) echo 's-pageheader--home';
    ?>">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                   <?php 
                    if( has_custom_logo() ){
                        the_custom_logo();
                    } else{
                        echo "<h1><a href='".home_url( "/" )."'>".strtoupper( get_bloginfo( 'name' ) )."</a></h1>";
                    }
                   ?>
                </div> <!-- end header__logo -->

               <?php 
                if( is_active_sidebar( 'social-icon' ) ) {
                    dynamic_sidebar( 'social-icon' );
                }
               ?>

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Search for:</span>
                            <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>

                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <?php 
                    get_template_part( 'template-parts/navigation' );
                ?>

            </div> <!-- header-content -->
        </header> <!-- header -->
        <?php 

            if ( is_home() ) {
                get_template_part( 'template-parts/blog-home/feature' );
            }
        ?>
</section> <!-- end s-pageheader -->

 