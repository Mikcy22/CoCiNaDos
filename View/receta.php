<style type="text/css">

</style>

<?php if (isset($receta)) : ?>

    <div class="container-fluid page-header py-6 ">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3"><?php echo ($receta['name']); ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#"><?php echo ($receta['nacionalidad']); ?></a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        <?php echo ($receta['tipo_plato']); ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>





<?php else : ?>
    <p>Receta no disponible.</p>
<?php endif; ?>


<div class="container mb-5">
    <div class="row justify-content-around gy-4">

        <div class="features-image col-lg-6 order-1 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo htmlspecialchars($receta['image']); ?>" class="w-75" alt="">
            <p>Autor: <?php echo htmlspecialchars($receta['username']); ?></p>

            <h2>Pasos de elaboración:</h2>
            <div class="acordeon" id="acordeon">
                <?php $num = 1; ?>
                <?php foreach ($receta['pasos'] as $paso) : ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo $num; ?>">
                            <button class="accordion-button <?php echo $num !== 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $num; ?>" aria-expanded="<?php echo $num === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $num; ?>">
                                Paso a seguir nº <?php echo $num; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $num; ?>" class="accordion-collapse collapse <?php echo $num === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $num; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo htmlspecialchars($paso['paso']); ?>
                            </div>
                        </div>
                    </div>
                    <?php $num++; ?>
                <?php endforeach; ?>
            </div>



        </div>

        <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-2 aos-init aos-animate">
            <h1 class="nombreR"><?php echo ($receta['name']); ?></h1>
            <p><?php echo htmlspecialchars($receta['description']); ?></p>
            <h2>Ingredientes</h2>
            <ul>
                <?php foreach ($receta['ingredientes'] as $ingrediente) : ?>
                    <li><?php echo htmlspecialchars(ucfirst($ingrediente['ingrediente'])) . ": " . htmlspecialchars($ingrediente['cantidad']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="container my-5">
                <div class="row text-center justify-content-center">

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-primary"><img src="https://img.icons8.com/?size=256&id=zd6trzaPi6R3&format=png" id="iconoCarne"></div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['calorias']); ?> calorias</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-success"><img src="https://img.icons8.com/?size=256&id=Y6SzeUtiLnxL&format=png" id="iconoCarne"></div>
                                <p class="mt-2 custom-text"><?php echo htmlspecialchars($receta['time_elaboration']); ?> minutos</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-danger"><img src="https://img.icons8.com/?size=256&id=nXduhA13SMUu&format=png" id="iconoCarne"></div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['num_personas']); ?> personas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-info"><img src="https://img.icons8.com/?size=256&id=naNmza0RrDDM&format=png" id="iconoCarne"></div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['tipo_dieta']); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-secondary"><img src="https://img.icons8.com/?size=256&id=6KHPfr9907KB&format=png" id="iconoCarne"></div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['metodo_elaboracion']); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-warning"><img src="https://img.icons8.com/?size=256&id=hwB2vUsbIvJ2&format=png" id="iconoCarne"></div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['ingrediente_especial']); ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            

        </div>
    </div>
</div>