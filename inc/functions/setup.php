<?php

// Register theme supports, menus, and other initial setup
add_action('after_setup_theme', 'jexidevwp_theme_setup');
function jexidevwp_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('responsive-embeds');
    
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'mobile' => 'Mobile',
        'footer' => 'Footer Menu'
    ));
}