<?php
session_start();

$usuario_correcto = "admin";
$contraseña_correcta = "1234";

$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

if ($username === $usuario_correcto && $password === $contraseña_correcta) {
    $_SESSION["usuario"] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    // Mostrar mensaje de error con Bootstrap y Bootstrap Icons
    echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <div class="alert alert-danger d-flex align-items-center" role="alert" style="max-width: 500px; margin: 40px auto; font-size: 1.2rem;">
      <i class="bi bi-lock-fill me-3" style="font-size: 2rem;"></i>
      <div>
        <strong>Error:</strong> Usuario o contraseña incorrectos.
      </div>
      <a href="login.php" class="btn btn-sm btn-danger ms-auto">Volver al login</a>
    </div>';
}
?>
