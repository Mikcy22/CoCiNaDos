<?php
$i = $_GET["param1"];
$o = $_GET["param2"];
switch ($i) {
    case "tipo_plato":
        $i ="Tipo de plato";
        break;
    case "tipo_dieta":
        $i = "Dieta especial";
        break;
    case "ingrediente_especial":
        $i = "Ingrediente especial";
        break;
    case "metodo_elaboracion":
        $i = "Método de elaboración";
        break;
}
?>






<!-- Aquí incluyes el HTML y PHP necesario para mostrar las recetas según parámetros -->
<div class="container-fluid page-header py-6 " >
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3"><?php echo $_GET["param2"]; ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#"><?php echo $i ?></a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page"><?php echo $_GET["param2"]; ?></li>
            </ol>
        </nav>
    </div>
</div>


<div class="container-xxl bg-light">
    <div class="container">
       
        <div class="row g-4 mb-5">
            <?php foreach ($this->model->getRecetasByParams($param1, $param2) as $r): ?>
                <div class="col-lg-4 col-md-6 " >
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-400 w-500">
                        <div class="text-center p-4">
                            <h3 class="mb-3"><?= $r->name; ?></h3>
                            
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid " style="width: 500px; height: 400px; object-fit: cover;"
                                src="<?= $r->image; ?>" alt="<?= $r->name; ?>">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle"
                                    href="index.php?c=datosReceta&a=obtenerReceta&param1=<?=$r->id;?>"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>