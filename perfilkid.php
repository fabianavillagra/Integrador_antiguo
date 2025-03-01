<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>principal</title>
  <link rel="stylesheet" href="perfilkid.css" />
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">

  <div class="titulo-container">
    <h1 class="titulo">WRITELIT</h1>
  </div>
  <div class="recomendaciones">
    <h2 class="titulo">Crear un perfil</h2>
  </div>
  <div class="main-container">

  <div class="carrusel-container">
    <div class="carrusel">
      <div class="carrusel-items">

        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje1.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="pdf.html"><img src="images/personaje2.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje3.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje4.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje5.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje6.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje7.png"></a>
        </div>
        <div class="carrusel-item">
          <a href="index.html"><img src="images/personaje8.png"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="registromenor">
  <h2 class="titulo">Datos</h2>
  <form action="registrokid.php" method="POST"> <!-- Agregar formulario -->
    <input type="text" name="nombre" placeholder="Nombre del menor" required>
    <select name="edad" required>
      <option value="" disabled selected>Selecciona la edad</option>
      <option value="10-12">10-12 AÑOS</option>
      <option value="7-9">7-9 AÑOS</option>
      <option value="4-6">4-6 AÑOS</option>
      <option value="2-3">2-3 AÑOS</option>
    </select>
    <input type="submit" value="SIGUIENTE">
  </form> 
</div>
</div>
</body>
</html>
