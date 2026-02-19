<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="hfeed">

  <header class="site-header">
    <!-- Desktop Header -->
    <div class="header-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/08/JexiDev-Logo-Coming-Soon.webp" alt="JexiDev Logo">
      </a>

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
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/08/JexiDev-Logo-Coming-Soon.webp" alt="JexiDev Logo">
      </a>
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
