<?php

require_once 'model/receta.php';

class IndexController
{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT()
    {
        $this->model = new receta();
    }

    //Llamado plantilla principal
    public function Index()
    {

        require_once 'view/header.php';
        require_once 'view/index/index.php';
        require_once 'view/footer.php';
    }

}
