<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Galeria de Proyectos</title>
        <link rel="stylesheet" href="Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="Galeria.css?v=<?php echo time(); ?>">
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
    <main>

<div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front proyecto">
        <h2>Rediseño Web Corporativo para GreenTech</h2>
        <div class="contenido-proyecto">
          <img src="Imagenes/proyectos/greentech.jpg" alt="Logo GreenTech">
          <div class="texto-proyecto">
            <p>
              Renovamos el portal corporativo de GreenTech, mejorando su presencia digital y adaptando la experiencia de usuario.El proyecto incluyó:
            </p>
            <ul>
              <li>📂 Implementación de diseño moderno con enfoque UX/UI.</li>
              <li>🖥 Integración de chat en línea para atención inmediata</li>
              <li>📑 Sistema CMS para que el cliente pueda actualizar contenido fácilmente.</li>
              <li>🚀 Cumplimiento con estándares de accesibilidad web (WCAG).</li>
            </ul>
            <p>
              Resultado: GreenTech aumentó en un 40% la interacción de usuarios y captación de clientes potenciales.
            </p>
            <a href="#" class="link-galeria">Ver galería de imágenes</a>
          </div>
        </div>
      </div>

      <div class="flip-card-back galeria">
        <h3>Galería de Imágenes</h3>
        <div class="inner-flip-gallery">
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/greentech1.jpg" alt="GreenTech Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/greentech2.webp" alt="GreenTech Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/greentech3.webp" alt="GreenTech Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/greentech4.png" alt="GreenTech Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/greentech5.jpg" alt="GreenTech Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/greentech6.png" alt="GreenTech Img6">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="link-volver">← Volver</a>
      </div>
    </div>
</div>


<div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front proyecto">
        <h2>Plataforma de Comercio Electrónico para MarketHub</h2>
        <div class="contenido-proyecto">
          <img src="Imagenes/proyectos/markethub.png" alt="Logo MarketHub">
          <div class="texto-proyecto">
            <p>
              Desarrollamos un sitio de comercio electrónico totalmente personalizado para MarketHub, con diseño responsivo y sistema de pagos seguro.El proyecto incluyó:
            </p>
            <ul>
              <li>📂 Integración de pasarela de pago con soporte para múltiples divisas.</li>
              <li>🖥 Carrito de compras dinámico y gestión de inventario en tiempo real.</li>
              <li>📑 Optimización SEO y carga rápida para mejorar posicionamiento en buscadores.</li>
              <li>🚀 Dashboard de administración intuitivo para el control de ventas.</li>
            </ul>
            <p>
              Resultado: MarketHub incrementó sus ventas en línea en un 70% durante los primeros seis meses de operación.
            </p>
            <a href="#" class="link-galeria">Ver galería de imágenes</a>
          </div>
        </div>
      </div>

      <div class="flip-card-back galeria">
        <h3>Galería de Imágenes</h3>
        <div class="inner-flip-gallery">
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/markethub1.jpg" alt="Markethub Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/markethub2.jpg" alt="Markethub Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/markethub3.webp" alt="Markethub Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/markethub4.png" alt="Markethub Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/markethub5.webp" alt="Markethub Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/markethub6.png" alt="Markethub Img6">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="link-volver">← Volver</a>
      </div>
    </div>
</div>


    </div>
  </div>
</main>


</body>
<script src="Galeria.js"></script>
</html>