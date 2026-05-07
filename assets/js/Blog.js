const contenedor = document.querySelector('.carrusel-contenedor');
    const testimonios = document.querySelectorAll('.testimonio');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    let indice = 0;

    function mostrarTestimonio(index) {
      const offset = -index * 100;
      contenedor.style.transform = `translateX(${offset}%)`;
    }

    next.addEventListener('click', () => {
      indice = (indice + 1) % testimonios.length;
      mostrarTestimonio(indice);
    });

    prev.addEventListener('click', () => {
      indice = (indice - 1 + testimonios.length) % testimonios.length;
      mostrarTestimonio(indice);
    });

    setInterval(() => {
      indice = (indice + 1) % testimonios.length;
      mostrarTestimonio(indice);
    }, 5000);

    document.querySelectorAll('.like-btn').forEach(button => {
  button.addEventListener('click', function () {
    let contenedor = this.closest('.comentario');
    let articulo_id = contenedor.getAttribute('data-id');
    let likeCountSpan = this.querySelector('.like-count');
    let currentLikes = parseInt(likeCountSpan.textContent);

    likeCountSpan.textContent = currentLikes + 1;

    fetch("like.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: "articulo_id=" + articulo_id
    });
  });
});


