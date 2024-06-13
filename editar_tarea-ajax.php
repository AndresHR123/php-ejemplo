<?php
// Conexión a la base de datos (asegúrate de modificar los parámetros según tu configuración)
$conexion = new mysqli("localhost", "root", "", "final");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos de la tarea a editar
$id = $_POST["id"];
$nombre = $_POST['nombre'];
$completada = $_POST["completada"];

// Actualizar la tarea en la base de datos
$sql = "UPDATE tareas SET nombre = '$nombre', completada = '$completada' WHERE id = '$id'";

if ($conexion->query($sql) === TRUE) {
    echo "Tarea actualizada correctamente";
} else {
    echo "Error al actualizar la tarea: " . $conexion->error;
}

$conexion->close();
?>