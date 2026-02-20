<?php 

get_header(); ?>

<main id="site-content" role="main">
    <header class="archive-header">
        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
        <?php if (get_the_archive_description()) : ?>
            <div class="archive-description"><?php the_archive_description(); ?></div>
        <?php endif; ?>
    </header>

    <div class="posts">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/loops/loop', 'post'); ?>
            <?php endwhile; ?>
            
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?> 
    </div>
</main> 

<?php get_footer(); ?>