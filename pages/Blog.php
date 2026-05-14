<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : "todos";

if ($categoria == "todos") {
    $sql = "SELECT * FROM articulos ORDER BY fecha DESC";
} else {
    $sql = "SELECT * FROM articulos WHERE categorias LIKE '%$categoria%' ORDER BY fecha DESC";
}

$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Blog - TECHSOLUTIONS</title>
        <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/Blog.css?v=<?php echo time(); ?>">
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
                <button class="menu-toggle" id="menu-toggle">
                    ☰
                </button>
            </nav>
            <div class="menu">
                <ul>
                    <li class="mobile-login"><a href="Inicio_sesion.php">Iniciar sesión</a></li>
                    <li class="dropdown">
                        <a href="Servicios.php">Servicios</a>
                        <ul class="submenu">
                            <li><a href="Servicio_detalle.php?id=1">Desarrollo Web y Aplicaciones</a></li>
                            <li><a href="Servicio_detalle.php?id=2">Consultoría Tecnológica</a></li>
                            <li><a href="Servicio_detalle.php?id=3">Soporte Técnico y Mantenimiento</a></li>
                            <li><a href="Servicio_detalle.php?id=4">Ciberseguridad</a></li>
                            <li><a href="Servicio_detalle.php?id=5">Implementación en la Nube</a></li>
                            <li><a href="Servicio_detalle.php?id=6">Soluciones Digitales</a></li>
                        </ul>
                    </li>
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
        <section class="contenedor">
            <aside class="sidebar">
                <section class="seccion">
                    <div class="titulo">
                        <img src="../assets/img/log.png" width="50px" height="50px">
                        <h3>TechSolutions</h3>
                    </div>
                    <div>
                        <p>Hola, somos <b>TechSolutions</b> tu aliado tecnológico para el crecimiento empresarial.</p>
                    </div>
                </section>
                <section class="seccion2">
                    <div class="titulo">
                        <img src="../assets/img/ligero (1).png" width="20px">
                        <h4>Etiquetas</h4>
                    </div>
                    <div class="etiquetas">
                        <p><a href="Blog.php?categoria=todos"><img src="../assets/img/hashtag.png" width="10px">Todos</a></p>
                        <p><a href="Blog.php?categoria=software"><img src="../assets/img/hashtag.png" width="10px">Software</a></p>
                        <p><a href="Blog.php?categoria=cloud"><img src="../assets/img/hashtag.png" width="10px">Cloud</a></p>
                        <p><a href="Blog.php?categoria=ai"><img src="../assets/img/hashtag.png" width="10px">AI</a></p>
                        <p><a href="Blog.php?categoria=iot"><img src="../assets/img/hashtag.png" width="10px">IoT</a></p>
                        <p><a href="Blog.php?categoria=ciberseguridad"><img src="../assets/img/hashtag.png" width="10px">CiberSeguridad</a></p>
                        <p><a href="Blog.php?categoria=startups"><img src="../assets/img/hashtag.png" width="10px">Startups</a></p>
                    </div>
                </section>
                <section class="seccion3">
                    <div class="titulo">
                        <h4>Lo que dicen nuestros clientes 🗨️</h4>
                    </div>
                    <div class="carrusel">
                        <div class="carrusel-contenedor">
                            <div class="testimonio">
                                <p>"Gracias a TechSolutions logramos optimizar nuestra red y mejorar la seguridad informática."</p>
                                <h4>— Ana López, CEO StartUp MX</h4>
                            </div>
                            <div class="testimonio">
                                <p>"Excelente servicio al cliente, siempre dispuestos a resolver dudas y dar soporte técnico."</p>
                                <h4>— Carlos Méndez, IT Manager</h4>
                            </div>
                            <div class="testimonio">
                                <p>"La tienda online de software es muy práctica, compramos licencias y la activación fue inmediata."</p>
                                <h4>— Mariana Torres, Empresaria</h4>
                            </div>
                        </div>
                        <button class="boton prev">&#10094;</button>
                        <button class="boton next">&#10095;</button>
                    </div>
                </section>
            </aside>
            <div class="articulo">
                <div class="tendencias">
                    <h3>Tendencias</h3>
                    <div class="botones">
                        <div class="titulos">
                            <a href="Blog.php?categoria=innovacion">
                                <button><img src="../assets/img/innovacion.png"></button>
                                Innovacion
                            </a>
                        </div>
                        <div class="titulos">
                            <a href="Blog.php?categoria=ciberseguridad">
                                <button><img src="../assets/img/amenazas-de-ciberseguridad.png"></button>
                                CiberSeguridad
                            </a>
                        </div>
                        <div class="titulos">
                            <a href="Blog.php?categoria=desarrollo">
                                <button><img src="../assets/img/desarrollo-movil.png"></button>
                                Desarrollo
                            </a>
                         </div>
                         <div class="titulos">
                            <a href="Blog.php?categoria=redes">
                                <button><img src="../assets/img/nube.png" class="icono"></button>
                                Redes
                            </a>
                        </div>
                        <div class="titulos">
                            <a href="Blog.php?categoria=productividad">
                                <button><img src="../assets/img/productividad.png"></button>
                                Productividad
                            </a>
                        </div>
                    </div>
                </div>
                <main>
                    <div class="articulos">
                        <?php if ($resultado->num_rows > 0): ?>
                            <?php while ($row = $resultado->fetch_assoc()): ?>
                                <div class="cartas">
                                    <a href="Articulo.php?id=<?= $row['id'] ?>" style="text-decoration:none; color:inherit;"><div class="cabeza">
                                        <img src="<?= $row['imagen'] ?>" class="imagen">
                                        <div class="cont">
                                            <p>📅 <?= $row['fecha'] ?> 🕒 <?= $row['tiempo_lectura'] ?></p>
                                            <h4><?= $row['titulo'] ?></h4>
                                            <p id="introduccion"><?= $row['contenido'] ?></p>
                                            <p>
                                                <?php 
                                                    $tags = explode(",", $row['categorias']);
                                                    foreach ($tags as $tag) {
                                                        echo "<span>#".ucfirst(trim($tag))." </span>";
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div></a>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No hay artículos disponibles en esta categoría.</p>
                        <?php endif; ?>
                    </div>
                </main>
            </div>
        </section>
        <footer>
            <p>
                <a href="Contactos.php">
                    Contacto
                </a>
            </p>
            <p>
                &copy; 2025 TechSolutions
            </p>
        </footer>
    </body>
    <script src="../assets/js/Blog.js"></script>
    <script src="../assets/js/Barra.js"></script>
</html>
