<?php

add_action( 'init', 'services_register_cpt' );

function services_register_cpt() {

    $args = array(
        'labels' => array(
            'menu_name' => 'Services'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-airplane'
    );
    register_post_type( 'location-post', $args );
}

