<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú</title>
  <style>
    /* Estilo para el fondo y cuerpo de la página */
    body {
      align-items: center;
      margin: 2;
      padding: 2;
      font-family: Arial, sans-serif;
      background-image: url('Diana.jpg'); /* Ruta de la imagen de fondo */
      background-size: cover; /* Ajusta la imagen al tamaño de la pantalla */
      background-position: center; /* Centra la imagen */
      background-repeat: no-repeat; /* Evita que se repita */
    }

    /* Estilo del encabezado */
    .header {
      display: flex;
      align-items: center;
      gap: 450px; /* Espacio entre la imagen y el título */
    }
    .header-image {
      height: 100px; /* Tamaño de la imagen */
    }
    .header-title {
      color: #f9f9f9 ;
      background: #;
      font-family: 'Bahnschrift Condensed', Arial, sans-serif;
      text-align: left;
    }

    /* Estilo del menú */
    nav {
      background: #831919;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      display: inline-block;
    }
    nav a:hover {
      background: #575757;
    }
    .user-profile {
      display: flex;
      align-items: center;
    }
    .user-profile img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }
    .user-profile span {
      color: white;
      font-size: 16px;
      margin-right: 15px;
    }
    .logout-button {
      background-color: #f44336;
      color: white;
      border: none;
      padding: 5px 10px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
    }
    .logout-button:hover {
      background-color: #d32f2f;
    }

    /* Estilo del carrusel */
    .carousel {
      position: relative;
      max-width: 800px;
      margin: 50px auto;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .slides img {
      width: 100%;
      display: none;
    }
    .slides img.active {
      display: block;
    }
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 24px;
      border: none;
      background-color: rgba(0, 0, 0, 0.5);
      user-select: none;
      border-radius: 3px;
    }
    .prev {
      left: 10px;
    }
    .next {
      right: 10px;
    }
    .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
  </style>
</head>
<body>
  <!-- Encabezado -->
  <div class="header">
    <img src="logo2024.png" alt="Logo Izquierda" class="header-image">
    <h1 class="header-title">
      H. Ayuntamiento Constitucional de Centro 
      <center>2024 – 2027</center>
    </h1>
  </div>

  <!-- PHP para verificar la sesión -->
  <?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
      header("Location: login.php");
      exit;
  }
  $nombreUsuario = $_SESSION['nombre'];
  ?>

  <!-- Menú de navegación -->
  <nav>
    <div>
      <a href="denuncia_ciudadana.html">Registro De Denuncia</a>
      <a href="acta.html">Registro De Acta</a>
      <a href="guardar_denuncias.php">Denuncia</a>
      <a href="guardar_acta.php">Actas</a>
      <a href="/denuncia/diligencia/acta_diligencia.html">Acta de Diligencia</a>
    </div>
    <div class="user-profile">
      <img src="usuario.jpg" alt="Perfil del usuario">
      <span id="user-info"><?php echo htmlspecialchars($nombreUsuario); ?></span>
      <img src="imagen/salir.png" alt="Salir" onclick="irAlInicio()">
    </div>
  </nav>

  <!-- Carrusel de imágenes -->
  <div class="carousel">
    <div class="slides">
      <img src="imagen/Palacio.jpg" class="active" alt="Imagen 1">
      <img src="imagen/municipal.jpeg" alt="Imagen 2">
      <img src="imagen/Monumentos.jpg" alt="Imagen 3">
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </div>

  <!-- Script para el funcionamiento del carrusel -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const slides = document.querySelectorAll(".slides img");
      let currentSlide = 0;

      function showNextSlide() {
        slides[currentSlide].classList.remove("active");
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add("active");
      }

      function showPrevSlide() {
        slides[currentSlide].classList.remove("active");
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        slides[currentSlide].classList.add("active");
      }

      document.querySelector(".next").addEventListener("click", showNextSlide);
      document.querySelector(".prev").addEventListener("click", showPrevSlide);

      setInterval(showNextSlide, 5000); // Cambiar automáticamente cada 5 segundos
    });

    // Mostrar la fecha de inicio de sesión
    const fechaInicio = new Date();
    const opcionesFormato = {
      year: 'numeric',
      month: 'long',
      day: 'numeric',
    };
    const fechaFormateada = fechaInicio.toLocaleDateString('es-ES', opcionesFormato);
    document.getElementById("user-info").textContent += ` (${fechaFormateada})`;

    // Función para salir
    function irAlInicio() {
      const confirmar = confirm("¿Quieres salir del sitio web?");
      if (confirmar) {
        window.location.href = "/denuncia/inicio/login.php";
      }
    }
  </script>
</body>
</html>
