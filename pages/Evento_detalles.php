<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle del Evento - TechSolutions</title>
  <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/styles.css?v=<?php echo time(); ?>">
  <link rel="icon" href="../assets/img/log.png" type="image/x-icon">
  
  
</head>
<body>
  <header>
        <nav id="barra-principal">
            <div class="logo"><img src="../assets/img/logotipo_barra.png" width="400px" onclick="location.href='index.php'"></div>
            <div class="barra-nav">
                <div class="barra-busqueda">
                    <input id="busqueda" name="busqueda" type="text" placeholder="Buscar en toda la tienda">
                    <button type="submit"><img src="../assets/img/busqueda.png" width="20px"></button>
                </div>
            </div>
            <div class="inicio-s">
                <img src="../assets/img/icono.png" width="50px" onclick="location.href='Inicio_sesion.php'">
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
                    </ul>
                </li>
                <li><a href="Contactos.php">Contacto</a></li>
            </ul>
        </div>
    </header>



  <section class="evento-detalle">
    <h2>Eventos Tecnológicos</h2>


    <div class="banner-evento">
      <img src="../assets/img/congreso-aeroespacial.jpg" alt="2do Congreso de Innovación Aeroespacial">
    </div>


    <article class="evento-info">
      <p class="fecha">Miércoles 1 de octubre, 2025</p>
      <h3>2do Congreso de Innovación Aeroespacial</h3>
      <p class="autor">Por Universidad Aeronáutica en Querétaro</p>

      <p class="descripcion">
        ¡Bienvenidos a un evento donde la creatividad, el conocimiento y la tecnología toman vuelo!
      </p>

      <h4>Fecha y Hora</h4>
      <p>📅mié, 1 oct 2025 08:00 – vie, 3 oct 2025 18:00 CDT. Las puertas se abren a las 7:30am</p>

      <h4>Ubicación</h4>
      <p>
        📍Universidad Aeronáutica en Querétaro <br>
        22154 Carretera Querétaro-Tequisquiapan Colón, QUE 76278 <br>
        
      </p>

      <div class="evento-highlights">
        <ul>
         <li> HIGHLIGHTS </li>        
         <li>👥 TODAS LAS EDADES</li>
          <li>🏛️ In person</li>
          <li>🅿️ Free venue parking</li>
          <li>⏰ Puertas a las 07:30</li>
        </ul>
      </div>

      <p class="boletos">
        Compra tus boletos <a href="https://www.eventbrite.com.mx/e/2do-congreso-internacional-de-innovacion-aeroespacial-tickets-1281101372499" target="blank">aquí</a>
      </p>
    </article>
  </section>
  <footer>
            <p><a href="Contactos.php">Contacto</a></p>
            <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>

