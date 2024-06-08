<div class="container-fluid page-header py-6 " >
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Usuario</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">User</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        
                    </li>
                </ol>
            </nav>
        </div>
    </div>





    <form action="index.php?c=User&a=actionLogin" method="POST">
    <div class="mb-3">
        <label for="correo_electronico" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>


<form action="index.php?c=User&a=register2" method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
    </div>
    <div class="mb-3">
        <label for="correo_electronico" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>