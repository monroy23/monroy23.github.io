<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "localhost"; // Cambiar si es necesario
$username = "root"; // Cambiar si es necesario
$password = ""; // Cambiar si es necesario
$dbname = "denuncia_ciudadana"; // Cambiar si es necesario

// Crear conexión
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (mysqli_sql_exception $e) {
    die("Conexión fallida: " . $e->getMessage());
}

// Capturar datos del formulario
$folio = $_POST['folio'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$origen = $_POST['medio']; // Asumimos que "medio" es el origen
$nombreDenunciante = $_POST['nombreDenunciante'];
$calleDenunciante = $_POST['domicilioDenunciante']; // Cambié a "calle_denunciante"
$numeroDenunciante = $_POST['numeroDenunciante'] ?? ''; // Agregar campo de número si es necesario
$coloniaDenunciante = $_POST['coloniaDenunciante'];
$telefonoDenunciante = $_POST['telefonoDenunciante'];
$anonima = isset($_POST['anonima']) ? 'SI' : 'NO'; // Cambiar a 'SI' o 'NO'
$nombreDenunciado = $_POST['nombreDenunciado'];
$calleDenunciado = $_POST['domicilioDenunciado']; // Cambié a "calle_denunciado"
$numeroDenunciado = $_POST['numeroDenunciado'] ?? ''; // Agregar campo de número si es necesario
$coloniaDenunciado = $_POST['coloniaDenunciado'];
$telefonoDenunciado = $_POST['telefonoDenunciado'];
$entreCalles = $_POST['entreCalles'];
$motivo = $_POST['motivo'] ?? ''; // Asumimos que agregarás un campo para el motivo

// Ejemplo de inserción de datos
try {
    $sql = "INSERT INTO denuncias (folio, fecha, estado, origen, nombre_denunciante, calle_denunciante, numero_denunciante, colonia_denunciante, telefono_denunciante, anonima, nombre_denunciado, calle_denunciado, numero_denunciado, colonia_denunciado, telefono_denunciado, entre_calles, motivo) 
    VALUES ('$folio', '$fecha', '$estado', '$origen', '$nombreDenunciante', '$calleDenunciante', '$numeroDenunciante', '$coloniaDenunciante', '$telefonoDenunciante', '$anonima', '$nombreDenunciado', '$calleDenunciado', '$numeroDenunciado', '$coloniaDenunciado', '$telefonoDenunciado', '$entreCalles', '$motivo')";

    $conn->query($sql);
    echo "Nueva denuncia registrada correctamente";
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
