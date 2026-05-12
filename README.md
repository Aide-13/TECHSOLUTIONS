# TechSolutions

# <<<<<<< HEAD

> > > > > > > v-1/vainilla

### Plataforma web corporativa con tienda simulada, blog y galería de proyectos

TechSolutions es una plataforma web profesional, moderna y responsiva desarrollada como caso de estudio para la materia de MVC. Representa el sitio corporativo de una empresa de servicios tecnológicos, incluyendo presentación de servicios, blog de novedades, galería de proyectos filtrable, formulario de contacto y una tienda online simulada con carrito de compras interactivo.

---

## Funcionalidades principales

<<<<<<< HEAD

- **Inicio** — Slider principal con promociones/novedades, aside lateral con testimonios y enlaces rápidos
- **Servicios** — Presentación del perfil empresarial (misión, visión y objetivo) y catálogo de servicios
- **Blog y Noticias** — Artículos y novedades del sector tecnológico almacenados en base de datos
- **Galería de Proyectos** — Álbum filtrable por categorías (desarrollo web, ciberseguridad, consultoría, etc.)
- **Tienda** — Catálogo de productos y licencias con carrito de compras simulado, filtros y resumen interactivo
- **Contacto** — Formulario con validación de campos y mensajes de confirmación
- # Diseño responsivo adaptable a cualquier dispositivo
- **Inicio** — Slider principal con promociones/novedades, aside lateral con testimonios y enlaces rápidos
- **Servicios** — Presentación del perfil empresarial (misión, visión y objetivo) y catálogo de servicios
- **Blog y Noticias** — Artículos y novedades del sector tecnológico almacenados en base de datos
- **Galería de Proyectos** — Álbum filtrable por categorías (desarrollo web, ciberseguridad, consultoría, etc.)
- **Tienda** — Catálogo de productos y licencias con carrito de compras simulado, filtros y resumen interactivo
- **Contacto** — Formulario con validación de campos y mensajes de confirmación
- Diseño responsivo adaptable a cualquier dispositivo
  > > > > > > > v-1/vainilla

> ⚠️ La tienda es una simulación. No procesa pagos reales ni transacciones económicas.

---

## Tecnologías utilizadas

<<<<<<< HEAD
| Capa | Tecnología |
|------|-----------|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP |
| Base de datos | MySQL |
=======
| Capa | Tecnología |
| ------------- | -------------------------------- |
| Frontend | HTML, CSS, JavaScript, Bootstrap |
| Backend | PHP |
| Base de datos | MySQL |

> > > > > > > v-1/vainilla

---

## Requisitos previos

- [PHP](https://www.php.net/downloads) 7.4 o superior
- [MySQL](https://dev.mysql.com/downloads/) y [DBeaver](https://dbeaver.io/download/) para gestionar la base de datos
- Un servidor local para PHP (por ejemplo [XAMPP](https://www.apachefriends.org/) o similar)

---

## Cómo correr el proyecto

### 1. Clonar el repositorio

```bash
git clone https://github.com/Aide-13/TECHSOLUTIONS.git
```

### 2. Configurar la base de datos

1. Abre **DBeaver** y crea una nueva conexión MySQL.
2. Importa el archivo `.sql` para generar las tablas y datos iniciales.
3. Actualiza las credenciales de conexión en el archivo de configuración (por ejemplo `config.php`):

```php
$host = 'localhost';
$db   = 'techsolutions_tienda';
$user = 'tu_usuario';
$pass = 'tu_contraseña';
```

### 3. Levantar el servidor PHP

```bash
php -S localhost:3000
```

### 4. Abrir la aplicación

```
http://localhost:3000
```

---

# <<<<<<< HEAD

> > > > > > > v-1/vainilla

---

## Base de datos

La BD almacena la información dinámica del sitio:

<<<<<<< HEAD
| Tabla | Contenido |
|-------|-----------|
| `productos` | Nombre, descripción, precio, imagen y categoría de cada producto/licencia |
| `blog` | Artículos del blog con título, contenido, imagen y fecha |
| `noticias` | Novedades y eventos del sector tecnológico |
| `servicios`| Servicios disponibles con características e imagen |
=======
| Tabla | Contenido |
| ----------- | ------------------------------------------------------------------------- |
| `productos` | Nombre, descripción, precio, imagen y categoría de cada producto/licencia |
| `blog` | Artículos del blog con título, contenido, imagen y fecha |
| `noticias` | Novedades y eventos del sector tecnológico |
| `servicios` | Servicios disponibles con características e imagen |

> > > > > > > v-1/vainilla

---

## Sobre la tienda

La tienda muestra productos y licencias de software con sus características y precios. El carrito de compras es completamente interactivo (agregar, quitar, ajustar cantidades y ver resumen), pero **no procesa pagos reales**. Esto es intencional ya que operar una pasarela de pagos requiere permisos fiscales.

---

## 📌 Notas

- Este proyecto fue desarrollado como caso de estudio para la materia de **Modelo Vista Controlador (MVC)**.
- Se aplicó el patrón MVC para separar la lógica de negocio, la presentación y el acceso a datos.
- El objetivo principal fue practicar el desarrollo frontend y backend integrado con una arquitectura ordenada.

---

## Desarrollo

**Período:** Septiembre 2025 — Octubre 2025

---

## Desarrolladores

# <<<<<<< HEAD

> > > > > > > v-1/vainilla

- Aide garcia Martinez - FrontEnd, BackEnd, Bases de Datos
- Azucena Ceja Rojas - Levantamiento de requerimientos, Diseño UI/UX, Frontend

---
