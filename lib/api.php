<?php
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_enqueue_script( 'newscript', get_template_directory_uri() . '/js/api.js', $deps = array(), $ver = false, $in_footer = true );
}
