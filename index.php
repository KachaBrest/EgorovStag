<?php


// 1. Require file systems
define('ROOT',dirname(__FILE__));
require_once (ROOT.'./components/Router.php');

// 2. Autoload
define('ROOT',dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');

// 3 Router
$router = new Router();
$router->run();

get_header();

require_once ('lib/post_link.php');

get_footer();

