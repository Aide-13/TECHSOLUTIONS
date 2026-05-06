<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Servicios | TechSolutions</title>
    <link rel="stylesheet" href="Barra.css">
    <link rel="stylesheet" href="Servicios.css">
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

    
    <div class="contenido">
        <div class="Servicio">
            <h3>Desarrollo Web y Aplicaciones</h3>
            <center><img src="Imagenes/desarrollo_web.png" width="220px"></center>
            <p>Diseñamos y desarrollamos sitios web y aplicaciones personalizadas, modernas y responsivas, 
                que se adaptan a cualquier dispositivo. Nuestro enfoque combina funcionalidad, diseño atractivo 
                y optimización, garantizando experiencias de usuario intuitivas y alineadas con los objetivos de 
                cada cliente.</p>
            
            <a href="ser_Desarrollo_Web.php">Mas detalles </a>
        </div>
        <div class="Servicio">
            <h3>Consultoria Tecnológica</h3>
            <center><img src="Imagenes/consultoria_tecnologica.png" width="220px"></center>
            <p>Brindamos asesoría especializada para la implementación de soluciones tecnológicas que impulsen 
                la innovación y la eficiencia en tu empresa. Evaluamos tus necesidades actuales y te guiamos en 
                la adopción de herramientas digitales, transformación digital y optimización de procesos.</p>
            <a href="ser_Consultoria_Tecnologica.php">Mas detalles </a>
        </div>
        <div class="Servicio">
            <h3>Soporte Tecnico y Mantenimiento</h3>
            <center><img src="Imagenes/soporte_tecnico.png" width="220px"></center>
            <p>Ofrecemos soporte integral para garantizar el correcto funcionamiento de tus sistemas y equipos. 
                Nuestro servicio incluye monitoreo, mantenimiento preventivo y correctivo, además de asistencia 
                remota o presencial, minimizando riesgos y evitando interrupciones en tus operaciones.</p>
            <a href="ser_Soporte_Tecnico.php">Mas detalles </a>
        </div>
    </div>
    <div class="contenido_2">
        <div class="Servicio">
            <h3>Ciberseguridad</h3>
            <center><img src="Imagenes/ciberseguridad.png" width="220px"></center>
            <p>Protegemos tu información y la de tus clientes con soluciones de seguridad avanzadas. 
                Implementamos monitoreo en tiempo real, encriptación de datos, gestión de accesos y sistemas 
                de prevención ante amenazas, asegurando la continuidad y confianza de tu negocio.</p>
            <a href="ser_Ciberseguridad.php">Mas detalles </a>
        </div>
        <div class="Servicio">
            <h3>Implementación en la Nube</h3>
            <center><img src="Imagenes/implementacion_nube.png" width="220px"></center>
            <p>Ayudamos a migrar y administrar tus servicios en la nube para mejorar la accesibilidad y 
                escalabilidad de tus operaciones. Ofrecemos configuraciones seguras, respaldo automático y 
                reducción de costos de infraestructura, garantizando eficiencia y disponibilidad en todo momento.</p>
            <a href="ser_Implementacion_Nube.php">Mas detalles </a>
        </div>
        <div class="Servicio">
            <h3>Soluciones Digitales</h3>
            <center><img src="Imagenes/soluciones_digitales.png" width="220px"></center>
            <p>Creamos tiendas online seguras y fáciles de usar, integrando pasarelas de pago confiables 
                y gestión de inventario. Nuestras soluciones digitales están pensadas para optimizar la 
                experiencia del usuario, aumentar tus ventas y posicionar tu marca en el mercado digital.</p>
            <a href="ser_Soluciones_Digitales.php">Mas detalles </a>
        </div>
    </div>

    <footer>
        <p><a href="Contactos.php">Contacto</a></p>
        <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
    </footer>
</body>
</html>