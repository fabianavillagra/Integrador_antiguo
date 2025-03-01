<?php
// Incluir el archivo de conexión a la base de datos
include 'conn.php';

// Verificar si se ha proporcionado un ID para eliminar
if (isset($_GET['id'])) {
    // Obtener el ID del autor a eliminar desde la URL
    $id = $_GET['id'];

    // Consulta SQL para eliminar el autor con el ID proporcionado
    $sql = "DELETE FROM autor WHERE id=$id";

    // Ejecutar la consulta de eliminación
    if ($conn->query($sql) === TRUE) {
        // Redireccionar a la página de lista de autores después de eliminar
        echo "<script>setTimeout(function() { alert('Se eliminó exitosamente'); window.location.href = 'registroautores.php'; }, 1000);</script>";
    } else {
        echo "Error al intentar eliminar el autor: " . $conn->error;
    }
} else {
    // Manejar el caso en el que no se proporciona un ID válido
    echo "ID de autor no proporcionado";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
