<?php

// Disable xml-rpc - reduces DDOS
if ( jexidevwp_disable_xmlrpc() ) {
    add_filter( 'xmlrpc_enabled', '__return_false' );
}
