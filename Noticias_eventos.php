<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos Tecnológicos - TechSolutions</title>
  <link rel="stylesheet" href="Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="eventostec.css?v=<?php echo time(); ?>">
  <link rel="icon" href="Imagenes/log.png" type="image/x-icon">
</head>
<body>
<header>
        <nav id="barra-principal">
            <div class="logo"><img src="Imagenes/logotipo_barra.png" width="400px" onclick="location.href='Pagina_principal.php'"></div>
            <div class="barra-nav">
                <div class="barra-busqueda">
                    <input id="busqueda" name="busqueda" type="text" placeholder="Buscar en toda la tienda">
                    <button type="submit"><img src="Imagenes/busqueda.png" width="20px"></button>
                </div>
            </div>
            <div class="inicio-s">
                <img src="Imagenes/icono.png" width="50px" onclick="location.href='Inicio_sesion.php'">
            </div>
        </nav>
        <div class="menu">
            <ul>
                <li><a href="Servicios.php">Servicios</a></li>
                <li><a href="Catalogo_Tienda.php">Tienda en Línea</a></li>
                <li><a href="Blog.php">Blog de Novedades</a></li>
                <li class="dropdown">
                    <a href="Galeria.php">Galería de Proyectos</a>
                    <ul class="submenu">
                        <li><a href="Galeria_desarrollo.php">Desarrollo Web</a></li>
                        <li><a href="Galeria_aplicaciones.php">Aplicaciones Móviles</a></li>
                        <li><a href="Galeria_ciberseguridad.php">CiberSeguridad</a></li>
                        <li><a href="Galeria_soporte.php">Soporte Técnico y Mantenimiento</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="Noticias.php">Noticias del Sector</a>
                    <ul class="submenu">
                        <li><a href="Noticias_eventos.php">Eventos Tecnológicos</a></li>
                        <li><a href="Noticias.php">Noticias del Sector Tecnológico</a></li>
                    </ul>
                </li>
                <li><a href="Contactos.php">Contacto</a></li>
            </ul>
        </div>
    </header>



  <section class="eventos">
    <h2>Eventos Tecnológicos</h2>


   <!-- SLIDER -->
  <div class="slider-container">
        <button class="slider-button prev" aria-label="Anterior">&#10094;</button>
        <div class="slider-content">
            <div class="slider-item active">
                <a href="https://www.eventbrite.com.mx/e/curso-de-robotica-con-mbot-aprende-a-programar-y-divertirte-desde-cero-tickets-1704206941839?aff=ebdssbcategorybrowse" target="blank"><img src="Imagenes/evento1.jpeg" width="1000"></a>
            </div>
            <div class="slider-item">
                <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2FFITMALatam%2F&psig=AOvVaw0vgw29uUY6Wbq76Gh4ZnhM&ust=1758239580705000&source=images&cd=vfe&opi=89978449&ved=0CBQQjhxqFwoTCLCvqYP_4I8DFQAAAAAdAAAAABAE" target="blank"><img src="Imagenes/evento4.jpg" width="1000"></a>
            </div>
            <div class="slider-item">
                <a href="https://www.eventbrite.com.mx/e/leon-cybersecurity-conference-tickets-1493440303149?aff=ebdssbcategorybrowse" target="blank"><img src="Imagenes/evento3.jpeg" width="1000"></a>
            </div>
        </div>
        <button class="slider-button next" aria-label="Siguiente">&#10095;</button>
        <div class="slider-dots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>

    <h3>Eventos Próximos</h3>

    <div class="evento-card">
      <div class="evento-info">
        <h4>2do Congreso de Innovación Aeroespacial</h4>
        <p>Miércoles 1 de octubre, 2025 &nbsp;&nbsp; 20:00 hrs</p>
        <p>Universidad Aeronáutica de Querétaro</p>
      </div>
      <a href="Evento_detalles.php" class="btn-detalles">Más detalles</a>
    </div>

    <div class="evento-card">
      <div class="evento-info">
        <h4>CONQ 2025 para Mentes Brillantes</h4>
        <p>Miércoles 22 de octubre, 2025 &nbsp;&nbsp; 17:30 hrs</p>
        <p>Comunidad Saltillo</p>
      </div>
      <a href="#" class="btn-detalles">Más detalles</a>
    </div>
  </section>

  <footer>
            <p><a href="Contactos.php">Contacto</a></p>
            <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
        </footer>
    </body>
    <script src="Noticias_eventos.js"></script>
</html>