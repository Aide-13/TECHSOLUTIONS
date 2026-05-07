<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

$mensaje = ""; // Para mostrar mensajes

if (isset($_POST['guardar'])) {
    $nombre_completo = $_POST['nombre_completo'] ?? '';
    $empresa = $_POST['empresa'] ?? '';
    $correo_numero = $_POST['correo_numero'] ?? '';
    $asunto = $_POST['asunto'] ?? '';
    $comentarios_contacto = $_POST['comentarios_contacto'] ?? '';

    $sql_insert = "INSERT INTO contacto
        (nombre_completo, empresa, correo_numero, asunto, comentarios_contacto) 
        VALUES (?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sssss", 
        $nombre_completo, $empresa, $correo_numero, $asunto, $comentarios_contacto
    );

    if ($stmt_insert->execute()) {
        $mensaje = "✅ Registro guardado con éxito.";
        $nombre_completo = $empresa = $correo_numero = $asunto = $comentarios_contacto = "";
    } else {
        $mensaje = "❌ Error al guardar: " . $stmt_insert->error;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contactos - TECHSOLUTIONS</title>
    <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/contacto.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon">
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
            <li><a href="Contactos.php">Contacto</a></li>
        </ul>
    </div>
</header>

<section class="contacto">
    <h2>¿Necesitas ayuda?</h2>
    <p class="subtitulo">Contáctanos para poder ayudarte</p>

    <p>
      En <strong>TechSolutions</strong> ponemos a tu disposición un equipo especializado para atender tus necesidades tecnológicas.
    </p>
    <p>
      Si requieres información sobre nuestros servicios de desarrollo web y aplicaciones, consultoría tecnológica o soporte técnico y mantenimiento, no dudes en comunicarte con nosotros.
    </p>
    <p>
      Estamos comprometidos en ofrecerte atención personalizada y soluciones efectivas que impulsen el crecimiento y la innovación de tu empresa.
    </p>

    <div class="contacto-opciones">
      <div class="contacto-card">
        <p><strong>Llámanos</strong> 📞</p>
        <input type="text" value="001 800 55 4904 8489" readonly>
      </div>

      <div class="contacto-card">
        <p><strong>Envíanos un Correo</strong> ✉️</p>
        <input type="text" value="TechSolutions_ayuda@outlook.com" readonly>
      </div>
    </div>

    <h3>Déjanos saber tu opinión</h3>

    <!-- Mostrar mensaje de confirmación -->
    <?php if ($mensaje): ?>
        <p><strong><?= $mensaje ?></strong></p>
    <?php endif; ?>

    <form class="formulario" method="post">
      <div class="form-doble">
        <input type="text" placeholder="Nombre Completo" name="nombre_completo" id="nombre_completo"
        value="<?= htmlspecialchars($_POST['nombre_completo'] ?? '') ?>">
        <input type="text" placeholder="Empresa" name="empresa" id="empresa"
        value="<?= htmlspecialchars($_POST['empresa'] ?? '') ?>">
      </div>

      <input type="text" placeholder="Correo Electrónico/Número de Teléfono" name="correo_numero" id="correo_numero"
      value="<?= htmlspecialchars($_POST['correo_numero'] ?? '') ?>">
      
      <select name="asunto" id="asunto">
        <option value="0">Selecciona una opción</option>
        <option value="Consulta" <?= (($_POST['asunto'] ?? '') == "Consulta") ? "selected" : "" ?>>Consulta</option>
        <option value="Soporte Tecnico" <?= (($_POST['asunto'] ?? '') == "Soporte Tecnico") ? "selected" : "" ?>>Soporte técnico</option>
        <option value="Otro" <?= (($_POST['asunto'] ?? '') == "Otro") ? "selected" : "" ?>>Otro</option>
      </select>

      <textarea rows="4" placeholder="Queremos saber qué piensas" 
        name="comentarios_contacto" id="comentarios_contacto"><?= htmlspecialchars($_POST['comentarios_contacto'] ?? '') ?></textarea>

      <button type="submit" name="guardar" id="guardar">Enviar</button>
    </form>
</section>

<footer>
    <p><a href="Contactos.php">Contacto</a></p>
    <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
</footer>
</body>
</html>
