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
        <h2>App de Delivery Inteligente para QuickEats</h2>
        <div class="contenido-proyecto">
          <img src="Imagenes/proyectos/quickeats.webp" alt="Logo QuickEats">
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
                <img src="Imagenes/proyectos/quickeats1.png" alt="QuickEats Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/quickeats2.jpg" alt="QuickEats Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/quickeats3.jpeg" alt="QuickEats Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/quickeats4.webp" alt="QuickEats Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/quickeats5.png" alt="QuickEats Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/quickeats6.jpg" alt="QuickEats Img6">
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
          <img src="Imagenes/proyectos/vitalcare.webp" alt="Logo VitalCare">
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
                <img src="Imagenes/proyectos/vitalcare1.webp" alt="VitalCare Img1">
              </div>
              <div class="inner-flip-back">
                <p>Aulas Digitales</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/vitalcare2.jpg" alt="VitalCare Img2">
              </div>
              <div class="inner-flip-back">
                <p>Plataforma Virtual</p>
              </div>
            </div>
          </div>
          
          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/vitalcare3.jpg" alt="VitalCare Img3">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/vitalcare4.jpg" alt="VitalCare Img4">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/vitalcare5.png" alt="VitalCare Img5">
              </div>
              <div class="inner-flip-back">
                <p>Capacitación</p>
              </div>
            </div>
          </div>

          <div class="inner-flip-card">
            <div class="inner-flip-card-inner">
              <div class="inner-flip-front">
                <img src="Imagenes/proyectos/vitalcare6.jpg" alt="VitalCare Img6">
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