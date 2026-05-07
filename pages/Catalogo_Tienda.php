<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : "todos";

if ($categoria == "todos") {
    $sqlProductos = "SELECT * FROM producto ORDER BY titulo DESC";
} else {
    $sqlProductos = "SELECT * FROM producto WHERE categoria LIKE '%$categoria%' ORDER BY titulo DESC";
}

$resultadoProductos = $conn->query($sqlProductos);

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$articulo = null;

if ($id > 0) {
    $sqlArticulo = "SELECT * FROM producto WHERE id = $id";
    $resultadoArticulo = $conn->query($sqlArticulo);

    if ($resultadoArticulo && $resultadoArticulo->num_rows > 0) {
        $articulo = $resultadoArticulo->fetch_assoc();
    }
}

// Buscar por titulo o categoría
$busqueda = "";
if (isset($_GET['buscarbtn'])) {
    $busqueda = $conn->real_escape_string($_GET['buscar']); 

    $sql_visitas = "SELECT * FROM producto
                    WHERE titulo LIKE '%$busqueda%'
                    OR categoria LIKE '%$busqueda%' 
                    ORDER BY titulo DESC";
} else {
    $sql_visitas = "SELECT * FROM producto ORDER BY titulo DESC";
}

$visitas = $conn->query($sql_visitas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tienda en Línea | TechSolutions</title>
        <link rel="stylesheet" href="/assets/css/Barra.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="/assets/css/Catalogo_Tienda.css?v=<?php echo time(); ?>">
    <link rel="icon" href="/assets/img/log.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav id="barra-principal">
            <div class="logo"><img src="/assets/img/logotipo_barra.png" width="400px" onclick="location.href='index.php'"></div>
            <div class="barra-nav">
                <div class="barra-busqueda">
                    <input id="busqueda" name="busqueda" type="text" placeholder="Buscar en toda la tienda">
                    <button type="submit"><img src="/assets/img/busqueda.png" width="20px"></button>
                </div>
            </div>
            <div class="inicio-s">
                <img src="/assets/img/icono.png" width="50px" onclick="location.href='Inicio_sesion.php'">
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

    <div class="cuerpo">
        <div class="titulo">
            <div><h2><img src="/assets/img/catalogo.png" width="40px">            Nuestros Servicios y Productos | Catálogo</h2></div>
            <div class="acciones">
            <div id="carrito"><a href="#" id="abrir_favoritos"> <img src="/assets/img/favoritos.png" width="35px">Mis Favoritos</a></div>
            <div id="carrito"><a href="#" id="abrir_carrito"> <img src="/assets/img/carrito.png" width="35px">        Mi Carrito</a></div>
            </div>
        </div>
        <div class="buscar">
    <div><a href="#" id="abrir_categorias"> 
        <img src="/assets/img/categorias.png" width="15px"> Categorías</a>
    </div>
    <div class="barra_busqueda">
        <form method="GET" action="Catalogo_Tienda.php">
            <input id="busqueda" name="buscar" type="text" 
                   placeholder="Buscar artículo..." 
                   value="<?= htmlspecialchars($busqueda) ?>">
            <button type="submit" name="buscarbtn" id="buscarbtn">
                <img src="/assets/img/buscar_art.png" width="20px">
            </button>
        </form>
    </div>
</div>
<div class="productos">
    <?php if ($visitas && $visitas->num_rows > 0): ?>
        <?php while($producto = $visitas->fetch_assoc()): ?>
            <div class="producto">
                <a href="Catalogo_Tienda.php?id=<?= $row['id'] ?>" style="text-decoration:none; color:inherit;">
                    <div class="cabeza">
                        <div class="titulo_producto">
                            <center><label><?= htmlspecialchars($producto['titulo']) ?></label></center>
                        </div>
                        <div class="imagen">
                            <center><img src="<?= htmlspecialchars($producto['imagen']) ?>" width="170px"></center>
                        </div>
                        <div class="descripcion_producto">
                            <center><p><?= htmlspecialchars($producto['descripcion']) ?></p></center>
                        </div>
                        <p class="precio"><?= htmlspecialchars($producto['precio']) ?></p>
                        <a href="#" class="abrir-detalle" data-target="producto_1">Ver detalles</a>
                        <button type="button"><img src="/assets/img/carrito.png" width="20px"> Agregar a Carrito</button>
                        <p class="tag">
                            <?= htmlspecialchars($producto['categoria']) ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
                <center><p>No hay productos disponibles en esta categoría.</p></center>
                <?php endif; ?>
        </div>
    </div>


        

    <div id="modal" class="categorias">
        <div class="categorias_catalogo">
            <span class="cerrar">&times;</span>
            <h4><img src="/assets/img/categorias.png" width="15px">     Categorias</h4>
            <hr class="separador">
            <h4><a href="Catalogo_Tienda.php?categoria=todos">Todo</a></h4>
            <hr class="separador">
            <h4><a href="Catalogo_Tienda.php?categoria=Accesorios Tecnológicos">Accesorios Tecnológicos</a></h4>
            <hr class="separador">
            <h4><a href="Catalogo_Tienda.php?categoria=Equipos y Hardware">Equipos y Hardware</a></h4>
            <hr class="separador">
            <h4><a href="Catalogo_Tienda.php?categoria=Licencias de Software">Licencias de Software</a></h4>
            <hr class="separador">
            <h4><a href="Catalogo_Tienda.php?categoria=Redes y Conectividad">Redes y Conectividad</a></h4>
            <hr class="separador">
            <h4><a href="Catalogo_Tienda.php?categoria=Soportes y Servicios Digitales">Soportes y Servicios Digitales</a></h4>
            <hr class="separador">
        </div>
    </div>

    <!--modal-->
    <div id="producto_1" class="ver_mas">
  <div class="detalles">
    <span class="cerrar">&times;</span>
    <center><h3>Ejemplo Producto</h3></center>
    <center><img src="/assets/img/ejemplo.png" width="200"></center>
    <center><p>Descripción del producto...</p></center>
    <label>Cantidad: <input id="cantidad" name="cantidad" type="number" min="1" value="1"></label>
    <div class="acciones">
      <button class="btn-favoritos" type="button">
        <img src="/assets/img/favoritos.png" width="20px"> Agregar a Favoritos
      </button>
      <button class="btn-carrito" type="button">
        <img src="/assets/img/carrito.png" width="20px"> Agregar a Carrito
      </button>
      <button class="btn-comprar" type="button">
        <img src="/assets/img/bolsa.png" width="20px"> Comprar Ahora
      </button>
    </div>
  </div>
</div>
    <footer>
        <p><a href="Contactos.php">Contacto</a></p>
        <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
    </footer>

    <script src="Catalogo_Tienda.js"></script>
</body>
</html>
