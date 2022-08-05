<?php
/*
Template Name: Main_page_template
*/
get_header();?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>HOME PAGE</title>
    </head>
<body>
<h1>HOME PAGE</h1>

<div class="container">

    <?php
    while ( have_posts() ) : the_post();

        echo apply_filters('the_content',$post->post_content);

    endwhile; // End of the loop.
    ?>
</div>

<!-- Slider section   -->
<?php get_template_part('block-templates/slider-section');    ?>

<!-- Footer   -->
<?php get_footer() ?>