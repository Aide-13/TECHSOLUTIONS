const modal = document.getElementById('modal');
const linkAbrir = document.getElementById('abrir_modal');
const btnCerrar = document.querySelector('.cerrar');

linkAbrir.addEventListener('click', (e) => {
  e.preventDefault(); 
  modal.style.display = 'block';
});

btnCerrar.addEventListener('click', () => {
  modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});

