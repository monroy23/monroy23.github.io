<?php
$servername = "localhost"; // o el servidor donde esté la base de datos
$username = "root"; // tu usuario de la base de datos
$password = ""; // tu contraseña de la base de datos
$dbname = "acta_diligencia"; // el nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
