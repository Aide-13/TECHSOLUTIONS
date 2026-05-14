<?php
require_once("../conexion.php");

$conexionBD = new Conexion();
$conn = $conexionBD->conectar();

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : "todos";
$busqueda = isset($_GET['buscar']) ? trim($_GET['buscar']) : "";

$sql = "SELECT * FROM producto WHERE 1=1";

if ($categoria != "todos") {
    $categoria = $conn->real_escape_string($categoria);
    $sql .= " AND categoria = '$categoria'";
}

if (!empty($busqueda)) {
    $busqueda = $conn->real_escape_string($busqueda);
    $sql .= " AND (
        titulo LIKE '%$busqueda%' 
        OR categoria LIKE '%$busqueda%'
        OR descripcion LIKE '%$busqueda%'
    )";
}

$sql .= " ORDER BY titulo ASC";

$resultadoProductos = $conn->query($sql);

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$articulo = null;

if ($id > 0) {
    $sqlArticulo = "SELECT * FROM producto WHERE id = $id";
    $resultadoArticulo = $conn->query($sqlArticulo);

    if ($resultadoArticulo && $resultadoArticulo->num_rows > 0) {
        $articulo = $resultadoArticulo->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
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
        <div class="cuerpo">
            <div class="titulo">
                <div>
                    <h2>
                        <img src="/assets/img/catalogo.png" width="40px">
                        Nuestros Servicios y Productos | Catálogo
                    </h2>
                </div>
                <div class="acciones">
                    <div id="carrito">
                        <a href="#" id="abrir_carrito">
                            <img src="/assets/img/carrito.png" width="35px">
                            Mi Carrito
                        </a>
                    </div>
                </div>
            </div>
            <div class="buscar">
                <div><a href="#" id="abrir_categorias"> 
                    <img src="/assets/img/categorias.png" width="15px">
                    Categorías
                </a>
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
            <?php if ($resultadoProductos && $resultadoProductos->num_rows > 0): ?>
                <?php while($producto = $resultadoProductos->fetch_assoc()): ?>
                    <div class="producto">
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
                            <a href="#" class="abrir-detalle" data-target="producto_<?= $producto['id'] ?>">
                                Ver detalles
                            </a>
                            <button 
                            type="button"
                            class="agregar-carrito"
                            data-id="<?= $producto['id'] ?>"
                            data-titulo="<?= htmlspecialchars($producto['titulo']) ?>"
                            data-precio="<?= preg_replace('/[^0-9]/', '', $producto['precio']) ?>"
                            data-imagen="<?= htmlspecialchars($producto['imagen']) ?>">
                                <img src="/assets/img/carrito.png" width="20px">
                                Agregar a carrito
                            </button>
                            <p class="tag">
                                <?= htmlspecialchars($producto['categoria']) ?>
                            </p>
                        </div>
                    </div>
                    <!--Modal-->
                    <div id="modalCarrito" class="modal-carrito">
    <div class="contenido-carrito">
        <span class="cerrar-carrito">&times;</span>

        <h2>Tu Carrito</h2>
        <hr>

        <div id="listaCarrito">
            <!-- productos dinámicos -->
        </div>

        <hr>

        <div class="footer-carrito">
            <button id="comprarAhora">
                <img src="/assets/img/bolsa.png" width="30px">
                Realizar compra
            </button>

            <div class="total-carrito">
                Total: $<span id="totalCarrito">0</span> MXN
            </div>
        </div>
    </div>
</div>
                    <div id="producto_<?= $producto['id'] ?>" class="ver_mas">
                        <div class="detalles">
                            <span class="cerrar">&times;</span>
                            <center><h3><?= htmlspecialchars($producto['titulo']) ?></h3></center>
                            <center><img src="<?= htmlspecialchars($producto['imagen']) ?>" width="200px"></center>
                            <center><p><?= htmlspecialchars($producto['descripcion']) ?></p></center>
                            <center><p class="precio"><?= htmlspecialchars($producto['precio']) ?></p></center>
                            <label class="cantidad">
                                Cantidad:
                                <input 
                                id="cantidad"
                                name="cantidad"
                                type="number"
                                min="1"
                                value="1">
                            </label>
                            <div class="acciones">
                                <button 
                            type="button"
                            class="agregar-carrito"
                            data-id="<?= $producto['id'] ?>"
                            data-titulo="<?= htmlspecialchars($producto['titulo']) ?>"
                            data-precio="<?= preg_replace('/[^0-9]/', '', $producto['precio']) ?>"
                            data-imagen="<?= htmlspecialchars($producto['imagen']) ?>">
                                <img src="/assets/img/carrito.png" width="20px">
                                Agregar a carrito
                            </button>
                                    <button class="btn-comprar" type="button">
                                        <img src="/assets/img/bolsa.png" width="20px">
                                        Comprar Ahora
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <center><p>
                            No hay productos disponibles en esta categoría.
                        </p></center>
                <?php endif; ?>
                    </div>
                <div id="modal" class="categorias">
                     <div class="categorias_catalogo">
                    <span class="cerrar">&times;</span>
                    <h4><img src="/assets/img/categorias.png" width="15px">Categorias</h4>
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
        <script src="../assets/js/Catalogo_Tienda.js"></script>
        <script src="../assets/js/barra.js"></script>
    </body>
</html>
