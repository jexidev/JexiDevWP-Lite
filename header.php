<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header">

    <div class="site-branding">
      <?php
      if ( function_exists('the_custom_logo') && has_custom_logo() ) {
          the_custom_logo();
      } else {
          echo '<a href="' . esc_url( home_url('/') ) . '">' . esc_html( get_bloginfo('name') ) . '</a>';
      }
      ?>
    </div>

    <button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"></button>

    <nav class="main-nav">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'items_wrap'     => '<ul>%3$s</ul>'
      ]);
      ?>
    </nav>

    <nav class="mobile-nav" id="mobile-menu">
      <?php
      wp_nav_menu([
        'theme_location' => 'mobile',
        'container'      => false,
        'items_wrap'     => '<ul>%3$s</ul>'
      ]);
      ?>
    </nav>

  </header>
