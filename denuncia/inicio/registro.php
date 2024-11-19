<?php
// registro.php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = $pdo->prepare("INSERT INTO   usuarios (nombre, email, password) VALUES (?, ?, ?)");
    if ($query->execute([$nombre, $email, $password])) {
        echo "<p class='success'>Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.</p>";
    } else {
        echo "<p class='error'>Error al registrar usuario.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
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
    background-image: url('fondo.jpg'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajusta la imagen al tamaño de la pantalla */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita que se repita */
}</style>
</head>

</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form method="POST" action="registro.php">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit">Registrar</button>
            <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>.</p>
        </form>
    </div>
</body>
</html>
 
