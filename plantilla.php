<?php
// Incluir el archivo de conexión a la base de datos
include 'conn.php';

// Consulta para obtener los autores
$sql = "SELECT * FROM autor";
$result = $conn->query($sql);

// Mostrar los datos en la tabla HTML si existen resultados
if ($result->num_rows > 0) 

// Cerrar la conexión a la base de datos
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Principal</title>
  <link rel="stylesheet" href="plantilla.css" />
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">

  <div class="menu-horizontal">
    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
    </div>
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <i class="fas fa-user"></i>
            <h4>WRITELIT</h4>
        </div>
    
        <div class="options__menu">	
            <a href="usuario.html" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="far fa-heart" title="Favoritos"></i>
                    <h4>Favoritos</h4>
                </div>
            </a>
    
            <a href="#">
                <div class="option">
                    <i class="far fa-clock" title="Historial"></i>
                    <h4>Historial</h4>
                </div>
            </a>
    
            <a href="#">
                <div class="option">
                    <i class="fas fa-book-open" title="Mis Obras"></i>
                    <h4>Mis Obras</h4>
                </div>
            </a>
    
            <a href="#">
              <div class="option">
                  <i class="fas fa-question-circle" title="Ayuda"></i>
                  <h4>Ayuda y Soporte</h4>
              </div>
          </a>
    
            <a href="#">
                <div class="option">
                    <i class="fas fa-cog" title="Configuracion"></i>
                    <h4>Configuración</h4>
                </div>
            </a>
    
            <a href="index.html">
              <div class="option">
                  <i class="fas fa-sign-out-alt" title="Configuracion"></i>
                  <h4>Cerrar Sesión</h4>
              </div>
          </a>
    
        </div>
    
    </div>

    <div class="crear">
      <button class="crear">CREAR</button>
    </div>
    <div class="titulo-container">
      <h1 class="titulo">WRITELIT</h1>
    </div>
    <div class="buscador">
      <input type="text" placeholder="Buscar...">
    </div>

    </div>

  </div>

  <section>
    <div class="menu-horizontal">
      <a href="carrusel.html" class="boton">CULTURA/LENGUA</a>
      <a href="carrusel.html" class="boton">AUTORES/AS</a>
      <a href="carrusel.html" class="boton">GÉNERO</a>
      <a href="carrusel.html" class="boton">CATEGORÍA</a>
    </div>
  </section>
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="plantilla.js"></script>
</body>
</html>
