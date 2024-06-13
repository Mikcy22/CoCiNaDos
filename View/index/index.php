<!-- Carousel END -->
</head>


<body>



    <div id="carruselIndex" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" id="prueba">
                <img src="assets/img/carousel-1.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item" id="prueba">
                <img src="assets/img/carousel-2.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item" id="prueba">
                <img src="assets/img/carousel-3.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" id="prueba">
                <img src="assets/img/carousel-4.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item" id="prueba">
                <img src="assets/img/carousel-5.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" id="prueba">
                <img src="assets/img/carousel-6.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" id="prueba">
                <img src="assets/img/carousel-7.webp" class="d-block w-100 h-100 img-fluid">
                <div class="carousel-caption d-sm-block caption-center">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-11 col-sm-11">
                                    <h1 class="display-1 text-light mb-4 ">Cocinados, el mejor recetario</h1>
                                    <p class="text-light mb-4 pb-3" id="textoSlider">Recetario de la mejor comida y
                                        gastronomía de
                                        cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carruselIndex" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carruselIndex" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <!-- Carousel End -->

    <?php
    $recetaModel = new receta();
    // Llamar a la función TotalRecipes
    $totalRecetas = $recetaModel->TotalRecipes();
    $totalNacionalidades = $recetaModel->TotalNacionalidades();
    $totalUser = $recetaModel->TotalUsuarios();
    ?>

    <!-- Facts Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-2">

                <div class="col-lg-4 col-md-6 ">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-pizza-slice fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Recetas totales</p>
                        <!--RECETAS TOTALES AQUI -->
                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $totalRecetas; ?></h1>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-solid fa-map fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Paises totales</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $totalNacionalidades; ?></h1>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 ">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-solid fa-user fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Recetas de usuarios</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $totalUser; ?></h1>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Facts End -->

    <?php include 'recetas.php'; ?>
 
    <div class="container mb-5">
        <div class="row justify-content-around gy-4">
            <div class="features-image col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/servicio1.webp" class="w-75" alt="">
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-2" data-aos="fade-up"
                data-aos-delay="100">
                <h3>Pon te en contacto con nosotros</h3>

                <form action="index.php?c=User&a=guardarAviso" method="POST" id="contact-form">
    
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Mensaje</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

            </div>
        </div>
    </div>




    <div id="overlay23"></div>
    <div id="cookieConsent" class="alert alert-warning alert-dismissible fade show position-fixed" role="alert"
        style="left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 9999;">
        <p>Acepta las cookies o si no, siempre que cierres el navegador te saldrá este mensaje</p>
        <button id="acceptCookie" class="btn btn-success btn-sm ml-2">Aceptar cookies básicas</button>
        <button id="rejectCookie" class="btn btn-danger btn-sm ml-2">Rechazar</button>
        <button id="rejectCookie" class="btn btn-primary btn-sm ml-2">Personalizar</button>


    </div>