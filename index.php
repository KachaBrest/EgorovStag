<?php
// 1. Require file systems
define('ROOT',dirname(__FILE__));
require_once (ROOT.'./components/Router.php');

// 2 Router

$router = new Router();
$router->run();
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/kacha/
 *
 * @package WordPress
 * @subpackage Kacha
 * @since Kacha 1.0
 */

get_header();
?>



<?php get_footer(); ?>

