<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/receta.php';

class RecetaController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new receta();
    }

    //Llamado plantilla principal
    public function Index(){
        // Obtener recetas aleatorias
        $prod = $this->model->ListarRamdon(3);
        
        // Obtener el total de recetas
        $totalRecetas = $this->model->TotalRecipes();
    
        // Incluir la vista
        require_once 'view/header.php';
        require_once 'view/envioReceta'; // Pasar $totalRecetas a tu vista
        require_once 'view/footer.php';
    }
}