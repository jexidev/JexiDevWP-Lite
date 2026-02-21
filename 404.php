<?php get_header(); ?>

<main id="site-content" role="main">
    <header class="entry-header">
        <h1 class="entry-title">404</h1>
        <h2>Page Not Found</h2>
    </header>

    <div class="page-content">
        <p>The page you’re looking for doesn’t seem to exist.</p>
        <p>You can return to the homepage or try searching for what you need.</p>

        <?php get_search_form(); ?>

        <p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="read-more-link">
                ← Back to Home
            </a>
        </p>
    </div>
</main>

<?php get_footer(); ?>
