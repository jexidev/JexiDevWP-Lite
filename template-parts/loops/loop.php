<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
        <?php 
        if ( has_post_thumbnail() ) { 
            the_post_thumbnail( 'full' ); 
        } 
        ?>

        <?php the_content(); ?>

        <?php wp_link_pages(); ?>
    </div>

</article>
