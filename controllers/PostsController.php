<?php

class PostsController {

    public function actionIndex (){

        if (have_posts()){
        query_posts('posts_per_page=3');
        }

        require_once ('./wp-content/themes/kacha/html/post.php');
    }
}