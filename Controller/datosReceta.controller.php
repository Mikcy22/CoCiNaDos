<?php

require_once 'model/receta.php';  // Importa el modelo de receta

class datosRecetaController
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
        require_once 'view/receta.php';
        require_once 'view/footer.php';
    }

    // Método para obtener recetas según parámetros
    public function obtenerReceta(){
        if (isset($_GET['param1'])) {
            $param1 = $_GET['param1'];
            $receta = $this->model->DatosReceta($param1);

            if ($receta) {
                // Pasar las recetas obtenidas a la vista
                require_once 'view/header.php';
                require_once 'view/receta.php';
                require_once 'view/footer.php';
            } else {
                echo "Receta no encontrada.";
            }
        } else {
            echo "Parámetros no proporcionados.";
        }
    }
}
?>
