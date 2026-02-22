<?php
// -1- GENERAL SITE TOGGLES
// Footer attribution toggle
function jexidevwp_show_attribution() {
    return apply_filters( 'jexidevwp_show_attribution', true );
}

// -2- SECURITY TOGGLES
// XML-RPC default true
function jexidevwp_disable_xmlrpc() {
    return apply_filters( 'jexidevwp_disable_xmlrpc', true );
}

// Remove WP Version
function jexidevwp_remove_wp_version() {
    return apply_filters('jexidevwp_remove_wp_version', true);
}

// -3- CLEANUP
// Disable emoji 
function jexidevwp_disable_emojis() {
    return apply_filters( 'jexidevwp_disable_emojis', true );
}

// Disable oEmbeds
function jexidevwp_disable_oembeds() {
    return apply_filters( 'jexidevwp_disable_oembeds', true );
}