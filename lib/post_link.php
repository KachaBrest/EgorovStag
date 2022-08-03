<?php
//get URI
$url = $_SERVER['REQUEST_URI'];
$url = substr($url,0,-1);
$link = substr(strrchr($url, '/'), 1 );

//get info post
$psts  = get_posts( array(
    'post_type' => 'location-post',
) );

//echo '<pre>';
//var_dump($psts);
//echo'</pre>';
//echo '<br>';

foreach( $psts as $pst ){
    if($pst->post_name == $link) {
        echo '<h1>'. $pst->post_title .'</h1>';
        echo '<div class="link_content">'. $pst->post_content . '</div>';
    }
}
