<?php
require_once 'helpers/session_helper.php';
start_session();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocina2</title>
  <!-- Favicon -->
  <link href="assets/img/logo2.svg" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css2?family=Candal&display=swap'; >

  <!-- Iconos -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- hoja de estilos -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- hOJA DE ESTILOS -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  
  
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 " >
    <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
      <!--<h1 class="text-light m-0">CoCiNaDoS</h1>-->
      <img src="assets/img/logo.svg" class="w-75" >
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto p-4 p-lg-0">

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tipo de plato</a>
          <div class="dropdown-menu m-0">
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Platos principales">Platos principales</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Aperitivos y entrantes">Aperitivos y entrantes</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Guarniciones">Guarniciones</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=postres">Postres</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Bebidas">Bebidas</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Sopas y caldos">Sopas y caldos</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Ensaladas">Ensaladas</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_plato&amp;param2=Bocadillos o snacks">Bocadillos o snacks</a>
          </div>
        </div>

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cocina internacional</a>
          <div class="dropdown-menu m-0">
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Asiática">Asiática</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Italiana">Italiana</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Mexicana">Mexicana</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Española">Española</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Marroquí">Marroquí</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Francesa">Francesa</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=Nacionalidad&amp;param2=Otros">Otros</a>
          </div>
        </div>

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dietas especiales</a>
          <div class="dropdown-menu m-0">
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_dieta&amp;param2=Omnívora">Omnívora</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_dieta&amp;param2=Vegetariana">Vegetariana</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_dieta&amp;param2=Vegana">Vegana</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_dieta&amp;param2=Sin gluten">Sin gluten</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_dieta&amp;param2=Sin lactosa">Sin lactosa</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=tipo_dieta&amp;param2=Mediterránea">Mediterránea</a>
          </div>
        </div>

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ingredientes especiales</a>
          <div class="dropdown-menu m-0">
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=ingrediente_especial&amp;param2=Carne">Carne</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=ingrediente_especial&amp;param2=Pescado y marisco">Pescado y marisco</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=ingrediente_especial&amp;param2=Vegetales y legumbres">Vegetales y legumbres</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=ingrediente_especial&amp;param2=Cereales y granos">Cereales y granos</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=ingrediente_especial&amp;param2=Productos lácteos">Productos lácteos</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=ingrediente_especial&amp;param2=Fruta">Fruta</a>
          </div>
        </div>

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Métodos de elaboracion</a>
          <div class="dropdown-menu m-0">
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Horneado">Horneado</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Asado">Asado</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Salteado">Salteado</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Frito">Frito</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Hervido">Hervido</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Al vapor">Al vapor</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Guisado">Guisado</a>
            <a class="dropdown-item" href="index.php?c=TodasRecetas&a=obtenerRecetasPorParametros&param1=metodo_elaboracion&amp;param2=Otros">Otros</a>
          </div>
        </div>
       
        

        <?php 
          
          if (isset($_SESSION['username'])) {
            echo '
            
            <a href="index.php?c=Formulario&a=mostrarFormulario" class="nav-link">Envia tu receta</a>
            
            <div class="nav-item dropdown" id="userMenu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person fs-4"> </i>' .$_SESSION['username'] .'</a>
              <div class="dropdown-menu m-0">
                <a class="dropdown-item" href="index.php?c=User&a=showUpdateForm"><i class="bi bi-person"> </i>Perfil</a>
                <a class="dropdown-item" href="index.php?c=User&a=showUserRecipes"><i class="bi bi-bookmark-heart"></i>Tus recetas</a>
                             
              ';
              if($_SESSION['username'] === "admin"){
                echo '<a class="dropdown-item" href="index.php?c=User&a=adminPanel"><i class="bi bi-wrench-adjustable"></i>Panel admin</a>';
              }
              
             echo '<a class="dropdown-item" href="index.php?c=User&a=logout"><i class="bi bi-door-closed"></i>Logut</a> </div></div>';

             
          }
          else{
            echo '
            
           <a href="index.php?c=User&a=actionLogin" class="nav-link text-white">Registrate/logeate</a>';
          }
          





          ?>


      </div>
    </div> 
    <!-- USER -->
  </nav>
  <!-- Navbar End -->