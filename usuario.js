// Ejecutar función en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

// Declaramos variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

// Evento para mostrar y ocultar menú
function open_close_menu() {
  body.classList.toggle("body_move");
  side_menu.classList.toggle("menu__side_move");
}

// Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página
if (window.innerWidth < 760) {
  body.classList.add("body_move");
  side_menu.classList.add("menu__side_move");
}

// Haciendo el menú responsive (adaptable)
window.addEventListener("resize", function () {
  if (window.innerWidth > 760) {
    body.classList.remove("body_move");
    side_menu.classList.remove("menu__side_move");
  }

  if (window.innerWidth < 760) {
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
  }
});

// Configuración del carrusel
var carrusel = document.querySelector(".carrusel");
var carruselItems = document.querySelector(".carrusel-items");
var carruselItemWidth = document.querySelector(".carrusel-item").offsetWidth;
var carruselItemCount = document.querySelectorAll(".carrusel-item").length;
var currentIndex = 0;
var interval;



// Función para mover el carrusel manualmente
function moveCarrusel() {
  carruselItems.style.transform = "translateX(" + -currentIndex * carruselItemWidth + "px)";
}


// Mover el carrusel hacia la izquierda al hacer click en el botón anterior
document.getElementById("btn_prev").addEventListener("click", function () {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = carruselItemCount - 1;
  }
  moveCarrusel();
});

// Mover el carrusel hacia la derecha al hacer click en el botón siguiente
document.getElementById("btn_next").addEventListener("click", function () {
  currentIndex++;
  if (currentIndex >= carruselItemCount) {
    currentIndex = 0;
  }
  moveCarrusel();
});
