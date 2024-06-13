<?php
// Conexión a la base de datos (asegúrate de modificar los parámetros según tu configuración)
$conexion = new mysqli("localhost", "root", "", "final");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id = $_POST["id"];

//
$sql = "DELETE FROM tareas WHERE id = '$id'";
//
if ($conexion->query($sql) === TRUE) {
    echo "Tarea actualizada correctamente";
} else {
    echo "Error al actualizar la tarea: " . $conexion->error;
}

$conexion->close();
?>
