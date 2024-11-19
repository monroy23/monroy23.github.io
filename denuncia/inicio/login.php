<?php
// login.php
require 'conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $query->execute([$email]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
  
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        header("Location: perfil.php");
        exit;
    } else {
        echo "<p class='error'>Contraseña incorrecta.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
        

    <link rel="stylesheet" href="estilos.css">

    <style>/* Estilo para el fondo de la página */
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('h ayunta.jpg'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajusta la imagen al tamaño de la pantalla */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita que se repita */
}</style>
</head>

<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="login.php">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit">Iniciar sesión</button>
            <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
        </form>
    </div>
</body>
</html>













