<?php

add_action( 'init', 'true_register_taxonomy' );

function true_register_taxonomy() {

    $args = array(
        'labels' => array(
            'menu_name' => 'Locations'
        ),
        'public' => true,
    );
    register_taxonomy( 'destination', 'location-post', $args );
}
