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
        echo ' <p>Записей нет...</p>';
    }
    ?>
</div>

<?php
//    if ( $overridden_template = locate_template('slider-section.php') ) {
//    // locate_template() вернет путь до файла, если дочер. или родит. тема имеет такой файл
//    load_template( $overridden_template );
//    } else {
//    // если файл не найден в теме или доч. теме, загружаем файл из каталога 'templates' плагина
//    load_template( dirname( __FILE__ ) . '/templates/slider-section.php' );
//    }
//?>

<?php get_footer(); ?>