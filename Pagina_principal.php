<!DOCTYPE html><!--colocar todo el codigo al principio de cada codigo-->
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Inicio - TECHSOLUTIONS</title>
        <link rel="stylesheet" href="Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="Pagina_principal.css?v=<?php echo time(); ?>">
        <link rel="icon" href="Imagenes/logo.png" type="image/x-icon">
        
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
            <div class="slider">
                <div class="slider-container">
        <button class="slider-button prev" aria-label="Anterior">&#10094;</button>
        <div class="slider-content">
            <div class="slider-item active">
                <img src="Imagenes/ciberseguridad.jpeg" width="1000">
            </div>
            <div class="slider-item">
                <img src="Imagenes/techsolutions.jpeg" width="1000">
            </div>
            <div class="slider-item">
                <img src="Imagenes/ciberseguridad.jpeg" width="1000">
            </div>
        </div>
        <button class="slider-button next" aria-label="Siguiente">&#10095;</button>
        <div class="slider-dots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>

            <div class ="quienes_somos">
                <h2>Quienes somos </h2>
                <div class="con_1">
                    <img src="Imagenes/techsolutios.png" width="600px">
                    <div class="texto">
                        <p>En TechSolutions somos una empresa especializada en ofrecer soluciones tecnológicas innovadoras que 
                            impulsan el crecimiento y la transformación digital de las organizaciones.</p>
                        <p>Nos enfocamos en el desarrollo de plataformas web, aplicaciones personalizadas, servicios de ciberseguridad, 
                            consultoría tecnológica y soporte integral, con el objetivo de ayudar a nuestros clientes a optimizar sus 
                            procesos y mejorar su presencia digital.</p>
                        <p>Nuestro equipo está conformado por profesionales apasionados por la tecnología, comprometidos en brindar 
                            servicios de calidad, seguros y a la medida de cada cliente. Creemos en la innovación constante, en la 
                            excelencia y en generar relaciones de confianza con quienes nos eligen</p>
                    </div>
                </div>
            </div>

            <div class="mision">
                <h2>Mision</h2>
                <div class="con_2">
                    <div class="texto">
                        <p>Brindar soluciones tecnológicas innovadoras y confiables que impulsen el crecimiento de las empresas, 
                        mediante servicios digitales de calidad, consultoría especializada y productos tecnológicos que faciliten 
                        la transformación digital de nuestros clientes.</p>
                        <p>Ser una empresa líder en servicios tecnológicos a nivel nacional e internacional, reconocida por su innovación, 
                    excelencia y compromiso en el desarrollo de plataformas y soluciones que transformen el futuro digital de las organizaciones.
                </p>
            </div>
            <img src="Imagenes/ceo3.jpeg" width="1000px">
        </div>
    </div>
    
    <div class="vision">
        <H2>Visión</h2>
        <div class="texto">
            <p>Ser una empresa líder en servicios tecnológicos a nivel nacional e internacional, reconocida por su innovación, 
            excelencia y compromiso en el desarrollo de plataformas y soluciones que transformen el futuro digital de las organizaciones.
        </p>
    </div>
</div>

<div class="obj_especificos">
    <h2>Objetivos especificos</h2>
    <div class="texto">
        <ul>
            <li>
                Brindar consultoría tecnológica especializada,
                ayudando a las empresas a optimizar sus procesos internos mediante soluciones
                innovadoras y personalizadas.
            </li>
            <li>
                Fortalecer la seguridad digital de los clientes, implementando estrategias de ciberseguridad que prevengan, detecten y mitiguen riesgos frente a amenazas informáticas.
            </li>
            <li>
                Diseñar y desarrollar plataformas web modernas y funcionales, adaptadas a las necesidades de cada cliente, que mejoren su presencia digital y competitividad en el mercado.
            </li>
            <li>
                Capacitar a los equipos de trabajo de los clientes en buenas prácticas tecnológicas y de seguridad informática, promoviendo el uso responsable y eficiente de los recursos digitales.
            </li>
            <li>
                Ofrecer soporte técnico integral, garantizando la continuidad operativa de los sistemas y la rápida atención ante incidentes tecnológicos.
            </li>
            <li>
                Promover la innovación constante en todos los servicios, incorporando tendencias emergentes como la computación en la nube, inteligencia artificial y automatización de procesos.
            </li>
        </ul>
    </div>
</div>
</div>

<footer><p><a href="Contactos.php">Contacto</a></p>
<p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
</footer>

</body>
<script src="Pagina_principal.js"></script> 
</html>