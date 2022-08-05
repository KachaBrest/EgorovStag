<?php
//get URI
$url = $_SERVER['REQUEST_URI'];
$url = substr($url,0,-1);
$link = substr(strrchr($url, '/'), 1 );

//get info post
$posts  = get_posts( array(
    'post_type' => 'location-post',
) );

foreach( $posts as $post ){
    if($post->post_name == $link) {

        $cur_terms = get_the_terms( $post->ID, 'destination' );
        if( is_array( $cur_terms ) ){
            echo '<div class="services">';
            foreach( $cur_terms as $cur_term ){
                echo '<a href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>';
            }
            echo '</div>';
        }

        echo '<h1>'. $post->post_title .'</h1>';
        echo '<div class="link_content">'. $post->post_content . '</div>';

    }
}