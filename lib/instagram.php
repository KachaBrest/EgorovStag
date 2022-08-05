<?php

require_once ( 'C:\OpenServer\domains\kacha\wp-content\themes\kacha/controllers/Instagram_Media.php');

$app_id = get_field('app_id', 'options');
$app_secret = get_field('app_secret', 'options');
$app_token = get_field('app_token', 'options');

\Harbinger_Marketing\Instagram_Media::init($app_id, $app_secret, $app_token );

$media = \Harbinger_Marketing\Instagram_Media::get_media();
var_dump($media);


