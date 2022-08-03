<?php

add_action('after_setup_theme', 'theme_register_nav_menu');

    //menu.php
    require_once ('lib/menu.php');

    //post-type
    require_once ('lib/post-type.php');

    //taxonomies
    require_once ('lib/taxonomies.php');

    // bootstrap
    require_once ('lib/bootstrap.php');

    require_once ('lib/My_Walker_Nav_Menu.php');
