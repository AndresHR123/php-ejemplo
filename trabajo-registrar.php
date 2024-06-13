<?php
// Conexión a la base de datos (debes definir tus propios valores aquí)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener la tarea del formulario
$tarea = $_POST['tarea'];
$realizado = $_POST['realizada'];

// Insertar la tarea en la base de datos
$sql = "INSERT INTO tareas (nombre, completada) VALUES ('$tarea', '$realizado')";

if ($conn->query($sql) === TRUE) {
    echo "Tarea registrada correctamente";
} else {
    echo "Error al registrar la tarea: " . $conn->error;
}

$conn->close();
?>