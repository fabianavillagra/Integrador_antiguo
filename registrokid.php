<?php
// Incluir el archivo de conexión a la base de datos
include 'conn.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombrekid = $_POST['nombre'];
    $rangoedad = $_POST['edad']; // Aquí está el cambio
    
    // Preparar la consulta SQL para insertar datos en la tabla kid
    $sql = "INSERT INTO kid (nombre, rangoedad) 
            VALUES ('$nombrekid', '$rangoedad')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir según el rango de edad
        if ($rangoedad == "7-9") {
            header('Location: terceraetapa.html');
            exit();
        } elseif ($rangoedad == "10-12") {
            header('Location: cuartaetapa.html');
            exit();
        } elseif ($rangoedad == "4-6") {
            header('Location: segundaetapa.html');
            exit();
        } elseif ($rangoedad == "2-3") {
            header('Location: primeraetapa.html');
            exit();
        } else {
            // En caso de que no se cumpla ninguna condición
            echo "<script>alert('Rango de edad no válido');</script>";
        }
    } else {
        echo "Error al registrar datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
