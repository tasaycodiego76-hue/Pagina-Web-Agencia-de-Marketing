








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



















