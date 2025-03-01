const carrusel = document.querySelector(".carrusel-items");

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

let isDragging = false;
let startPosition = 0;
let currentTranslate = 0;

const dragStart = (e) => {
  isDragging = true;
  startPosition = e.clientX || e.touches[0].clientX;
  clearInterval(intervalo);
};

const dragEnd = () => {
  isDragging = false;
  const movedBy = currentTranslate - startPosition;
  if (movedBy < -100) {
    carrusel.scrollLeft += carrusel.clientWidth;
  } else if (movedBy > 100) {
    carrusel.scrollLeft -= carrusel.clientWidth;
  }
  start();
};

const drag = (e) => {
  if (isDragging) {
    const currentPosition = e.clientX || e.touches[0].clientX;
    currentTranslate = startPosition - currentPosition;
    carrusel.scrollLeft += currentTranslate;
  }
};

carrusel.addEventListener("mousedown", dragStart);
carrusel.addEventListener("touchstart", dragStart);

carrusel.addEventListener("mouseup", dragEnd);
carrusel.addEventListener("touchend", dragEnd);

carrusel.addEventListener("mousemove", drag);
carrusel.addEventListener("touchmove", drag);

start();

