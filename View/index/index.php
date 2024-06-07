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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
                                    <p class="text-light mb-4 pb-3">Recetario de la mejor comida y gastronomía de
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
    $totalNacionalidades = $recetaModel ->TotalNacionalidades();
    $totalUser = $recetaModel ->TotalUsuarios();
    ?>

    <!-- Facts Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-2">

                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-pizza-slice fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Recetas totales</p>
                        <!--RECETAS TOTALES AQUI -->
                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $totalRecetas; ?></h1>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-solid fa-map fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Paises totales</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo $totalNacionalidades; ?></h1>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
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
        <div class="features-image col-lg-6 order-1 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/servicio1.webp" class="w-75" alt="">
        </div>
        <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <h3>Enim quis est voluptatibus aliquid consequatur</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>
            <div class="row">
                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
                    </div>
                </div><!-- End Icon Box -->
                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                        <h4>nemo-enim</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                    </div>
                </div><!-- End Icon Box -->
                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4>Almohadilla para cenar</h4>
                        <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                    </div>
                </div><!-- End Icon Box -->
                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4>clov tride</h4>
                        <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                    </div>
                </div><!-- End Icon Box -->
            </div>
        </div>
    </div>
    </div>
