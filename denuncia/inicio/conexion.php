<?php
// conexion.php

$host = '127.0.0.1';
$dbname = 'sistema_usuarios';
$username = 'root'; // Cambia esto por tu usuario de MySQL
$password = ''; // Cambia esto por tu contraseña de MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
