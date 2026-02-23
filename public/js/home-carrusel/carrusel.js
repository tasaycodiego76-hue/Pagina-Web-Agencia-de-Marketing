// Espera a que todo esté visible antes de iniciar
function startImageCarousel() {
    const track = document.getElementById('track');
    const slides = document.querySelectorAll('.image-slide');
    
    if (!track || slides.length === 0) return;

    const slideWidth = slides[0].offsetWidth;
    
    // Si el ancho es 0, el elemento está oculto, reintenta
    if (slideWidth === 0) {
        setTimeout(startImageCarousel, 200);
        return;
    }

    const totalOriginal = slides.length / 2;
    let position = 0;

    function animate() {
        position -= 0.5;

        if (Math.abs(position) >= slides[0].offsetWidth * totalOriginal) {
            position = 0;
        }

        track.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
}

// Inicia cuando carga la página
document.addEventListener('DOMContentLoaded', startImageCarousel);



//MAQUINA DE ESCRIBIR
const frases = [
  "Fotografía de bodas inolvidables...",
  "Sesiones de embarazo llenas de magia...",
  "Smash cake llenos de ternura...",
  "Retratos que cuentan historias..."
];

let j = 0;
let borrando = false;
let actual = 0;

function escribir() {
  const texto = frases[actual];
  const display = document.getElementById("typewriter");

  if (!borrando && j <= texto.length) {
    display.innerText = texto.substring(0, j++);
    setTimeout(escribir, 100);
  } else if (borrando && j >= 0) {
    display.innerText = texto.substring(0, j--);
    setTimeout(escribir, 50);
  } else {
    borrando = !borrando;
    if (!borrando) actual = (actual + 1) % frases.length;
    setTimeout(escribir, 1000);
  }
}

document.addEventListener("DOMContentLoaded", escribir);


//Desaparece y aparece cambio de imagen cada 3 segundo INICIO
document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let currentIndex = 0;

    function changeSlide() {
        slides[currentIndex].style.opacity = "0"; // Oculta la imagen actual
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].style.opacity = "1"; // Muestra la siguiente imagen
    }

    setInterval(changeSlide, 3000); // Cambia cada 3 segundos
});















