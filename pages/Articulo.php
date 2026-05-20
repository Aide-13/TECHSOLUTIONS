<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM articulos WHERE id = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $articulo = $resultado->fetch_assoc();
} else {
    die("Artículo no encontrado");
}
$sql = "SELECT * FROM comentarios WHERE articulo_id = $id ORDER BY fecha DESC";

$resultado = $conn->query($sql);

if (isset($_POST['articulo_id'])) {
    $articulo_id = intval($_POST['articulo_id']);
    $conn->query("UPDATE comentarios SET likes = likes + 1 WHERE articulo_id = $articulo_id");
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $articulo['titulo'] ?> - TechSolutions Blog</title>
        <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/Articulo.css?v=<?php echo time(); ?>">
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
            <main>
                <div class="cabeza">
                    <h1><?= $articulo['titulo'] ?></h1>
                    <p id="datos"><small>📅 <?= $articulo['fecha'] ?> 🕒 <?= $articulo['tiempo_lectura'] ?> 🧑‍💻 Equipo de Techsolutios</small></p>
                </div>
                <div class="articulo">
                    <center><img src="<?= $articulo['imagen'] ?>" width="300px"></center>
                    <p><?= $articulo['articulo'] ?></p>
                </div>
            </main>
        </section>
        <section class="comentarios">
            <form>
                <div class="formulario">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre..."></input>
                    <textarea id="comentario" name="comentario" placeholder="Deja un comentario..."></textarea>
                    <button type="submit" id="enviar" name="enviar">Enviar</button>
                </div>
            </form>
            <div class="caja">
                <?php if ($resultado->num_rows > 0): ?>
                    <?php while ($row = $resultado->fetch_assoc()): ?>
                        <div class="cartas">
                            <div class="perfil">
                                <div class="foto">
                                    <img src="../assets/img/perfil.png" class="avatar">
                                    <b><?= htmlspecialchars($row['nombre']) ?></b>
                                </div>
                                <div class="info">
                                    <small><?= date("d-m-Y", strtotime($row['fecha'])) ?></small>
                                    <button class="like-btn">
                                        ❤️ <span class="like-count"><?= $row['likes'] ?></span>
                                    </button>
                                </div>
                            </div>
                            <p><?= nl2br(htmlspecialchars($row['comentario'])) ?></p>
                        </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>Se el primero en comentar!</p>
                <?php endif; ?>
            </div>
        </section>
        <footer>
            <p>
                <a href="Contactos.php">
                    Contacto
                </a>
            </p>
            <p>
                &copy; 2025 TechSolutions. Todos los derechos reservados.
            </p>
        </footer>
    </body>
    <script src="../assets/js/Blog.js"></script>
    <script src="../assets/js/barra.js"></script>
</html>
