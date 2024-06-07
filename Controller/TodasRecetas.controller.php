<?php

require_once 'model/receta.php';  // Importa el modelo de receta

class TodasRecetasController
{
    private $model;

    // Creación del modelo
    public function __CONSTRUCT()
    {
        $this->model = new Receta();  // Instancia el modelo de receta
    }

    // Método para mostrar la página de todas las recetas
    public function index()
    {
        require_once 'view/header.php';
        require_once 'view/RecetasPorParametros.php';
        require_once 'view/footer.php';
    }

    // Método para obtener recetas según parámetros
    public function obtenerRecetasPorParametros()
    {
        if(isset($_GET['param1']) && isset($_GET['param2'])) {
            $param1 = $_GET['param1'];
            $param2 = $_GET['param2'];
            $recetas = $this->model->getRecetasByParams($param1, $param2);

            // Pasar las recetas obtenidas a la vista
            require_once 'view/header.php';
            require_once 'view/RecetasPorParametros.php';
            require_once 'view/footer.php';
        } else {
            // Manejo de error si los parámetros no están presentes
            echo "Parámetros no proporcionados.";
        }
    }
}
