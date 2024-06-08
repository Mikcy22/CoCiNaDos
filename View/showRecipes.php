

<div class="container-fluid page-header py-6 " >
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Panel admin</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Recetas</a>
                </li>
            </ol>
        </nav>
    </div>
</div>


<div class="container">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>User</th>
                <th>Borrar</th>
                <!-- Agrega más columnas según los campos de tus recetas -->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($recipes as $recipe): ?>
        <tr>
            <td><?php echo $recipe->id; ?></td>
            <td><?php echo $recipe->name; ?></td>
            <td><?php echo $recipe->description; ?></td>
            <td><?php echo $recipe->username; ?></td>
            <td>
                
            <form method="post" action="index.php?c=User&a=BorrarRecetas&id=<?php echo $recipe->id; ?>">
                <input type="hidden" name="id" value="<?php echo $recipe->id; ?>">
                <input type="hidden" name="action" value="delete">
                <button type="submit">Eliminar</button>
            </form>

            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>

</div>