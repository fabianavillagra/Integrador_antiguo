<?php
// Incluir el archivo de conexión a la base de datos
include 'conn.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombreCompleto = $_POST['nombre'];
    $cantidadObras = $_POST['cant_obras'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $numContacto = $_POST['num_contacto'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];

    // Preparar la consulta SQL para insertar datos en la tabla autores
    $sql = "INSERT INTO autor (nombre_completo, cantidad_obras, fecha_nacimiento, num_contacto, correo, pais, ciudad) 
            VALUES ('$nombreCompleto', $cantidadObras, '$fechaNacimiento', '$numContacto', '$correo', '$pais', '$ciudad')";

    if ($conn->query($sql) === TRUE) {
        //echo "Registro exitoso";
        echo "<script>setTimeout(function() { alert('Registro exitoso'); window.location.href = 'registroautores.php'; }, 1000);</script>";
        //include 'registroautores.php';
    } else {
        echo "Error al registrar datos: " . $conn->error;
    }
}

// Cerrar la conexión
//$conn->close();
?>
