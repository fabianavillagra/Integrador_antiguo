const carrusel = document.querySelector(".carrusel-items");
const botonAnterior = document.getElementById("anterior");
const botonSiguiente = document.getElementById("siguiente");

let intervalo = null;
let step = 1;

const start = () => {
  intervalo = setInterval(function () {
    carrusel.scrollLeft += step;
    if (carrusel.scrollLeft >= carrusel.scrollWidth - carrusel.clientWidth) {
      step = -1;
    } else if (carrusel.scrollLeft <= 0) {
      step = 1;
    }
  }, 10);
};

const stop = () => {
  clearInterval(intervalo);
};

carrusel.addEventListener("mouseover", () => {
  stop();
});

carrusel.addEventListener("mouseout", () => {
  start();
});

botonAnterior.addEventListener("click", () => {
  carrusel.scrollLeft -= carrusel.clientWidth;
});

botonSiguiente.addEventListener("click", () => {
  carrusel.scrollLeft += carrusel.clientWidth;
});

start();





