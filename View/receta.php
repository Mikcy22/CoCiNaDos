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
        </div>

        <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-2 aos-init aos-animate">
            <h1 class="nombreR"><?php echo ($receta['name']); ?></h1>
            <p><?php echo htmlspecialchars($receta['description']); ?></p>
            <h2>Ingredientes</h2>
            <ul>
                <?php foreach ($receta['ingredientes'] as $ingrediente) : ?>
                    <li><?php echo htmlspecialchars($ingrediente['ingrediente']) . ": " . htmlspecialchars($ingrediente['cantidad']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="container my-5">
                <div class="row text-center justify-content-center">

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-primary card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15" />
                                    </svg>
                                </div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['calorias']); ?> calorias</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-success card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-success"><i class="bi bi-stopwatch"></i></div>
                                <p class="mt-2 custom-text"><?php echo htmlspecialchars($receta['time_elaboration']); ?> minutos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-danger card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <div class="responsive-number text-danger"><i class="bi bi-person"></i></div>
                                <p class="mt-2 custom-text"> <?php echo htmlspecialchars($receta['num_personas']); ?> personas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4" id="datos">
                        <div class="card border-info diet-card card-equal-height custom-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title text-info">Tipo de dieta</h5>
                                <p class="card-text">Mediterranea</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-4" id="datos">
                    <div class="card border-secondary diet-card card-equal-height custom-card">
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Metodo cocinado</h5>
                            <p class="card-text">Asado</p>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 mb-4" id="datos">
                    <div class="card border-warning diet-card card-equal-height custom-card">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Ingrediente especial</h5>
                            <p class="card-text">Vegetales y legumbres</p>
                        </div>
                    </div>
                </div>



                
                    
                </div>
            </div>

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
    </div>
</div>