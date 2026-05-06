<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Noticias - TechSolutions</title>
  <link rel="stylesheet" href="noticia.css">
   <link rel="stylesheet" href="Barra.css">
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



  <div class="container" role="main">
    <h1 class="section-title">Noticias de Sector Tecnológico</h1>

    <div class="news-list">
      <article class="news-card" aria-labelledby="n1">
        <div class="news-left">
          <h2 id="n1" class="news-title">Primera edición de la revista ABB</h2>
          <div class="news-meta">05 de mayo, 2025 — Revista técnica corporativa ABB</div>
          <p class="news-excerpt">Revista técnica corporativa ABB</p>
        </div>
        <div class="news-actions">
          <a class="view-link" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2FFITMALatam%2F&psig=AOvVaw0vgw29uUY6Wbq76Gh4ZnhM&ust=1758239580705000&source=images&cd=vfe&opi=89978449&ved=0CBQQjhxqFwoTCLCvqYP_4I8DFQAAAAAdAAAAABAE" target="blank">Ver artículo</a>
        </div>
      </article>

      <article class="news-card" aria-labelledby="n2">
        <div class="news-left">
          <h2 id="n2" class="news-title">La FTC investiga chatbots de IA "acompañantes"</h2>
          <div class="news-meta">11 de septiembre, 2025</div>
          <p class="news-excerpt">"Chatgpt" ayuda a niño a escribir nota de suicidio</p>
        </div>
        <div class="news-actions">
          <a class="view-link" href="https://cnnespanol.cnn.com/2025/09/11/ciencia/ftc-investiga-chatbots-posibles-danos-ninos-trax" target="blank">Ver artículo</a>
        </div>
      </article>

      <article class="news-card" aria-labelledby="n3">
        <div class="news-left">
          <h2 id="n3" class="news-title">Así luce el nuevo iPhone 17 y las novedades del Apple Watch y los AirPods</h2>
          <div class="news-meta">09 de septiembre, 2025</div>
          <p class="news-excerpt">Apple presentó su nueva generación de dispositivos</p>
        </div>
        <div class="news-actions">
          <a class="view-link" href="https://www.apple.com/mx/apple-events" target="blank">Ver artículo</a>
        </div>
      </article>

      <article class="news-card" aria-labelledby="n4">
        <div class="news-left">
          <h2 id="n4" class="news-title">Así se ve la función de traducción en vivo de los nuevos AirPods Pro 3</h2>
          <div class="news-meta">09 de septiembre, 2025</div>
          <p class="news-excerpt">Apple presentó su nueva función de traducción de idiomas en vivo</p>
        </div>
        <div class="news-actions">
          <a class="view-link" href="https://www.apple.com/mx/airpods-pro" target="blank">Ver artículo</a>
        </div>
      </article>
    </div>
  </div>

   <footer>
            <p><a href="Contactos.php">Contacto</a></p>
            <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>