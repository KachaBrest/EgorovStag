<?php
function load_bootstrap(){
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');