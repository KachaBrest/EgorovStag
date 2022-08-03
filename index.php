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

<div class="middle">
    <?php
    // if posts
    if ( have_posts() ){
        while ( have_posts() ){
            the_post();
            echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';
            echo get_the_excerpt();
        }
    }
    // if not posts
    else{
        require_once ('lib/post_link.php');
    }
    ?>
</div>

<?php get_footer(); ?>

