<?php
$host = "localhost";       // Servidor de la base de datos
$dbname = "inspecciones";   // Nombre de la base de datos que creaste
$username = "root";         // Nombre de usuario de MySQL (por defecto es 'root' en XAMPP)
$password = "";             // Contraseña de MySQL (en XAMPP por defecto es vacía)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establece el modo de error de PDO para lanzar excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
