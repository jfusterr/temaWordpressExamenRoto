<?php get_header(); ?>


    <?php
    while (have_posts()) {
        the_post(); ?>
            

    <?php } ?>

    <?php include("template-parts/content/content-single.php") ?>

<?php get_footer(); ?>