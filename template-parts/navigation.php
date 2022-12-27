 <nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6">Site Navigation</h2>
        <?php 
            $header_menus = wp_nav_menu(
                array(
                    'theme_location'=>'TopMenus',
                    'menu_id'       =>'TopMenus',
                    'menu_class'    =>'header__nav',
                    'echo'  => false,
                    ),
                );

                $header_menus = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $header_menus );

                echo $header_menus;
        ?>

    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end header__nav-wrap -->