<?php 

add_action( 'rest_api_init', function () {
    register_rest_route( '/api/v1', '/contact', array(
        'methods' => 'POST',
        'callback' => 'sendEmail',
        'permission_callback' => '__return_true'
    ) );
} );

function sendEmail( $request ) {
    $data = $request->get_params();
    
    // $request->nombre
    // $request->apellidos
    // $request->pais
    // $request->estado
    // $request->ciudad
    // $request->email
    // $request->telefono
    // $request->mensaje
    
    return $data;
}