document.addEventListener("DOMContentLoaded", () => {
  const nav = document.querySelector("nav");
  const menu = document.querySelector(".menu");
  const footer = document.querySelector("footer");

  let observer;

  function activarObserver() {
    
    // Si es tablet/móvil
    if (window.matchMedia("(max-width: 992px)").matches) {
      
      // Mostrar siempre nav y menu
      if (nav) nav.style.top = "0";
      if (menu) menu.style.top = "0";

      // Si ya había observer, lo desconectamos
      if (observer) observer.disconnect();
      return;
    }

    // Desktop
    observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if (nav) nav.style.top = "-120px";
          if (menu) menu.style.top = "-100px";
        } else {
          if (nav) nav.style.top = "0";
          if (menu) menu.style.top = "0";
        }
      });
    }, {
      threshold: 0.1
    });

    if (footer) {
      observer.observe(footer);
    }
  }

  activarObserver();

  // Detecta cambios de tamaño en tiempo real
  window.addEventListener("resize", () => {
    if (observer) observer.disconnect();
    activarObserver();
  });
});

const toggleBtn = document.getElementById("menu-toggle");
const menu = document.querySelector(".menu");

toggleBtn.addEventListener("click", () => {
    menu.classList.toggle("active");
});