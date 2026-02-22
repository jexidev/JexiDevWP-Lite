<?php
/**
 * Collection of security functions - can all be toggled in toggle.php
 * -1- Security
 * -2- Cleanup
 * -3- Metadata removal
 * -4- Script removal
 * -5- REST restrictions
 * -6- Admin UI restrictions
 */


// -1- SECURITY
// Disable xml-rpc - reduces DDOS
if ( jexidevwp_disable_xmlrpc() ) {
    add_filter( 'xmlrpc_enabled', '__return_false' );
}

// Remove WP Versioning
if ( jexidevwp_remove_wp_version() ) {
    remove_action('wp_head', 'wp_generator');
}

// -2- CLEANUP
// Disable legacy emoji script
if ( jexidevwp_disable_emojis() ) {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

// Disable oEmbeds
if ( jexidev_disable_oembeds() ) {
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );
    add_filter( 'embed_oembed_discover', '__return_false' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}