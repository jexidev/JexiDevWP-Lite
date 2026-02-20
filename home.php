<main id="site-content">
    <?php if ( have_posts() ) : ?>
        <div class="posts">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('template-parts/loops/loop', 'post'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php endif; ?>
</main>
