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
  <link rel="stylesheet" href="registroautor.css" />
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
    
            <a href="index.html" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
    
            <a href="php/registrar.php">
                <div class="option">
                    <i class="fas fa-users" title="Usuarios"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>
    
            <a href="registroautores.php">
                <div class="option">
                    <i class="fas fa-user-friends" title="Autores"></i>
                    <h4>Autores</h4>
                </div>
            </a>
    
            <a href="php/categorias.php">
                <div class="option">
                    <i class="fas fa-tags" title="Categorias"></i>
                    <h4>Categorías </h4>
                </div>
            </a>
    
            <a href="php/lenguaycultura.php">
              <div class="option">
                  <i class="fas fa-language" title="Cultura y lengua"></i>
                  <h4>Culturas/Lenguas</h4>
              </div>
          </a>
    
            <a href="php/generos.php">
                <div class="option">
                    <i class="fas fa-rocket" title="Géneros Litearrios"></i>
                    <h4>Géneros Literarios</h4>
                </div>
            </a>

			<a href="#">
                <div class="option">
                    <i class="fas fa-cog" title="Configuración"></i>
                    <h4>Configuración</h4>
                </div>
            </a>
    
            <a href="index.html">
              <div class="option">
                  <i class="fas fa-sign-out-alt" title="Cerrar sesión"></i>
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
  
  <div class="registroautor">
    <h2 class="titulo">Registro Nuevo Autor</h2>
        <form action="registroautor.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre Completo" required>
            <input type="number" name="cant_obras" placeholder="Cantidad de Obras" min="0" required>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
            <input type="tel" name="num_contacto" placeholder="Número de Contacto" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="text" name="pais" placeholder="País" required>
            <input type="text" name="ciudad" placeholder="Ciudad (Opcional)" required>
            <input type="submit" value="REGISTRAR">
        </form>

    <div class="table-container">
        <h2>Lista de Autores</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Cantidad Obras</th>
                    <th>Fecha Nacimiento</th>
                    <th>Número de contacto</th>
                    <th>Correo</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                 <?php include 'mostrarautores.php'; ?>
            </tbody>
        </table>
    </div>
    <script>
    function copyToForm(id, nombre, cant_obras, fecha_nacimiento, num_contacto, correo, pais, ciudad) {
        document.getElementById('editId').value = id;
        document.getElementById('editNombre').value = nombre;
        document.getElementById('editCantObras').value = cant_obras;
        document.getElementById('editFechaNacimiento').value = fecha_nacimiento;
        document.getElementById('editNumContacto').value = num_contacto;
        document.getElementById('editCorreo').value = correo;
        document.getElementById('editPais').value = pais;
        document.getElementById('editCiudad').value = ciudad;
        document.getElementById('editButton').value = 'EDITAR';
        document.getElementById('editForm').action = 'editar_autor.php';
    }
    </script>

  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="usuario.js"></script>
</body>
</html>
