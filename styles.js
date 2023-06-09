
// js code for nav bar hamburger
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
})

document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}))




// js code for landing page
const slides = document.querySelectorAll('.slide');
const dotsContainer = document.querySelector('.dots');

let currentSlide = 0;

function showSlide(slideIndex) {
  slides.forEach((slide) => {
    slide.style.display = 'none';
  });

  slides[slideIndex].style.display = 'block';
}

function showNextSlide() {
  currentSlide++;
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
  updateActiveDot();
}

function updateActiveDot() {
  const dots = document.querySelectorAll('.dots span');
  dots.forEach((dot, index) => {
    dot.classList.remove('active');
    if (index === currentSlide) {
      dot.classList.add('active');
    }
  });
}

slides[currentSlide].style.display = 'block';
dotsContainer.innerHTML = '<span class="active"></span>'.repeat(slides.length);

const slideInterval = setInterval(showNextSlide, 4000);

dotsContainer.addEventListener('click', (event) => {
  if (event.target.tagName === 'SPAN') {
    const dotIndex = Array.from(event.target.parentNode.children).indexOf(event.target);
    currentSlide = dotIndex;
    showSlide(currentSlide);
    updateActiveDot();
    clearInterval(slideInterval);
    slideInterval = setInterval(showNextSlide, 4000);
  }
});
