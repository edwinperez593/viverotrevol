let currentSlide = 0;

function showSlide(index) {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    if (index < 0) {
        currentSlide = totalSlides - 1;
    } else if (index >= totalSlides) {
        currentSlide = 0;
    } else {
        currentSlide = index;
    }

    const translateValue = -currentSlide * 100 + '%';
    sliderWrapper.style.transform = 'translateX(' + translateValue + ')';
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Cambiar de slide cada 5 segundos
setInterval(nextSlide, 5000);
/////////////////


