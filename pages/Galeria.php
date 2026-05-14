<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

$categoria = isset($_GET['categoria']) 
    ? $_GET['categoria'] 
    : 'todos';

$sql = "SELECT * FROM proyectos";

if($categoria != 'todos'){
    $sql .= " WHERE categoria='$categoria'";
}

$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Galería de Proyectos</title>
    <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/Galeria.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../assets/img/log.png">
  </head>
  <body>
    <header>
      <nav id="barra-principal">
        <div class="logo">
          <img src="../assets/img/logotipo_barra.png" width="400px" onclick="location.href='index.php'">
        </div>
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
              <li><a href="Galeria.php?categoria=desarrollo">Desarrollo Web</a></li>
              <li><a href="Galeria.php?categoria=aplicaciones">Aplicaciones Móviles</a></li>
              <li><a href="Galeria.php?categoria=ciberseguridad">CiberSeguridad</a></li>
              <li><a href="Galeria.php?categoria=soporte">Soporte Técnico y Mantenimiento</a></li>
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
    <main>
      <?php while($proyecto = $resultado->fetch_assoc()) { ?>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front proyecto">
            <h2><?php echo $proyecto['titulo']; ?></h2>
            <div class="contenido-proyecto">
              <img src="<?php echo $proyecto['logo']; ?>"
              alt="<?php echo $proyecto['titulo']; ?>">
              <div class="texto-proyecto">
                <p>
                  <?php echo $proyecto['descripcion']; ?>
                </p>
                <a href="#" class="link-galeria">
                  Ver galería de imágenes
                </a>
              </div>
            </div>
          </div>
          <div class="flip-card-back galeria">
            <h3>Galería de Imágenes</h3>
            <div class="inner-flip-gallery">
              <?php
              $idProyecto = $proyecto['id'];
              $sqlImagenes = "SELECT * FROM galeria_imagenes 
                              WHERE proyecto_id = $idProyecto";

              $resultadoImagenes = $conn->query($sqlImagenes);
              while($imagen = $resultadoImagenes->fetch_assoc()) {
              ?>
              <div class="inner-flip-card">
                <div class="inner-flip-card-inner">
                  <div class="inner-flip-front">
                    <img src="<?php echo $imagen['imagen']; ?>"
                    alt="imagen proyecto">
                  </div>
                  <div class="inner-flip-back">
                    <p>
                      <?php echo $imagen['titulo_imagen']; ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            <a href="#" class="link-volver">← Volver</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </main>
  </body>
  <script src="../assets/js/Galeria.js"></script>
  <script src="../assets/js/barra.js"></script>
</html>