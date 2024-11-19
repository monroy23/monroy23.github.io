<?php
// perfil.php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenido</h2>
        <p> <?php echo htmlspecialchars($_SESSION['nombre']); ?>.</p>
        <br><a href="logout.php" class="boton">Cerrar sesión</a><br>
<br><a href="/denuncia/menu.php" class="boton">Inicio</a><br>

    </div>
</body>
<Style>
    .container {
    width: 400px; /* Aumenta el ancho del contenedor */
    padding: 70px;
    margin: 0 auto;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0px 6px 9px rgba(0, 0, 0, 0.2);
}

.container h2 {
    font-size: 2em; /* Aumenta el tamaño del encabezado */
    margin-bottom: 30px;
}

.container p {
    font-size: 1.2em; /* Aumenta el tamaño del texto de bienvenida */
}

.container a {
    font-size: 1.1em; /* Aumenta el tamaño de los enlaces */
    color: #fdfefe; /* Azul para los enlaces */
    text-decoration: none;
    padding: 10px 15px;
    display: inline-block;
}

.container a:hover {
    color: #fdfefe; /* Azul más oscuro al pasar el cursor */
}



.boton {
    background-color: #007bff; /* Color azul de fondo */
    color: white; /* Texto en blanco */
    padding: 10px 20px; /* Espaciado interno */
    text-decoration: none; /* Sin subrayado */
    border-radius: 5px; /* Bordes redondeados */
    display: inline-block; /* Para que mantenga la forma de botón */
    font-size: 1em; /* Tamaño de la fuente */
    margin: 5px; /* Espaciado entre botones */
    transition: background-color 0.3s; /* Transición suave en hover */
}

.boton:hover {
    background-color: #0056b3; /* Azul más oscuro al pasar el cursor */
}

</Style>
</html>

<style>/* Estilo para el fondo de la página */
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('300.jpg'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajusta la imagen al tamaño de la pantalla */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita que se repita */
}</style>
</head>

