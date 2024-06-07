<?php

// Se incluye la configuración de conexión a datos en el SGBD: sql.
require_once __DIR__ . '/Model/database.php'; // Ajusta la ruta

// Se inicializa la variable controller con 'index' para el controlador por defecto.
$controller = 'index';

// Todo esta lógica hará el papel de un FrontController
if (!isset($_REQUEST['c'])) {
    // Llamado de la página principal
    require_once __DIR__ . "/Controller/{$controller}.controller.php"; // Ajusta la ruta
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
} else {
    // Obtiene el controlador a cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Construye el nombre del archivo del controlador
    $controllerFile = __DIR__ . "/Controller/{$controller}.controller.php"; // Ajusta la ruta

    if (file_exists($controllerFile)) {
        // Instancia el controlador
        require_once $controllerFile;
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;

        // Llama la acción
        call_user_func(array($controller, $accion));
    } else {
        // Manejo del error: controlador no encontrado
        die("Controlador no encontrado: $controller");
    }
}
