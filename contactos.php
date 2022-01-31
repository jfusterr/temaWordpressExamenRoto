<?php get_header(); ?>


<?php while (have_posts()) {
    the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title"> <?php the_title(); ?> </h2>
        <p class="blog-post-meta">
        </p>

        <?= the_excerpt(); ?>

        <a href="<?= the_permalink(); ?>">Ver mas...</a>
    </div>
<?php } ?>



<?php get_footer(); ?>