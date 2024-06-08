<?php

//la nacionalidad de asiatica, no esta porque, esta por defecto en el despleglable
// Ruta al archivo JSON
$json_file = 'assets/js/nacionalidades.json';

// Lee el contenido del archivo JSON
$json_data = file_get_contents($json_file);

// Decodifica el JSON en un array PHP
$array_data = json_decode($json_data, true);

?>





<div class="container-fluid page-header py-6 ">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Envia tu receta y disfrutala con los demas</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                <li class="breadcrumb-item text-primary active" aria-current="page">Envia tu receta</li>
            </ol>
        </nav>
    </div>
</div>


<form action="index.php?c=Formulario&a=guardarReceta" method="post" enctype="multipart/form-data">
    <div class="container">

    
        <?php
      if (!isset($_SESSION['username'])) {
            echo '<div class="alert alert-primary" role="alert">
                        <a href="index.php?c=User&a=actionLogin" class="alert-link">Registrate o logeate</a> para poder enviarnos tu receta.
                    </div>';

        }

        $username = $_SESSION['username'];
        ?>

        


        <div class="mb-3">
            <label for="imageInput" class="form-label">Seleccionar imagen</label>
            <input type="file" class="form-control" id="imageInput" name="image" accept="image/*" required>

        </div>
        <input type="hidden" id="imageIdInput" name="image_id">





        <h3 class="h3-title title-box title-laranja margin-top-40">Nombre de la receta</h3>
        <div class="d-flex justify-content-center">
            <div class="input-group mb-3">

                <input size="40" class="form-control" placeholder="Nombre de la receta" value="" type="text"
                    name="name">
            </div>
        </div>

        <h3 class="h3-title title-box title-laranja margin-top-40">Breve descripcion de la receta</h3>
        <div class="d-flex justify-content-center">
            <div class="input-group mb-3">
                <textarea class="form-control me-3" rows="2" name="description"></textarea>

            </div>
        </div>


        <!-- Tiempo de elaboracion -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Tiempo de elaboracion</h3>
        <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Minutos" aria-label="Minutos"
                aria-describedby="basic-addon2" name="time_elaboration">
            <span class="input-group-text" id="basic-addon2">Minutos</span>
        </div>
        <!-- Fin Tiempo de elaboracion -->



        <!-- Calorias -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Calorias de la receta</h3>
        <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Calorías" aria-label="Calorías"
                aria-describedby="basic-addon3" name="calorias">
            <span class="input-group-text" id="basic-addon3">Calorías</span>
        </div>
        <!-- Fin Calorias -->

        <!-- Número de personas -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Número de personas</h3>
        <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="Número de personas" aria-label="Número de personas"
                aria-describedby="basic-addon3" name="num_personas">
            <span class="input-group-text" id="basic-addon3">Número de personas</span>
        </div>
        <!-- FIN Número de personas -->

        <!-- Tipo de comida -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Tipo de plato</h3>
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Tipo de comida" name="tipo_plato">
                <option selected>Aperitivos y entrantes</option>
                <option value="Platos principales">Platos principales</option>
                <option value="Guarniciones">Guarniciones</option>
                <option value="Postres">Postres</option>
                <option value="Sopas y caldos">Sopas y caldos</option>
                <option value="Ensaladas">Ensaladas</option>
                <option value="Bocadillos o snacks">Bocadillos o snacks</option>
                <option value="Bebidas">Bebidas</option>
            </select>
        </div>
        <!-- FIN Tipo de comida -->

        <!-- nacionalidad 
        <h3 class="h3-title title-box title-laranja margin-top-40">Nacionalidad del plato</h3>
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Nacionalidad" name="nacionalidad">
                <option selected>Asiática</option>
                <option value="Italiana">Italiana</option>
                <option value="Mexicana">Mexicana</option>
                <option value="Española">Española</option>
                <option value="Marroquí">Marroquí</option>
                <option value="Francesa">Francesa</option>
                <option value="China">China</option>
                <option value="Japonesa">Japonesa</option>
                <option value="India">India</option>
                <option value="Otros">Otros</option>
            </select>
        </div>
        FIN  nacionalidad -->



        <h3 class="h3-title title-box title-laranja margin-top-40">Nacionalidad del plato</h3>
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Nacionalidad" name="nacionalidad">
                <option selected>Asiática</option>
                <?php
                // Ahora puedes acceder a los datos como lo harías con cualquier array PHP
                foreach ($array_data['Nationalities'] as $nationality) {
                    echo '<option value="' . $nationality['value'] . '">' . $nationality['name'] . '</option>';

                }
                ?>

            </select>
        </div>



        <!-- Dieta especial -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Tipo de dieta especial</h3>
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Dieta especial" name="tipo_dieta">
                <option selected>Omnívora</option>
                <option value="Vegana">Vegana</option>
                <option value="Vegetariana">Vegetariana</option>
                <option value="Sin gluten">Sin gluten</option>
                <option value="Sin lactosa">Sin lactosa</option>
            </select>
        </div>
        <!--FIN  Dieta especial -->
        <!-- Ingredientes especiales -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Ingrediente principal</h3>
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Ingredientes especiales" name="ingrediente_especial">
                <option selected>Carne</option>
                <option value="Pescado y marisco">Pescado y mariscos</option>
                <option value="Vegetales y legumbres">Vegetales y legumbres</option>
                <option value="Cereales y granos">Cereales y granos</option>
                <option value="Legumbres y frijoles">Legumbres y frijoles</option>
                <option value="Productos lácteos">Productos lácteos</option>
                <option value="Aceites y grasas">Aceites y grasas</option>
                <option value="Especias y hierbas">Especias y hierbas</option>
            </select>
        </div>
        <!--FIN  Ingredientes especiales -->
        <!-- Metodos de elaboracion -->
        <h3 class="h3-title title-box title-laranja margin-top-40">Metodos de elaboracion</h3>
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Metodos de elaboracion" name="metodo_elaboracion">
                <option selected>Horneado</option>
                <option value="Asado">Asado</option>
                <option value="Salteado">Salteado</option>
                <option value="Frito">Frito</option>
                <option value="Hervido">Hervido</option>
                <option value="Al vapor">Al vapor</option>
                <option value="Guisado">Guisado</option>
            </select>
        </div>

        <!--FIN  Metodos de elaboracion -->



        <div class="ingredientes" id="ingredientesInput">
            <!-- Ingredientes -->
            <h2 class="h2-title title-box title-laranja margin-top-40 text-center">Ingredientes de la receta</h2>
            <p class="text-center-cinza">Escribe cada ingrediente por línea, describiendo la cantidad y la unidad
                utilizada. Y para agregar otro, haz clic en el botón de abajo.</p>
            <div class="container mt-4">
                <div id="form-container">
                    <div class="form-group d-flex align-items-center mb-2">
                        <input size="40" class="form-control me-3" placeholder="Por ejemplo: 200g" value="" type="text"
                            name="quantidade[]">
                        <input size="40" class="form-control me-3" placeholder="Por ejemplo, leche condensada" value=""
                            type="text" name="ingrediente[]">
                    </div>
                </div>
                <button type="button" class="btn btn-primary me-3 addInput">+</button>
            </div>
        </div>

        <div class="pasos" id="pasosInput">
            <h2 class="h2-title title-box title-laranja margin-top-40 text-center">Pasos para hacer la receta</h2>
            <!-- Resto de tu formulario para los pasos de la receta -->

            <!-- Pasos -->
            <p class="text-center-cinza">Escribe los pasos para hacer la receta uno por línea. Y para agregar otro, haz
                clic en el botón de abajo.</p>
            <div class="container mt-4">
                <div id="pasos-container">
                    <div class="form-group d-flex align-items-center mb-2">
                        <textarea class="form-control me-3" rows="1" placeholder="Por ejemplo, 1. Picar las verduras"
                            name="pasos[]"></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-primary me-3 addInput">+</button>
            </div>

                
         
            <?php
            if (isset($_SESSION['username'])) {
                echo '<div class="mt-4"><button type="submit" class="btn btn-primary" name="submit" onchange="fileChange()">Enviar receta</button></div>';
              }
              ?>
          
            <!-- Botón de enviar -->

        </div>
        </div>
</form>