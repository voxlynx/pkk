const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(n) {
    slides[currentSlide].classList.remove('active');
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', prevSlide);

showSlide(currentSlide);
