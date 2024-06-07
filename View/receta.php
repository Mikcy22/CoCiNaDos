<?php if (isset($receta)): ?>
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
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





    <div class="container recipe-container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center recipe-title mb-4"><?php echo ($receta['name']); ?></h1>
                <img src="<?php echo htmlspecialchars($receta['image']); ?>" alt="<?php echo htmlspecialchars($receta['name']); ?>"
                    class="img-fluid recipe-img mx-auto d-block mb-4">
                
                    <p><?php echo htmlspecialchars($receta['description']); ?></p>
                
                
                
                <button type="button" class="btn btn-primary position-relative">
                    <i class="bi bi-stopwatch"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?php echo htmlspecialchars($receta['time_elaboration']); ?>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
                
                

                <button type="button" class="btn btn-primary position-relative">
                    <i class="bi bi-person"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?php echo htmlspecialchars($receta['num_personas']); ?>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>




                <button type="button" class="btn btn-primary position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                    <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                </svg>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?php echo htmlspecialchars($receta['calorias']); ?>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>


                <h3>Tipo de dieta: <?php echo htmlspecialchars($receta['tipo_dieta']); ?> </h3>
                <h3>Ingrediente especial:<?php echo htmlspecialchars($receta['ingrediente_especial']); ?> </h3>
                <h3>Tipo de dieta:<?php echo htmlspecialchars($receta['metodo_elaboracion']); ?></h3>


                <h2>Ingredientes</h2>
                <ul>
                    <?php foreach ($receta['ingredientes'] as $ingrediente): ?>
                        <li><?php echo htmlspecialchars($ingrediente['ingrediente']) . ": " . htmlspecialchars($ingrediente['cantidad']); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>



                <h2>Pasos de elaboración:</h2>
                <div class="accordion" id="accordionExample">
                    <?php $num = 0; ?>
                    <?php foreach ($receta['pasos'] as $paso): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $num; ?>">
                                <button class="accordion-button <?php echo $num !== 0 ? 'collapsed' : ''; ?>" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $num; ?>"
                                    aria-expanded="<?php echo $num === 0 ? 'true' : 'false'; ?>"
                                    aria-controls="collapse<?php echo $num; ?>">
                                    Paso a seguir nº <?php echo $num; ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $num; ?>"
                                class="accordion-collapse collapse <?php echo $num === 0 ? 'show' : ''; ?>"
                                aria-labelledby="heading<?php echo $num; ?>" data-bs-parent="#accordionExample">
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

<?php else: ?>
    <p>Receta no disponible.</p>
<?php endif; ?>