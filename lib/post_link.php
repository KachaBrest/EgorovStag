<?php
//get URI
$url = $_SERVER['REQUEST_URI'];
$url = substr($url,0,-1);
$link = substr(strrchr($url, '/'), 1 );

//get info post
$psts  = get_posts( array(
    'post_type' => 'location-post',
) );

foreach( $psts as $pst ){
    if($pst->post_name == $link) {

        // начало эксперемента
        $cur_terms = get_the_terms( $pst->ID, 'destination' );
        if( is_array( $cur_terms ) ){
            echo '<div class="services">';
            foreach( $cur_terms as $cur_term ){
                echo '<a href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>';
            }
            echo '</div>';
        }
        //конец эксперемента

        echo '<h1>'. $pst->post_title .'</h1>';
        echo '<div class="link_content">'. $pst->post_content . '</div>';

    }
}
