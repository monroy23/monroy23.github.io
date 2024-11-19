<?php
include 'conexion.php'; 

// Recibir datos del formulario
$folio = $_POST['fl_folio'];
$fecha = $_POST['fecha'];
$estado = "Villahermosa, Tabasco";
$origen = $_POST['origen'];
$nombre_denunciante = $_POST['solicitante'];
$calle_denunciante = $_POST['calle'];
$numero_denunciante = $_POST['numero'];
$colonia_denunciante = $_POST['colonia'];
$telefono_denunciante = $_POST['telefono'];
$anonima = $_POST['anonima'];
$nombre_denunciado = $_POST['d_razon'];
$calle_denunciado = $_POST['d_calle2'];
$numero_denunciado = $_POST['d_numero'];
$colonia_denunciado = $_POST['d_colonia'];
$telefono_denunciado = $_POST['denunciado_telefono'];
$entre_calles = $_POST['entre_calles'];
$motivo = $_POST['motivo'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO denuncias (folio, fecha, estado, origen, nombre_denunciante, calle_denunciante, numero_denunciante, colonia_denunciante, telefono_denunciante, anonima, nombre_denunciado, calle_denunciado, numero_denunciado, colonia_denunciado, telefono_denunciado, entre_calles, motivo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssssss", $folio, $fecha, $estado, $origen, $nombre_denunciante, $calle_denunciante, $numero_denunciante, $colonia_denunciante, $telefono_denunciante, $anonima, $nombre_denunciado, $calle_denunciado, $numero_denunciado, $colonia_denunciado, $telefono_denunciado, $entre_calles, $motivo);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nueva denuncia registrada correctamente.";
} else {
    echo "Algo Hiciste mal bb: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
