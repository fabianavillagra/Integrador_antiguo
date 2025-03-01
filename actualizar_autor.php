<?php
// Incluir el archivo de conexión a la base de datos
include 'conn.php';

// Verificar si se envió el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $nombreCompleto = $_POST['nombre'];
    $cantidadObras = $_POST['cant_obras'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $numContacto = $_POST['num_contacto'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];

    // Actualizar los datos del autor en la base de datos
    $sql = "UPDATE autor SET nombre_completo='$nombreCompleto', cantidad_obras=$cantidadObras, fecha_nacimiento='$fechaNacimiento', num_contacto='$numContacto', correo='$correo', pais='$pais', ciudad='$ciudad' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>setTimeout(function() { alert('Actualización exitosa'); window.location.href = 'registroautores.php'; }, 1000);</script>";
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
