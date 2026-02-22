<?php

// Collection of security functions - can all be toggled in toggle.php

// -- SECURITY
// Disable xml-rpc - reduces DDOS
if ( jexidevwp_disable_xmlrpc() ) {
    add_filter( 'xmlrpc_enabled', '__return_false' );
}


// -- CLEANUP
// Disable legacy emoji script
if ( jexidevwp_disable_emojis() ) {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}