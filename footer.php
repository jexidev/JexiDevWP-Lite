<?php
?>

<footer class="site-footer">
  <div class="footer-container">

    <div class="footer-branding">
      <?php
        if ( function_exists('the_custom_logo') && has_custom_logo() ) {
            the_custom_logo();
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
        }
      ?>
    </div>

    <nav class="footer-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>'
        ]);
      ?>
    </nav>

  </div>

  <?php if ( jexidevwp_show_attribution() ) : ?>
    <div class="copyright">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> —
      Powered by <a href="https://jexidev.site" target="_blank">JexiDevWP Lite</a></p>
    </div>
  <?php endif; ?>

</footer>

<?php wp_footer(); ?>
</body>
</html>

