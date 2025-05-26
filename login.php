<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
    <div class="login-hero">
    <div class="login-container">
   <form action="validar.php" method="POST">
  <h2>Login Administrador</h2>

  <label for="username">Usuario</label>
  <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="username" id="username" required>
  </div>

  <label for="password">Contraseña</label>
  <div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="password" required>
  </div>

  <button type="submit">Ingresar</button>
  <a href="index.php" class="btn-volver">Volver al Inicio</a>
</form>

