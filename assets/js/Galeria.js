document.querySelectorAll('.flip-card').forEach(card => {
  const linkGaleria = card.querySelector('.link-galeria');
  const linkVolver = card.querySelector('.link-volver');
  
  if (linkGaleria) {
    linkGaleria.addEventListener('click', (e) => {
      e.preventDefault();
      card.classList.add('is-flipped');
    });
  }

  if (linkVolver) {
    linkVolver.addEventListener('click', (e) => {
      e.preventDefault();
      card.classList.remove('is-flipped');
    });
  }
});

document.querySelectorAll('.inner-flip-card').forEach(inner => {
  inner.addEventListener('click', () => {
    inner.classList.toggle('is-flipped');
  });
});
