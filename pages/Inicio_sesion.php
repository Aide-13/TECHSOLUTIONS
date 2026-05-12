<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Iniciar Sesión | TechSolutions</title>
    <link rel="stylesheet" href="../assets/css/Barra.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/Inicio_sesion.css?v=<?php echo time(); ?>">
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


    <div class="contenido">
        <div class="seccion">
            <center><img src="../assets/img/logotipo.png" width="650px"></center>
        </div>
        <div class="seccion">
            <div class="cajas">
                <h2>Iniciar Sesión</h2>
                <input id="usuario" name="usuario" type="text" placeholder="Correo electrónico o usuario">
                <input id="contraseña" name="contraseña" type="password" placeholder="Contraseña">
                <button type="submit">Iniciar Sesión</button>
                <a href="#" id="abrir_modal"> Olvide mi contraseña</a>

                <hr class="separador">

                <a href="Crear_cuenta.php"> No tienes cuenta registrate aqui </a>
            </div>
        </div>
    </div>

    <div id="modal" class="modal_contraseña">
        <div class="cambio_contraseña">
            <span class="cerrar">&times;</span>
            <h3>Olvide mi contraseña</h3>
            <div class="contenido_2">
                <input id="usuario" name="usuario" type="text" placeholder="Correo electrónico o usuario">
                <button type="submit">Enviar PIN</button>
                <div class="pin">
                    <input id="pin" name="pin" type="text" placeholder="0">
                    <input id="pin" name="pin" type="text" placeholder="0">
                    <input id="pin" name="pin" type="text" placeholder="0">
                    <input id="pin" name="pin" type="text" placeholder="0">
                </div>
                <div class="contraseña">
                    <input id="contraseña" name="contraseña" type="password" placeholder="Contraseña">
                    <input id="confirm_contraseña" name="confirm_contraseña" type="password" placeholder="Confirmar Contraseña">
                    <button type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <p><a href="Contactos.php">Contacto</a></p>
        <p>&copy; 2025 TechSolutions. Todos los derechos reservados.</p>
    </footer>

     <script src="../assets/js/Inicio_sesion.js"></script>
</body>
</html>