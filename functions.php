<?php

add_action('after_setup_theme', 'theme_register_nav_menu');

define( 'THEME_TEXTDOMAIN', 'ea' );

require_once ('lib/api.php');
// bootstrap
require_once ('lib/bootstrap.php');

//menu.php
require_once ('lib/menu.php');

//post-type
require_once('lib/myPost-type.php');

require_once ('lib/services.php');

//taxonomies
require_once ('lib/taxonomies.php');

require_once ('lib/instagram.php');
require_once('lib/Theme_settings.php');

require_once('lib/Walker_Menu.php');






