<?php

// Load up CSS, JS, and other assets
add_action('wp_enqueue_scripts', 'jexidev_enqueue_assets');
function jexidev_enqueue_assets() {
    
    // CSS
    $main_css_path = get_stylesheet_directory() . '/style.css';
    $main_css_ver = file_exists($main_css_path) ? filemtime($main_css_path) : false;

    wp_enqueue_style(
        'jexidev-style',
        get_stylesheet_uri(),
        array(),
        $main_css_ver
    );

    // JS
    $main_js_path = get_stylesheet_directory() . '/js/custom-scripts.js';
    $main_js_ver = file_exists($main_js_path) ? filemtime($main_js_path) : false;

    wp_enqueue_script(
        'jexidev-scripts',
        get_stylesheet_directory_uri() . '/js/custom-scripts.js',
        array(),
        $main_js_ver,
        true
    );

}

// Register theme supports, menus, and other initial setup
add_action('after_setup_theme', 'jexidev_theme_setup');
function jexidev_theme_setup() {
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

