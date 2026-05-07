function abrirModal() {
    document.getElementById('modal').style.display = 'flex';
  }

  function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
  }

  window.onclick = function(e) {
    const modal = document.getElementById('modal');
    if (e.target === modal) {
      cerrarModal();
    }
  }

    function abrirModal2() {
      document.getElementById('modal2').style.display = 'flex';
    }

    function cerrarModal2() {
      document.getElementById('modal2').style.display = 'none';
    }
    document.querySelectorAll('.flip-card').forEach(card => {
      card.addEventListener('click', () => card.classList.toggle('is-flipped'));
    });


function abrirModal3() {
      document.getElementById('modal3').style.display = 'flex';
    }

    function cerrarModal3() {
      document.getElementById('modal3').style.display = 'none';
    }   

    document.querySelectorAll('.flip-card').forEach(card => {
      card.addEventListener('click', () => card.classList.toggle('is-flipped'));
    });

  function abrirModal4() {
      document.getElementById('modal4').style.display = 'flex';
    }

    function cerrarModal4() {
      document.getElementById('modal4').style.display = 'none';
    }
    document.querySelectorAll('.flip-card').forEach(card => {
      card.addEventListener('click', () => card.classList.toggle('is-flipped'));
    });

        document.addEventListener('DOMContentLoaded', () => {
    const sliderContent = document.querySelector('.slider-content');
    const sliderItems = document.querySelectorAll('.slider-item');
    const prevButton = document.querySelector('.slider-button.prev');
    const nextButton = document.querySelector('.slider-button.next');
    const dotsContainer = document.querySelector('.slider-dots');
    const dots = document.querySelectorAll('.dot');

    let currentIndex = 0;
    const totalItems = sliderItems.length;
    let autoSlideInterval; 
    const slideDuration = 4000; 

    function updateSlider() {
        sliderContent.style.transform = `translateX(-${currentIndex * 100}%)`;

        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
        updateSlider();
    }

    function startAutoSlide() {
        stopAutoSlide();
        autoSlideInterval = setInterval(nextSlide, slideDuration);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    prevButton.addEventListener('click', () => {
        stopAutoSlide(); 
        currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
        updateSlider();
        startAutoSlide(); 
    });

    nextButton.addEventListener('click', () => {
        stopAutoSlide(); 
        nextSlide(); 
        startAutoSlide(); 
    });
    dots.forEach(dot => {
        dot.addEventListener('click', (event) => {
            stopAutoSlide();
            const index = parseInt(event.target.dataset.index);
            currentIndex = index;
            updateSlider();
            startAutoSlide();
        });
    });

    sliderContent.parentNode.addEventListener('mouseenter', stopAutoSlide);
    sliderContent.parentNode.addEventListener('mouseleave', startAutoSlide);


    updateSlider();
    startAutoSlide();
});