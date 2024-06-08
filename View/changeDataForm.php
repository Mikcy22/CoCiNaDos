
     <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>


<div class="container-fluid page-header py-6 ">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Tus datos</h1>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-around gy-4">
        <div class="features-image col-lg-6 order-1 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/logoCorto.svg" class="w-75" alt="">
        </div>
        <div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
           
        <div class="container">
    <div class="form-container">
        <form action="index.php?c=User&a=updateUser" method="POST">
            <input type="hidden" name="id" value="<?php echo $user->user_id; ?>">

            <div class="form-group">
                <label for="username" class="form-label">Nombre de Usuario:</label>
                <input type="text" name="username" class="form-control" id="username" value="<?php echo $user->username; ?>" required>
            </div>

            <div class="form-group">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $user->nombre; ?>" required>
            </div>

            <div class="form-group">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $user->apellidos; ?>" required>
            </div>

            <div class="form-group">
                <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" value="<?php echo $user->correo_electronico; ?>" required>
            </div>

            <div class="form-group">
                <label for="contrasena" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="contrasena" id="contrasena">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>
</div>