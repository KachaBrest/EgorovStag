<?php

class PostsController {

    public function actionIndex (){
        require_once ('./wp-content/themes/kacha/templates/Post.php');
    }
}