<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

// Guardar textos
file_put_contents("../contenidos/nosotros.txt", $_POST["nosotros"]);
file_put_contents("../contenidos/proyectos.txt", $_POST["proyectos"]);
file_put_contents("../contenidos/equipo.txt", $_POST["equipo"]);
file_put_contents("../contenidos/testimonios.txt", $_POST["testimonios"]);

// Procesar imagen si se subió
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $nombreImagen = basename($_FILES['imagen']['name']);
    $rutaDestino = "../img/" . $nombreImagen;

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        // Guardar información del proyecto con imagen
        $proyectosExtra = "../contenidos/proyectos_imagenes.txt";
        $titulo = $_POST["titulo"] ?? '';
        $descripcion = $_POST["descripcion"] ?? '';
        $linea = $titulo . "|" . $descripcion . "|" . $rutaDestino . "\n";
        file_put_contents($proyectosExtra, $linea, FILE_APPEND);
    }
}

// Redirige al inicio
header("Location:dashboard.php");
exit();