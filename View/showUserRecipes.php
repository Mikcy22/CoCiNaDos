<div class="container-fluid page-header py-6 ">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Tus recetas</h1>
    </div>
</div>

<div class="container-xxl my-6 py-6 pt-0">
    <div class="container">
        <div class="row g-4 ">
            <?php if (!empty($recipes)) : ?>
                <?php foreach ($recipes as $r) : ?>
                    <div class="col-lg-4 col-md-6 " >
                        <div class="product-item d-flex flex-column bg-light rounded overflow-hidden h-400 w-500">
                            <div class="text-center p-4">
                                <h3 class="mb-3"><?= $r->name; ?></h3>
                                <span><?= $r->description; ?></span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid " style="width: 500px; height: 400px; object-fit: cover;" src="<?= $r->image; ?>" alt="<?= $r->name; ?>">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href="index.php?c=datosReceta&a=obtenerReceta&param1=<?= $r->id; ?>"><i class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>You have no recipes.</p>
            <?php endif; ?>

        </div>
    </div>
</div>