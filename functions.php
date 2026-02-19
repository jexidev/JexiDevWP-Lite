<?php

add_action('wp_enqueue_scripts', 'jexidev_enqueue_assets');
function jexidev_enqueue_assets() {
    
    $main_css_path = get_stylesheet_directory() . '/style.css';
    $main_css_ver = file_exists($main_css_path) ? filemtime($main_css_path) : false;

    wp_enqueue_style(
        'jexidev-style',
        get_stylesheet_uri(),
        array(),
        $main_css_ver
    );

}

