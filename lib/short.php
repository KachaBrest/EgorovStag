<?php

add_shortcode( $markerTitle , $get_marker_title);

function get_marker_title($content){

    $args = array(
        'public'   => true,
        '_builtin' => false
    );
    $output   = 'names'; // names or objects, note names is the default
    $operator = 'and';   // 'and' or 'or'
    $post_types = get_post_types( $args, $output, $operator );

    return $post_types;
};