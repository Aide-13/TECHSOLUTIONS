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
                    </ul>
                </li>
                <li><a href="Contacto.php">Contacto</a></li>
            </ul>
        </div>
    </header>
    <main>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front proyecto">
        <h2>Consultoría en Transformación Digital para EduSmart</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/edusmart.png" alt="Logo EduSmart" >
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
        <h2>Consultoría en CiberSeguridad para FinanCorp</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/financorp.png" alt="Logo FinanCorp">
          <div class="texto-proyecto">
            <p>
              Implementamos una solución integral de ciberseguridad para FinanCorp, reforzando la protección de datos y redes. El proyecto incluyó monitoreo en tiempo real, encriptación avanzada y protocolos de respaldo seguro.
            </p>
            <p>
              TechSolutions implementó una solución integral de ciberseguridad orientada proteger la información sensible de clientes y transacciones bancarias. El sistema incluyo:
            </p>
            <ul>
              <li>📂 Monitoreo en tiempo real de servidores y redes.</li>
              <li>🖥 Dashboard centralizado para alertas de seguridad.</li>
              <li>📑 Protocolos de respaldo automático y recuperación ante desastres.</li>
              <li>🚀 Cifrado avanzado de datos y control de accesos basados en roles.</li>
            </ul>
            <p>
              Resultado: FinanCorp redijo en un 60% las vulnerabilidades detectadas, mejoró su tiempo de respuesta ante incidentes y fortaleció la confianza de sus clientes.
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
                <img src="../assets/img/proyectos/financorp1.png" alt="FinanCorp Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/financorp2.webp" alt="Financorp Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/financorp3.jpg" alt="FinanCorp Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/financorp4.jpg" alt="FinanCorp Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/financorp5.jpg" alt="FinanCorp Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/financorp6.jpg" alt="FinanCorp Img6">
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
        <h2>Rediseño Web Corporativo para GreenTech</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/greentech.jpg" alt="Logo GreenTech">
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
                <img src="../assets/img/proyectos/greentech1.jpg" alt="GreenTech Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/greentech2.webp" alt="GreenTech Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/greentech3.webp" alt="GreenTech Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/greentech4.png" alt="GreenTech Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/greentech5.jpg" alt="GreenTech Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/greentech6.png" alt="GreenTech Img6">
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
        <h2>App de Delivery Inteligente para QuickEats</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/quickeats.webp" alt="Logo QuickEats">
          <div class="texto-proyecto">
            <p>
              Diseñamos e implementamos una aplicación móvil multiplataforma para gestionar pedidos y entregas de comida.El proyecto incluyó:
            </p>
            <ul>
              <li>📂 Seguimiento de pedidos en tiempo real con GPS.</li>
              <li>🖥 Integración con métodos de pago digitales.</li>
              <li>📑 Notificaciones push personalizadas para promociones.</li>
              <li>🚀 Panel de control para restaurantes y repartidores.</li>
            </ul>
            <p>
              Resultado: QuickEats incrementó en un 55% la fidelización de clientes gracias a la experiencia móvil.
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
                <img src="../assets/img/proyectos/quickeats1.png" alt="QuickEats Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/quickeats2.jpg" alt="QuickEats Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/quickeats3.jpeg" alt="QuickEats Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/quickeats4.webp" alt="QuickEats Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/quickeats5.png" alt="QuickEats Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/quickeats6.jpg" alt="QuickEats Img6">
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
        <h2>Aplicación de Salud Digital para VitalCare</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/vitalcare.webp" alt="Logo VitalCare">
          <div class="texto-proyecto">
            <p>
              Implementamos una solución integral de ciberseguridad para FinanCorp, reforzando la protección de datos y redes. El proyecto incluyó monitoreo en tiempo real, encriptación avanzada y protocolos de respaldo seguro.
            </p>
            <p>
              TechSolutions implementó una solución integral de ciberseguridad orientada proteger la información sensible de clientes y transacciones bancarias. El sistema incluyo:
            </p>
            <ul>
              <li>📂 Monitoreo en tiempo real de servidores y redes.</li>
              <li>🖥 Dashboard centralizado para alertas de seguridad.</li>
              <li>📑 Protocolos de respaldo automático y recuperación ante desastres.</li>
              <li>🚀 Cifrado avanzado de datos y control de accesos basados en roles.</li>
            </ul>
            <p>
              Resultado: FinanCorp redijo en un 60% las vulnerabilidades detectadas, mejoró su tiempo de respuesta ante incidentes y fortaleció la confianza de sus clientes.
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
                <img src="../assets/img/proyectos/vitalcare1.webp" alt="VitalCare Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/vitalcare2.jpg" alt="VitalCare Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/vitalcare3.jpg" alt="VitalCare Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/vitalcare4.jpg" alt="VitalCare Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/vitalcare5.png" alt="VitalCare Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/vitalcare6.jpg" alt="VitalCare Img6">
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
        <h2>Estrategia de Ciberdefensa para HealthSecure</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/healthsecure.jpg" alt="Logo HealthSecure">
          <div class="texto-proyecto">
            <p>
              Diseñamos un plan integral de seguridad para la red hospitalaria HealthSecure.El proyecto incluyó:
            </p>
            <ul>
              <li>📂 Análisis de riesgos en infraestructura médica crítica.</li>
              <li>🖥 Firewall de última generación con IDS/IPS.</li>
              <li>📑 Políticas de autenticación multifactor para usuarios internos.</li>
              <li>🚀 Capacitación de personal en prevención de ataques de ingeniería social.</li>
            </ul>
            <p>
              Resultado: HealthSecure logró cero incidentes críticos en el primer año tras la implementación.
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
                <img src="../assets/img/proyectos/healthsecure1.png" alt="HealthSecure Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/healthsecure2.webp" alt="HealthSecure Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/healthsecure3.png" alt="HealthSecure Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/healthsecure4.jpg" alt="HealthSecure Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/healthsecure5.jpg" alt="HealthSecure Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/healthsecure6.jpg" alt="HealthSecure Img6">
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
        <h2>Plataforma de Comercio Electrónico para MarketHub</h2>
        <div class="contenido-proyecto">
          <img src="../assets/img/proyectos/markethub.png" alt="Logo MarketHub">
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
                <img src="../assets/img/proyectos/markethub1.jpg" alt="Markethub Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/markethub2.jpg" alt="Markethub Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/markethub3.webp" alt="Markethub Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/markethub4.png" alt="Markethub Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/markethub5.webp" alt="Markethub Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="../assets/img/proyectos/markethub6.png" alt="Markethub Img6">
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