<?php

// Register theme supports, menus, and other initial setup
add_action('after_setup_theme', 'jexidevwp_theme_setup');
function jexidevwp_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('responsive-embeds');

    // Custom image sizes (JDWP Lite v1.1.0 feature)
    add_image_size('jexidevwp-logo', 300, 0, false);
    add_image_size('jexidevwp-thumb', 600, 400, true);   
    add_image_size('jexidevwp-medium', 1200, 800, true);  
    add_image_size('jexidevwp-large', 2000, 1200, true);  

    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'mobile' => 'Mobile',
        'footer' => 'Footer Menu'
    ));
}