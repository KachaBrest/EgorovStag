<?php
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
    register_nav_menu( 'top', 'Header menu' );
};


//function register_my_menu()
//{
//    register_nav_menu('main-menu', __('Main menu'));
//}
//
//add_action('init', 'register_my_menu');