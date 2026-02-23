<?php

// Load up CSS, JS, and other assets
add_action('wp_enqueue_scripts', 'jexidevwp_enqueue_assets');
function jexidevwp_enqueue_assets() {
    
    // CSS
    $main_css_path = get_stylesheet_directory() . '/assets/css/style.css';
    $main_css_ver = file_exists($main_css_path) ? filemtime($main_css_path) : false;

    wp_enqueue_style(
        'jexidevwp-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array(),
        $main_css_ver
    );


    // JS
    $main_js_path = get_stylesheet_directory() . '/assets/js/custom-scripts.js';
    $main_js_ver = file_exists($main_js_path) ? filemtime($main_js_path) : false;

    wp_enqueue_script(
        'jexidevwp-scripts',
        get_stylesheet_directory_uri() . '/assets/js/custom-scripts.js',
        array(),
        $main_js_ver,
        true
    );
}