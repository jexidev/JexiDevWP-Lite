<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <footer class="entry-meta">
        <span class="posted-on"><?php echo get_the_date(); ?></span>
    </footer>

</article>
