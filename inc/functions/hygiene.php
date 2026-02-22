<?php
/**
 * Collection of security functions - can all be toggled in toggle.php
 * -1- SECURITY
 * -2- CLEANUP
 * -3- METADATA REMOVAL
 * -4- SCRIPT REMOVAL
 * -5- REST RESTRICTIONS
 * -6- Admin UI RESTRICTIONS
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
if ( jexidevwp_disable_oembeds() ) {
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );
    add_filter( 'embed_oembed_discover', '__return_false' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}