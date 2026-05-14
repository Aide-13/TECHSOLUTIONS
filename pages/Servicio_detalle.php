<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT s.*, se.*
            FROM servicios s
            INNER JOIN servicio_esp se 
            ON s.id = se.id_servicio
            WHERE s.id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $servicio = $resultado->fetch_assoc();

} else {
    header("Location: Servicios.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $servicio['titulo']; ?> | TechSolutions</title>
        <link rel="stylesheet" href="../assets/css/Barra.css">
        <link rel="stylesheet" href="../assets/css/Servicio_detalle.css">
        <link rel="icon" href="../assets/img/log.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <nav id="barra-principal">
                <div class="logo"><img src="../assets/img/logotipo_barra.png" onclick="location.href='../index.php'"></div>
                <div class="barra-nav">
                    <div class="barra-busqueda">
                        <input id="busqueda" name="busqueda" type="text" placeholder="Buscar en toda la tienda">
                        <button type="submit"><img src="../assets/img/busqueda.png"></button>
                    </div>
                </div>
                <div class="barra-inicio">
                    <img src="../assets/img/icono.png" onclick="location.href='Inicio_sesion.php'">
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
        <div class="contenido">
            <h2><?php echo $servicio['titulo']; ?></h2>
            <div class="descripcion_ser">
                <div class="imagen">
                    <img src="<?php echo $servicio['imagen']; ?>" width="300px">
                </div>
                <div>
                    <h3><?php echo $servicio['frase']; ?></h3>
                    <p><?php echo nl2br($servicio['descripcion']); ?></p>
                </div>
            </div>
            <div class="contenido_2">
                <div class="contenido_3">
                    <div class="puntos">
                        <h4>Lo Que Hacemos Por Ti</h4>
                        <p><?php echo $servicio['hechos']; ?></p>
                    </div>
                    <div class="puntos">
                        <h4>Así Trabajamos en TechSolutions</h4>
                        <p><?php echo $servicio['trabajo']; ?></p>
                    </div>
                </div>
            </div>
            <h4 id="subtitulo">Por Qué Elegirnos</h4>
            <div class="contenido_4">
                <div>
                    <img src="../assets/img/beneficios.png" width="200px">
                </div>
                <div>
                    <p><?php echo $servicio['elegir']; ?></p>
                </div>
            </div>
            <a href="Contactos.php" id="contacto">
                Contáctanos para solicitar más detalles o hacer una cotización
                <img src="../assets/img/telefono.png" width="20px">
            </a>
        </div>
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
    <script src="../assets/js/barra.js"></script>
    <script src="../assets/js/index.js"></script>
</html>