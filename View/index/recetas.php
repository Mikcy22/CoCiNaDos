<style type="text/css">
    
</style>

<!-- Start -->
<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="bg-primary text-light rounded-bottom p-5 mt-0 d-flex align-items-center justify-content-center"  style="visibility: visible; animation-delay: 0.1s;">
            <div class="row g-4 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-light mb-0 text-center">¿No sabes qué comer hoy?</h1>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-5">
        <?php 
        $recetas = $this->model->ListarRamdon(3);
        if(count($recetas) == 0){
            echo "<p class='text-center'>No hay recetas registradas.</p>";
        } else { 
            foreach($recetas as $r): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <h3 class="mb-3"><?= $r->name; ?></h3>
                            <span><?= $r->description; ?></span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?= $r->image; ?>" alt="<?= $r->name; ?>">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="index.php?c=datosReceta&a=obtenerReceta&param1=<?=$r->id;?>">
                                    <i class="fa fa-eye text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; 
        } ?>
        </div>
    </div>
    <div id="ancla"></div>
</div>
<!-- End -->
