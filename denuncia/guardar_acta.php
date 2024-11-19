
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Denuncia Ciudadana</title>
  <style>
    .header {
      display: flex;
      align-items: center; /* Centra verticalmente los elementos */
      gap: 350px; /* Espacio entre la imagen y el título */
    }
    .header-image {
      height: 100px; /* Ajusta el tamaño de la imagen según necesites */
    }
    .header-title {
      font-family: 'Bahnschrift Condensed', Arial, sans-serif;
      text-align: left; /* Alinea el texto a la izquierda */
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="logo2024.png" alt="Logo Izquierda" class="header-image">
    <h1 class="header-title">
      H. Ayuntamiento Constitucional de Centro 
      <center>2024 – 2027</ceneter>
    </h1>
  </div>
</body>
</html>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        /* Estilos para la barra de navegación */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #831919;
            padding: 10px;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            padding: 2;
            background-color: #2690e7;
            position: absolute;
            top: 177px;
            left: 0;
            width: auto;
            height: 0;
            overflow: hidden;
            transition: height 0.3s ease-out;
        }

        .nav-links.show {
            height: auto;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav a:hover {
            background: #575757;
        }

        /* Menú Hamburguesa */
        .menu-icon {
            display: block;
            width: 30px;
            height: 25px;
            position: relative;
            cursor: pointer;
        }

        .menu-icon div {
    background-color: rgb(255, 255, 255);
    height: 12px; /* Grosor de la línea */
    width: 150%; /* Aumenta la longitud de la línea */
    position: absolute;
    left: 95%; /* Centra la línea extendida */
    border: 2px solid rgb(3, 82, 210);
    transition: 0.1s;




        }

        .menu-icon div:nth-child(1) { top: 0; }
        .menu-icon div:nth-child(2) { top: 10px; }
        .menu-icon div:nth-child(3) { top: 20px; }

        /* Menú Abierto */
        .menu-icon.open div:nth-child(1) { top: 8px; }
        .menu-icon.open div:nth-child(2) { opacity: 0; }
        .menu-icon.open div:nth-child(3) { top: 16px; }

        /* Estilos para la imagen de perfil y usuario */
        .user-profile {
            display: flex;
            align-items: center;
            color: #fff;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Encabezado y formulario */
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        header img { width: 100px; height: auto; }

        header h1 {
            font-size: 1.5rem;
            color: #ffffff;
            margin-left: 10px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Botones */
        .btn-success, .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(56, 11, 11, 0.1);
        }

        .btn-success:hover, .btn-primary:hover {
            background-color: #006400;
            border-color: #0056b3;
            color: white;
        }

        .text-center { text-align: center; }
    </style>
</head!-- Sección: Infracciones -->
            </div>
<body>

<!-- Barra de Navegación -->
<nav>
    
  
    <!-- Encabezado -->
<header>
</header>

    <div class="nav-links" id="nav-links">
        <a href="denuncia_ciudadana.html">Registro De Denuncia</a>
        <a href="acta.html">Registro De Acta</a>
        <a href="guardar_denuncias.php">Denuncias</a>
        <a href="guardar_acta.php">Actas</a>
        <a href="/denuncia/diligencia/acta_diligencia.html">Acta de Diligencia</a>
    </div>
    
        <div class="user-profile">
            <img src="casita_2.png" alt="Perfil del usuario" onclick="irAlInicio()">
        </div>
        <script>
            function irAlInicio() {
                const confirmar = confirm("¿Quieres ir al inicio?");
                if (confirmar) {
                    window.location.href = "/denuncia/menu.php"; // Redirige a la página de inicio
                }
            }
        </script>        

    </div>
</nav>

</style>
<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si se enviaron los datos mediante POST para insertar un nuevo registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $fechaInspeccion = $_POST['fechaInspeccion'];
    $numeroActa = $_POST['numeroActa'];
    $expedienteAdministrativo = $_POST['expedienteAdministrativo'];
    $clausura = $_POST['clausura'];
    $tipoContaminante = $_POST['tipoContaminante'];
    $comentariosClausula = $_POST['comentariosClausula'];
    $tipoSuspension = $_POST['tipoSuspension'];
    $suspension = $_POST['suspension'];
    $otrasActividades = $_POST['otrasActividades'];
    $comentariosSuspension = $_POST['comentariosSuspension'];
    $aseguramientoPrecautorio = $_POST['aseguramientoPrecautorio'];
    $comentariosAseguramiento = $_POST['comentariosAseguramiento'];
    $neutralizacion = $_POST['neutralizacion'];
    $comentariosNeutralizacion = $_POST['comentariosNeutralizacion'];
    $comentariosGenerales = $_POST['comentariosGenerales'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO actas (fechaInspeccion, numeroActa, expedienteAdministrativo, clausura, tipoContaminante, 
            comentariosClausula, tipoSuspension, suspension, otrasActividades, comentariosSuspension, 
            aseguramientoPrecautorio, comentariosAseguramiento, neutralizacion, comentariosNeutralizacion, 
            comentariosGenerales) 
            VALUES (:fechaInspeccion, :numeroActa, :expedienteAdministrativo, :clausura, :tipoContaminante, 
            :comentariosClausula, :tipoSuspension, :suspension, :otrasActividades, :comentariosSuspension, 
            :aseguramientoPrecautorio, :comentariosAseguramiento, :neutralizacion, :comentariosNeutralizacion, 
            :comentariosGenerales)";

    $stmt = $conn->prepare($sql);

    // Enlazar los valores con los parámetros en la consulta SQL
    $stmt->bindParam(':fechaInspeccion', $fechaInspeccion);
    $stmt->bindParam(':numeroActa', $numeroActa);
    $stmt->bindParam(':expedienteAdministrativo', $expedienteAdministrativo);
    $stmt->bindParam(':clausura', $clausura);
    $stmt->bindParam(':tipoContaminante', $tipoContaminante);
    $stmt->bindParam(':comentariosClausula', $comentariosClausula);
    $stmt->bindParam(':tipoSuspension', $tipoSuspension);
    $stmt->bindParam(':suspension', $suspension);
    $stmt->bindParam(':otrasActividades', $otrasActividades);
    $stmt->bindParam(':comentariosSuspension', $comentariosSuspension);
    $stmt->bindParam(':aseguramientoPrecautorio', $aseguramientoPrecautorio);
    $stmt->bindParam(':comentariosAseguramiento', $comentariosAseguramiento);
    $stmt->bindParam(':neutralizacion', $neutralizacion);
    $stmt->bindParam(':comentariosNeutralizacion', $comentariosNeutralizacion);
    $stmt->bindParam(':comentariosGenerales', $comentariosGenerales);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Acta guardada exitosamente.";
    } else {
        echo "Error al guardar el acta.";
    }
}

// Recuperar los datos para mostrar en la tabla
$stmt = $conn->query("SELECT * FROM actas");
$actas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" crossorigin="anonymous"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <style>

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
            });
        });
    </script>
</head>
<body>
<h2 style="text-align: center;">Actas Registradas</h2>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Número de Acta</th>
            <th>Expediente Administrativo</th>
            <th>Clausura</th>
            <th>Tipo de Contaminante</th>
            <th>Observaciones de Clausura</th>
            <th>Tipo de Suspensión</th>
            <th>Suspensión</th>
            <th>Observaciones de Suspensión</th>
            <th>Aseguramiento Precautorio</th>
            <th>Observaciones de Aseguramiento</th>
            <th>Neutralización</th>
            <th>Observaciones de Neutralización</th>
            <th>Comentarios Generales</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($actas as $acta): ?>
            <tr>
                <td><?php echo htmlspecialchars($acta['fechaInspeccion']); ?></td>
                <td><?php echo htmlspecialchars($acta['numeroActa']); ?></td>
                <td><?php echo htmlspecialchars($acta['expedienteAdministrativo']); ?></td>
                <td><?php echo htmlspecialchars($acta['clausura']); ?></td>
                <td><?php echo htmlspecialchars($acta['tipoContaminante']); ?></td>
                <td><?php echo htmlspecialchars($acta['comentariosClausula']); ?></td>
                <td><?php echo htmlspecialchars($acta['tipoSuspension']); ?></td>
                <td><?php echo htmlspecialchars($acta['suspension']); ?></td>
                <td><?php echo htmlspecialchars($acta['comentariosSuspension']); ?></td>
                <td><?php echo htmlspecialchars($acta['aseguramientoPrecautorio']); ?></td>
                <td><?php echo htmlspecialchars($acta['comentariosAseguramiento']); ?></td>
                <td><?php echo htmlspecialchars($acta['neutralizacion']); ?></td>
                <td><?php echo htmlspecialchars($acta['comentariosNeutralizacion']); ?></td>
                <td><?php echo htmlspecialchars($acta['comentariosGenerales']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div style="text-align: center; margin-top: 20px;">
    <form action="menu.php" method="get">
       
    </form>
</div>


</body>
</html>

