<?php get_header(); ?>

<main id="site-content" role="main">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            get_template_part('template-parts/loops/loop', 'page');
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
