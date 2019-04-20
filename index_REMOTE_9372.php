<?php

$controller = 'web';

// Si no tenemos declarada la variable c iniciamos el Index
if(!isset($_REQUEST['c'])) {
    require_once "Controlador/$controller.controlador.php";
    $controller = ucwords($controller) . 'Controlador';
    $controller = new $controller;
    $controller->Index();    
}
else {
	// Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "Controlador/$controller.controlador.php";
    $controller = ucwords($controller) . 'Controlador';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}