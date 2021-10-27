
<?php
//Inicio la sesion
ob_start();
session_start();

//Cargar el autoload 
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'helpers/utils.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function show_error() {
    $error = new errorController();
    $error->index();
}

//Compruebo si me llega el controlador por URL
if(isset($_GET['controller'])) {
    // si llega, genero una variable concatenando el ".controller"
    $nombre_controlador = $_GET['controller'].'Controller';

} elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;            
    
} else {
    // Si no existe, muestro msj error
    show_error();
    exit();
}


// Compruebo si existe la clase y creo el objeto
if(class_exists($nombre_controlador)) {  
    $controlador = new $nombre_controlador();  

    // Compruebo que hay parametro pasado y que existe la accion como metodo
    if(isset($_GET['action'])&& method_exists($controlador, $_GET['action']) ) {
        $action = $_GET['action'];
        $controlador->$action();
    
    } elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
       $default = action_default;
       $controlador->$action_default();
    
    } else {
        show_error();
    }
} else {
    show_error();
}


require_once 'views/layout/footer.php';