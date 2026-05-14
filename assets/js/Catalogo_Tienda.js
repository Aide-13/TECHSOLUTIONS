/* =========================
   FUNCIONES GENERALES
========================= */
function abrirModal(modal) {
  if (modal) {
    modal.style.display = "block";
  }
}

function cerrarModal(modal) {
  if (modal) {
    modal.style.display = "none";
  }
}


/* =========================
   MODAL DE CATEGORÍAS
========================= */
const modalCategorias = document.getElementById("modal");
const btnAbrirCategorias = document.getElementById("abrir_categorias");

if (modalCategorias && btnAbrirCategorias) {
  const btnCerrarCategorias = modalCategorias.querySelector(".cerrar");

  btnAbrirCategorias.addEventListener("click", (e) => {
    e.preventDefault();
    abrirModal(modalCategorias);
  });

  if (btnCerrarCategorias) {
    btnCerrarCategorias.addEventListener("click", () => {
      cerrarModal(modalCategorias);
    });
  }
}


/* =========================
   MODALES DE PRODUCTOS
========================= */
const botonesDetalles = document.querySelectorAll(".abrir-detalle");
const modalesProductos = document.querySelectorAll(".ver_mas");

// Abrir modal correspondiente
botonesDetalles.forEach((boton) => {
  boton.addEventListener("click", (e) => {
    e.preventDefault();

    const idModal = boton.getAttribute("data-target");
    const modal = document.getElementById(idModal);

    abrirModal(modal);
  });
});

// Cerrar modal con botón X
modalesProductos.forEach((modal) => {
  const btnCerrar = modal.querySelector(".cerrar");

  if (btnCerrar) {
    btnCerrar.addEventListener("click", () => {
      cerrarModal(modal);
    });
  }
});


/* =========================
   CERRAR AL HACER CLICK FUERA
========================= */
window.addEventListener("click", (e) => {

  // Cerrar modal de categorías
  if (e.target === modalCategorias) {
    cerrarModal(modalCategorias);
  }

  // Cerrar modales de productos
  modalesProductos.forEach((modal) => {
    if (e.target === modal) {
      cerrarModal(modal);
    }
  });
});


/* =========================
   CERRAR CON TECLA ESC
========================= */
window.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {

    // Cerrar categorías
    if (
      modalCategorias &&
      modalCategorias.style.display === "block"
    ) {
      cerrarModal(modalCategorias);
    }

    // Cerrar productos
    modalesProductos.forEach((modal) => {
      if (modal.style.display === "block") {
        cerrarModal(modal);
      }
    });
  }
});

const carrito = JSON.parse(localStorage.getItem("carrito")) || [];

const botonesAgregar = document.querySelectorAll(".agregar-carrito");
const modalCarrito = document.getElementById("modalCarrito");
const abrirCarrito = document.getElementById("abrir_carrito");
const cerrarCarrito = document.querySelector(".cerrar-carrito");
const listaCarrito = document.getElementById("listaCarrito");
const totalCarrito = document.getElementById("totalCarrito");

botonesAgregar.forEach(btn => {
    btn.addEventListener("click", () => {
        const producto = {
            id: btn.dataset.id,
            titulo: btn.dataset.titulo,
            precio: parseFloat(btn.dataset.precio),
            imagen: btn.dataset.imagen,
            cantidad: 1
        };

        const existente = carrito.find(item => item.id === producto.id);

        if(existente){
            existente.cantidad++;
        } else {
            carrito.push(producto);
        }

        guardarCarrito();
        renderCarrito();
    });
});

function guardarCarrito(){
    localStorage.setItem("carrito", JSON.stringify(carrito));
}

function renderCarrito(){
    listaCarrito.innerHTML = "";
    let total = 0;

    carrito.forEach((producto,index)=>{

        total += producto.precio * producto.cantidad;

        listaCarrito.innerHTML += `
            <div class="item-carrito">
                <img src="${producto.imagen}">
                
                <div class="info-carrito">
                    <h3>${producto.titulo}</h3>
                    <p>Cantidad: ${producto.cantidad}</p>
                    <p class="precio-carrito">
                        $${producto.precio * producto.cantidad} MXN
                    </p>
                </div>

                <button onclick="eliminarProducto(${index})">
                    Eliminar
                </button>
            </div>
        `;
    });

    totalCarrito.textContent = total;
}

function eliminarProducto(index){
    carrito.splice(index,1);
    guardarCarrito();
    renderCarrito();
}

abrirCarrito.addEventListener("click",(e)=>{
    e.preventDefault();
    modalCarrito.style.display="block";
    renderCarrito();
});

cerrarCarrito.addEventListener("click",()=>{
    modalCarrito.style.display="none";
});

window.addEventListener("click",(e)=>{
    if(e.target === modalCarrito){
        modalCarrito.style.display="none";
    }
});