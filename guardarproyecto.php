<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $nombreImagen = basename($_FILES['imagen']['name']);
    $rutaDestino = "../img/" . $nombreImagen;

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        $titulo = $_POST["titulo"] ?? '';
        $descripcion = $_POST["descripcion"] ?? '';
        $linea = $titulo . "|" . $descripcion . "|" . $rutaDestino . "\n";
        file_put_contents("../contenidos/proyectos_imagenes.txt", $linea, FILE_APPEND);
    }
}

header("Location: dashboard.php");
exit();

