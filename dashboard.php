<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

function leer($archivo) {
    return file_exists($archivo) ? htmlspecialchars(file_get_contents($archivo)) : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <body>
    <div class="panel-admin">
      <div class="container mt-4">
        <h1> Bienvenido </h1>
    <h1>Panel de Administrador</h1>
        <form action="guardar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Sobre Nosotros</label>
                <textarea name="nosotros" rows="4" class="form-control"><?= leer("../contenidos/nosotros.txt") ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Proyectos (texto)</label>
                <textarea name="proyectos" rows="4" class="form-control"><?= leer("../contenidos/proyectos.txt") ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Equipo</label>
                <textarea name="equipo" rows="4" class="form-control"><?= leer("../contenidos/equipo.txt") ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>

        <hr class="my-4">

        <h2>Agregar Proyecto con Imagen</h2>
        <form action="guardar_proyecto.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="Nombre del proyecto" required>
            </div>
            <div class="mb-3">
                
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción del proyecto" required>
            </div>
            <div class="mb-3">

                <input type="file" name="imagen" class="form-control" accept="image/*" required>
            </div>
             
            <button type="submit" class="btn btn-success">Guardar Proyecto</button>
           
            <a class="btn btn-danger mt-2" href="logout.php">Cerrar sesión</a>


        </form>
     </div>
    </div>
</body>
</html>
