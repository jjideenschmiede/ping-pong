<?php
/**
 * Plugin Name: Ping Pong
 * Description: Eine Partie Ping Pong schadet nie.
 * Version: 1.0.0
 * Author: J&J Ideenschmiede GmbH
 * Author URI: https://jj-ideenschmiede.de
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
**/

add_action( 'rest_api_init', 'createPingPongEndpoint' );

function createPingPongEndpoint(){
    register_rest_route( 'ping', 'pong', [
        'methods' => 'GET',
        'callback' => 'pingPongEndpointResponse',
    ] );
}

function pingPongEndpointResponse(){
    return new WP_REST_Response(
        array(
            'active' => true
        ),
    200 );;
}

?>