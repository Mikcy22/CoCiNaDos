

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
    <nav>

  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Recetas</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Avisos</button>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

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









  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">







  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

  <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Mensaje</th>
            <th>Email</th>
            <th>Fecha de envío</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($avisos)): ?>
            <?php foreach ($avisos as $aviso): ?>
            <tr>
                <td><?php echo htmlspecialchars($aviso->id); ?></td>
                <td><?php echo htmlspecialchars($aviso->name); ?></td>
                <td><?php echo htmlspecialchars($aviso->message); ?></td>
                <td><?php echo htmlspecialchars($aviso->email); ?></td>
                <td><?php echo htmlspecialchars($aviso->created_at); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No hay avisos.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


  </div>






































  </div>
</div>


</div>