
/*Modal Categorias*/
function abrirModal(modal) {
  modal.style.display = 'block';
}

function cerrarModal(modal) {
  modal.style.display = 'none';
}

const modalCategorias = document.getElementById('modal');
const btnAbrirCategorias = document.getElementById('abrir_categorias');
const btnCerrarCategorias = modalCategorias.querySelector('.cerrar');

btnAbrirCategorias.addEventListener('click', (e) => {
  e.preventDefault();
  abrirModal(modalCategorias);
});

btnCerrarCategorias.addEventListener('click', () => {
  cerrarModal(modalCategorias);
});

/*Modal Productos*/
const botonesDetalles = document.querySelectorAll('.abrir-detalle');

botonesDetalles.forEach((boton) => {
  const idModal = boton.getAttribute('data-target');
  const modal = document.getElementById(idModal);
  const btnCerrar = modal.querySelector('.cerrar');

  boton.addEventListener('click', (e) => {
    e.preventDefault();
    abrirModal(modal);
  });

  btnCerrar.addEventListener('click', () => {
    cerrarModal(modal);
  });

  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      cerrarModal(modal);
    }
  });
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
   
    if (modalCategorias.style.display === 'block') cerrarModal(modalCategorias);

    botonesDetalles.forEach((boton) => {
      const idModal = boton.getAttribute('data-target');
      const modal = document.getElementById(idModal);
      if (modal.style.display === 'block') cerrarModal(modal);
    });
  }
});


