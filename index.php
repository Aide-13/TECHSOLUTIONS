<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Inicio - TECHSOLUTIONS</title>
        <link rel="stylesheet" href="assets/css/Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/index.css?v=<?php echo time(); ?>">
        <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <nav id="barra-principal">
                <div class="logo"><img src="assets/img/logotipo_barra.png" onclick="location.href='index.php'"></div>
                <div class="barra-nav">
                    <div class="barra-busqueda">
                        <input id="busqueda" name="busqueda" type="text" placeholder="Buscar en toda la tienda">
                        <button type="submit"><img src="assets/img/busqueda.png"></button>
                    </div>
                </div>
                <div class="barra-inicio">
                    <img src="assets/img/icono.png" onclick="location.href='pages/Inicio_sesion.php'">
                </div>
                <button class="menu-toggle" id="menu-toggle">
                    ☰
                </button>
            </nav>
            <div class="menu">
                <ul>
                    <li class="mobile-login"><a href="pages/Inicio_sesion.php">Iniciar sesión</a></li>
                    <li class="dropdown">
                        <a href="Servicios.php">Servicios</a>
                        <ul class="submenu">
                            <li><a href="pages/Servicio_detalle.php?id=1">Desarrollo Web y Aplicaciones</a></li>
                            <li><a href="pages/Servicio_detalle.php?id=2">Consultoría Tecnológica</a></li>
                            <li><a href="pages/Servicio_detalle.php?id=3">Soporte Técnico y Mantenimiento</a></li>
                            <li><a href="pages/Servicio_detalle.php?id=4">Ciberseguridad</a></li>
                            <li><a href="pages/Servicio_detalle.php?id=5">Implementación en la Nube</a></li>
                            <li><a href="pages/Servicio_detalle.php?id=6">Soluciones Digitales</a></li>
                        </ul>
                    </li>
                    <li><a href="pages/Catalogo_Tienda.php">Tienda en Línea</a></li>
                    <li><a href="pages/Blog.php">Blog de Novedades</a></li>
                    <li class="dropdown">
                        <a href="pages/Galeria.php">Galería de Proyectos</a>
                        <ul class="submenu">
                            <li><a href="pages/Galeria_desarrollo.php">Desarrollo Web</a></li>
                            <li><a href="pages/Galeria_aplicaciones.php">Aplicaciones Móviles</a></li>
                            <li><a href="pages/Galeria_ciberseguridad.php">CiberSeguridad</a></li>
                            <li><a href="pages/Galeria_soporte.php">Soporte Técnico y Mantenimiento</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="pages/Noticias.php">Noticias del Sector</a>
                        <ul class="submenu">
                            <li><a href="pages/Noticias_eventos.php">Eventos Tecnológicos</a></li>
                        </ul>
                    </li>
                    <li><a href="pages/Contactos.php">Contacto</a></li>
                </ul>
            </div>
        </header>
        <div class="contenido">
            <div class="slider">
                <div class="slider-container">
                    <button class="slider-button prev" aria-label="Anterior">&#10094;</button>
                    <div class="slider-content">
                        <div class="slider-item active">
                            <img src="assets/img/ciberseguridad.jpg">
                        </div>
                        <div class="slider-item">
                            <img src="assets/img/techsolutions.jpeg">
                        </div>
                        <div class="slider-item">
                            <img src="assets/img/businessman.jpg">
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
                    <div class="con_1">
                        <div>
                            <img src="assets/img/techsolutios.png">
                        </div>
                        <div class="texto">
                            <h2>Quienes somos </h2>
                            <p>En TechSolutions somos una empresa especializada en ofrecer soluciones tecnológicas innovadoras que 
                                impulsan el crecimiento y la transformación digital de las organizaciones.
                            </p>
                            <p>Nos enfocamos en el desarrollo de plataformas web, aplicaciones personalizadas, servicios de ciberseguridad, 
                                consultoría tecnológica y soporte integral, con el objetivo de ayudar a nuestros clientes a optimizar sus 
                                procesos y mejorar su presencia digital.
                            </p>
                            <p>Nuestro equipo está conformado por profesionales apasionados por la tecnología, comprometidos en brindar 
                                servicios de calidad, seguros y a la medida de cada cliente. Creemos en la innovación constante, en la 
                                excelencia y en generar relaciones de confianza con quienes nos eligen
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mision">
                    <div class="con_2">
                        <div class="texto">
                            <h2>Mision</h2>
                            <p>Brindar soluciones tecnológicas innovadoras y confiables que impulsen el crecimiento de las empresas, 
                                mediante servicios digitales de calidad, consultoría especializada y productos tecnológicos que faciliten 
                                la transformación digital de nuestros clientes.
                            </p>
                            <p>Ser una empresa líder en servicios tecnológicos a nivel nacional e internacional, reconocida por su innovación, 
                                excelencia y compromiso en el desarrollo de plataformas y soluciones que transformen el futuro digital de las organizaciones.
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/ceo.jpg">
                        </div>
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
                                Fortalecer la seguridad digital de los clientes, implementando estrategias de 
                                ciberseguridad que prevengan, detecten y mitiguen riesgos frente a amenazas informáticas.
                            </li>
                            <li>
                                Diseñar y desarrollar plataformas web modernas y funcionales, adaptadas a las necesidades 
                                de cada cliente, que mejoren su presencia digital y competitividad en el mercado.
                            </li>
                            <li>
                                Capacitar a los equipos de trabajo de los clientes en buenas prácticas tecnológicas y de 
                                seguridad informática, promoviendo el uso responsable y eficiente de los recursos digitales.
                            </li>
                            <li>
                                Ofrecer soporte técnico integral, garantizando la continuidad operativa de los sistemas y 
                                la rápida atención ante incidentes tecnológicos.
                            </li>
                            <li>
                                Promover la innovación constante en todos los servicios, incorporando tendencias emergentes 
                                como la computación en la nube, inteligencia artificial y automatización de procesos.
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>
                <a href="pages/Contactos.php">
                    Contacto
                </a>
            </p>
            <p>
                &copy; 2025 TechSolutions. Todos los derechos reservados.
            </p>
        </footer>
    </body>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/barra.js"></script> 
</html>