<?php get_header(); ?>

<main id="site-content" role="main">

    <?php if (have_posts()) : ?>
        <div class="posts">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('template-parts/loops/loop', 'post'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>

