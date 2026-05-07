<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Galeria de Proyectos</title>
        <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/Galeria.css?v=<?php echo time(); ?>">
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
        <h2>Consultoría en Transformación Digital para EduSmart</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/edusmart.png" alt="Logo EduSmart" >
          <div class="texto-proyecto">
            <p>
              Asesoramos a EduSmart, institución educativa, en la implementación de herramientas digitales.El proyecto incluyo migración a plataformas en la nube, optimización de procesos internos y capacitación tecnológica para su personal.
            </p>
            <p>
              TechSolutions brindo asesoría estratégica para la transformación digital de EduSmart, con el fin de modernizar sus procesos académicos y administrativos. el proyecto incluyo:
            </p>
            <ul>
              <li>📂 Migración a la nube para gestión de estudiantes y docentes.</li>
              <li>🖥 Optimización de plataformas de aprendizaje en línea.</li>
              <li>📑 Digitalización de procesos internos, eliminando tramites en papel.</li>
              <li>🚀 Capacitación tecnológica para el personal académico y admirativo.</li>
            </ul>
            <p>
              Resultado: EduSmart mejoró la experiencia de estudiantes y consolidó su presencia como institución innovadora.
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
                <img src="../assets/img/proyectos/edusmart1.jpg" alt="EduSmart Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/edusmart2.png" alt="EduSmart Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/edusmart3.jpg" alt="EduSmart Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/edusmart4.jpg" alt="EduSmart Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/edusmart5.jpeg" alt="EduSmart Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/edusmart6.webp" alt="EduSmart Img3">
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
        <h2>Mantenimiento Proactivo para OfficeNet</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/officenet.jpeg" alt="Logo OficceNet">
          <div class="texto-proyecto">
            <p>
              Creamos un plan de soporte técnico integral para la empresa OfficeNet, garantizando continuidad en sus operaciones.El proyecto incluyó:
            </p>
            <ul>
              <li>📂 Monitoreo constante de servidores y estaciones de trabajo.</li>
              <li>🖥 Mantenimiento preventivo mensual de hardware.</li>
              <li>📑 Soporte remoto y presencial para resolución inmediata de fallas.</li>
              <li>🚀 Optimización de licencias de software y actualizaciones.</li>
            </ul>
            <p>
              Resultado: OfficeNet disminuyó en un 50% los tiempos de inactividad y mejoró la productividad de sus empleados.
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
                <img src="../assets/img/proyectos/officenet1.jpg" alt="OficceNet Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/officenet2.jpg" alt="OficceNet Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/officenet3.jpg" alt="OficceNet Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/officenet4.webp" alt="OficceNet Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/officenet5.jpg" alt="OficceNet Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/officenet6.webp" alt="OficceNet Img6">
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
        <h2>Servicio de Soporte 24/7 para RetailMax</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/retailmax.png" alt="Logo RetailMax">
          <div class="texto-proyecto">
            <p>
              Implementamos un centro de soporte continuo para RetailMax, asegurando la operatividad de su red de tiendas.El proyecto incluyó:
            </p>
            <ul>
              <li>📂 Mesa de ayuda con atención multicanal.</li>
              <li>🖥 Monitoreo en la nube con alertas automatizadas.</li>
              <li>📑 Respuesta rápida ante incidencias críticas.</li>
              <li>🚀 Documentación y seguimiento de cada solicitud de soporte.</li>
            </ul>
            <p>
              Resultado: RetailMax alcanzó un 99.8% de disponibilidad en sus sistemas, reduciendo pérdidas por interrupciones técnicas.
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
                <img src="../assets/img/proyectos/retailmax1.jpg" alt="RetailMax Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/retailmax2.png" alt="RetailMax Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/retailmax3.jpg" alt="RetailMax Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/retailmax4.jpg" alt="RetailMax Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/retailmax5.jpg" alt="RetailMax Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/retailmax6.webp" alt="RetailMax Img6">
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
<script src="../assets/js/Galeria.js"></script>
</html>