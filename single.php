<?php get_header(); ?>

<main id="site-content" role="main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/loops/loop', 'single'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>


<?php get_footer(); ?>