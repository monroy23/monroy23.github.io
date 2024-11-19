<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denuncia Ciudadana - Protección Ambiental</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Estilos para que el contenedor ocupe toda la pantalla */
        .container {
            max-width: 100%;
            padding: 0 10%;
            margin-top: 20px;
        }

        form {
            margin: 0 auto;
            max-width: 80%;
            background-color: #f7f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h3 {
            text-align: center;
            color: #0056b3;
            font-weight: bold;
        }

        .form-label {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .btn-success, .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-success:hover, .btn-primary:hover {
            background-color: #006400;
            border-color: #0056b3;
            color: white;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .header-container img {
            width: 100px;
            height: auto;
        }

        .header-container h1 {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="page-header">
        <div class="header-container">
            <img src="centro.jpg" alt="Logo Izquierda">
            <h1>DIRECCIÓN DE PROTECCIÓN AMBIENTAL Y DESARROLLO SUSTENTABLE</h1>
        </div>
    </header>

    <div class="container">
        <h1>Denuncia Ciudadana</h1>
        <form action="guardar_denuncias.php" method="POST">
            <!-- Sección: Datos de la Denuncia -->
            <h3>Datos de la Denuncia</h3>
            <div class="row mb-4">
                <div class="col-md-4">
                    <label for="folio" class="form-label">Folio</label>
                    <input type="text" id="folio" name="folio" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" id="estado" name="estado" class="form-control" value="Villahermosa, Tabasco" readonly>
                </div>
            </div>

            <div class="mb-4">
                <label for="medio" class="form-label">Medio de denuncia</label>
                <select id="medio" name="medio" class="form-select" required>
                    <option value="PERSONAL">Presencial</option>
                    <option value="RADIO">Presidencia</option>
                    <option value="TELEFONICA">Atención ciudadana</option>
                    <option value="PRENSA">Otros</option>
                </select>
            </div>

            <!-- Sección: Datos del Denunciante -->
            <h3>Datos del Denunciante</h3>
            <div class="mb-4">
                <label for="nombreDenunciante" class="form-label">Nombre Completo</label>
                <input type="text" id="nombreDenunciante" name="nombreDenunciante" class="form-control">
            </div>
            <div class="mb-4">
                <label for="domicilioDenunciante" class="form-label">Domicilio y Calle</label>
                <input type="text" id="domicilioDenunciante" name="domicilioDenunciante" class="form-control">
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <label for="coloniaDenunciante" class="form-label">Colonia</label>
                    <input type="text" id="coloniaDenunciante" name="coloniaDenunciante" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="telefonoDenunciante" class="form-label">Teléfono</label>
                    <input type="tel" id="telefonoDenunciante" name="telefonoDenunciante" class="form-control">
                </div>
            </div>
            <div class="mb-4">
                <label for="anonima" class="form-label">Denuncia Anónima</label>
                <input type="checkbox" id="anonima" name="anonima">
            </div>

            <!-- Sección: Datos del Denunciado -->
            <h3>Datos del Denunciado</h3>
            <div class="mb-4">
                <label for="razonSocial" class="form-label">Razón Social</label>
                <input type="text" id="razonSocial" name="razonSocial" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="nombreDenunciado" class="form-label">Nombre del Denunciado o Dueño</label>
                <input type="text" id="nombreDenunciado" name="nombreDenunciado" class="form-control">
            </div>
            <div class="mb-4">
                <label for="domicilioDenunciado" class="form-label">Domicilio y Calle</label>
                <input type="text" id="domicilioDenunciado" name="domicilioDenunciado" class="form-control">
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <label for="coloniaDenunciado" class="form-label">Colonia</label>
                    <input type="text" id="coloniaDenunciado" name="coloniaDenunciado" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="telefonoDenunciado" class="form-label">Teléfono</label>
                    <input type="tel" id="telefonoDenunciado" name="telefonoDenunciado" class="form-control">
                </div>
            </div>

            <div class="mb-4">
                <label for="entreCalles" class="form-label">Entre las Calles</label>
                <input type="text" id="entreCalles" name="entreCalles" class="form-control">
            </div>

            <!-- Sección: Infracciones -->
            <h3>Infracciones</h3>
            <div class="mb-4">
                <label><input type="checkbox" name="infraccion[]" value="DESCARGA DE AGUAS RESIDUALES"> Descarga de Aguas Residuales</label><br>
                <label><input type="checkbox" name="infraccion[]" value="EMISION DE RUIDO"> Emisión de Ruido</label><br>
                <label><input type="checkbox" name="infraccion[]" value="RESIDUOS SOLIDOS URBANOS"> Residuos Sólidos Urbanos</label><br>
                <label><input type="checkbox" name="infraccion[]" value="TALA O DERRIBO DE ARBOL"> Tala o Derribo de Árbol</label><br>
                <label><input type="checkbox" name="infraccion[]" value="EMISION DE FUENTES FIJAS"> Emisión de Fuentes Fijas (humo y/o partículas)</label>
            </div>

            <!-- Botón de Enviar -->
            <div class="text-center mb-3">
                <input type="submit" class="btn btn-success" value="Enviar Denuncia">
            </div>
        </form>
        <div class="text-center">
            <a href="menu.php" class="btn btn-primary">Regresar al menú</a>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
