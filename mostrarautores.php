<?php
// Incluir el archivo de conexión a la base de datos
include 'conn.php';

// Consulta para obtener los autores
$sql = "SELECT * FROM autor";
$result = $conn->query($sql);

// Mostrar los datos en la tabla HTML si existen resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre_completo"] . "</td>";
        echo "<td>" . $row["cantidad_obras"] . "</td>";
        echo "<td>" . $row["fecha_nacimiento"] . "</td>";
        echo "<td>" . $row["num_contacto"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["pais"] . "</td>";
        echo "<td>" . ($row["ciudad"] ?? "N/A") . "</td>";
        // Enlace para editar con el ID del autor en el parámetro GET
        echo "<td style='text-align: center; vertical-align: middle;'>";
        echo "<a href='editar_autor.php?id=" . $row["id"] . "&nombre=" . urlencode($row["nombre_completo"]) . "&cant_obras=" . $row["cantidad_obras"] . "&fecha_nacimiento=" . urlencode($row["fecha_nacimiento"]) . "&num_contacto=" . $row["num_contacto"] . "&correo=" . urlencode($row["correo"]) . "&pais=" . urlencode($row["pais"]) . "&ciudad=" . urlencode($row["ciudad"] ?? "") . "'><img src='images/editaricono.png' alt='Editar' style='max-height: 30px; width: auto;'>  </a>";
        echo " <a href='eliminar_autor.php?id=" . $row["id"] . "'><img src='images/eliminaricono.png' alt='Eliminar' style='max-height: 30px; width: auto;'></a>";
        echo "</td>";
    }
} else {
    echo "<tr><td colspan='9'>No se encontraron autores</td></tr>";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

