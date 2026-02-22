<?php

// Footer attribution toggle
function jexidevwp_show_attribution() {
    return apply_filters( 'jexidevwp_show_attribution', true );
}

// SECURITY TOGGLES
// XML-RPC default true
function jexidevwp_disable_xmlrpc() {
    return apply_filters( 'jexidevwp_disable_xmlrpc', true );
}

