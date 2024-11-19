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

// Obtener datos del formulario e insertarlos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $folio = $_POST['folio'];
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

    $sql = "INSERT INTO denuncias (folio, fecha, estado, medio, nombreDenunciante, domicilioDenunciante, coloniaDenunciante, telefonoDenunciante, anonima, razonSocial, nombreDenunciado, domicilioDenunciado, coloniaDenunciado, telefonoDenunciado, entreCalles, infracciones)
            VALUES ('$folio', '$fecha', '$estado', '$medio', '$nombreDenunciante', '$domicilioDenunciante', '$coloniaDenunciante', '$telefonoDenunciante', $anonima, '$razonSocial', '$nombreDenunciado', '$domicilioDenunciado', '$coloniaDenunciado', '$telefonoDenunciado', '$entreCalles', '$infracciones')";

    if ($conn->query($sql) === TRUE) {
        echo "La denuncia se ha guardado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Recuperar datos para mostrar en la tabla
try {
    $conexion = new PDO("mysql:host=localhost;dbname=dbciudadanas", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conexion->prepare("SELECT * FROM denuncias");
    $statement->execute();
    $denuncias = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Denuncias</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

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
<h2 style="text-align: center;">Denuncia ciudadana</h2>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Medio de denuncia</th>
                <th>Nombre Denunciante</th>
                <th>Domicilio Denunciante</th>
                <th>Teléfono Denunciante</th>
                <th>Denuncia Anónima</th>
                <th>Nombre Denunciado</th>
                <th>Domicilio Denunciado</th>
                <th>Razón Social</th>
                <th>Infracciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($denuncias as $denuncia): ?>
                <tr>
                    <td><?php echo htmlspecialchars($denuncia['folio']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['fecha']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['estado']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['medio']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['nombreDenunciante']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['domicilioDenunciante']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['telefonoDenunciante']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['anonima']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['nombreDenunciado']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['domicilioDenunciado']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['razonSocial']); ?></td>
                    <td><?php echo htmlspecialchars($denuncia['infracciones']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Botón Regresar debajo de la tabla -->
    <div style="text-align: center; margin-top: 20px;">
    <form action="menu.php" method="get">
        
    </form>
</div>


</body>
</html>




