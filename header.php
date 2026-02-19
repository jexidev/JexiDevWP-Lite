<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div id="wrapper" class="hfeed">

    <header class="site-header">
      <!-- Desktop Header -->
      <div class="header-container">
        <div class="site-branding">
          <?php
          if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
          }
          ?>
        </div>

        <nav class="main-nav">
          <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => '',
            'items_wrap'     => '<ul>%3$s</ul>'
          ]);
          ?>
        </nav>

        <!-- Mobile Header -->
        <div class="m-header-container">
          <div class="site-branding">
            <?php
            if (function_exists('the_custom_logo') && has_custom_logo()) {
              the_custom_logo();
            } else {
              echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
            }
            ?>
          </div>

          <button class="menu-toggle" aria-controls="m-menu-nav" aria-expanded="false"></button>
        </div>
        <div>
          <nav class="m-menu-nav" id="m-menu-nav">
            <?php
            wp_nav_menu([
              'theme_location' => 'mobile',
              'container'      => false,
              'menu_class'     => '',
              'items_wrap'     => '<ul>%3$s</ul>'
            ]);
            ?>
          </nav>
        </div>
    </header>

    <div id="container">
      <main id="content" role="main">