<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbciudadanas";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$folio=$_POST['folio'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$medio = $_POST['medio'];
$nombreDenunciante = $_POST['nombreDenunciante'];
$domicilioDenunciante = $_POST['domicilioDenunciante'];
$coloniaDenunciante = $_POST['coloniaDenunciante'];
$telefonoDenunciante = $_POST['telefonoDenunciante'];
$anonima = isset($_POST['anonima']) ? 1 : 0;
$razonSocial = $_POST['razonSocial'];
$nombreDenunciado = $_POST['nombreDenunciado'];
$domicilioDenunciado = $_POST['domicilioDenunciado'];
$coloniaDenunciado = $_POST['coloniaDenunciado'];
$telefonoDenunciado = $_POST['telefonoDenunciado'];
$entreCalles = $_POST['entreCalles'];
$infracciones = isset($_POST['infraccion']) ? implode(", ", $_POST['infraccion']) : "";

// Insertar los datos en la base de datos
$sql = "INSERT INTO denuncias (folio, fecha, estado, medio, nombreDenunciante, domicilioDenunciante, coloniaDenunciante, telefonoDenunciante, anonima, razonSocial, nombreDenunciado, domicilioDenunciado, coloniaDenunciado, telefonoDenunciado, entreCalles, infracciones)
VALUES ('$folio', '$fecha', '$estado', '$medio', '$nombreDenunciante', '$domicilioDenunciante', '$coloniaDenunciante', '$telefonoDenunciante', $anonima, '$razonSocial', '$nombreDenunciado', '$domicilioDenunciado', '$coloniaDenunciado', '$telefonoDenunciado', '$entreCalles', '$infracciones')";

if ($conn->query($sql) === TRUE) {

    $consulta = "SELECT * FROM denuncias ";
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
