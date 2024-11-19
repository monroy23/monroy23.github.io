
<?php
// Incluir la conexión a la base de datos
include('conexion_diligencia.php');

// Validar que la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibir y sanitizar los datos del formulario
$hora_final = isset($_POST['hora_final']) ? $_POST['hora_final'] : '';
$dia_final = isset($_POST['dia_final']) ? (int)$_POST['dia_final'] : 0;
$mes_final = isset($_POST['mes_final']) ? (int)$_POST['mes_final'] : 0;
$anio_final = isset($_POST['anio_final']) ? (int)$_POST['anio_final'] : 0;
$fojas_final = isset($_POST['fojas_final']) ? (int)$_POST['fojas_final'] : 0;
$nombre_final = isset($_POST['nombre_final']) ? $_POST['nombre_final'] : '';
$nombre_inspector = isset($_POST['nombre_inspector']) ? $_POST['nombre_inspector'] : '';
$nombre_visitado = isset($_POST['nombre_visitado']) ? $_POST['nombre_visitado'] : '';
$nombre_testigo1 = isset($_POST['nombre_testigo1']) ? $_POST['nombre_testigo1'] : '';
$nombre_testigo2 = isset($_POST['nombre_testigo2']) ? $_POST['nombre_testigo2'] : '';
$opcion1 = isset($_POST['opcion1']) ? 1 : 0;
$opcion2 = isset($_POST['opcion2']) ? 1 : 0;
$opcion3 = isset($_POST['opcion3']) ? 1 : 0;
$comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';

// Preparar la consulta SQL con prepared statements
$sql = "INSERT INTO diligencias 
    (hora_final, dia_final, mes_final, anio_final, fojas_final, nombre_final, nombre_inspector, nombre_visitado, nombre_testigo1, nombre_testigo2, opcion1, opcion2, opcion3, comentarios)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar la sentencia
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error en la preparación: " . $conn->error);
}

// Ligar los parámetros con los valores
$stmt->bind_param(
    "siiissssssiiis", 
    $hora_final, 
    $dia_final, 
    $mes_final, 
    $anio_final, 
    $fojas_final, 
    $nombre_final, 
    $nombre_inspector, 
    $nombre_visitado, 
    $nombre_testigo1, 
    $nombre_testigo2, 
    $opcion1, 
    $opcion2, 
    $opcion3, 
    $comentarios
);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Reporte guardado con éxito";
} else {
    echo "Error al guardar el reporte: " . $stmt->error;
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conn->close();
?>
