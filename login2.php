<?php
// Conectamos a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificamos la conexión
if ($conn->connect_error) {
    die("Error de conexión: ". $conn->connect_error);
}

// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificamos si el usuario y contraseña son válidos
    $sql = "SELECT * FROM user WHERE usuario = '$username' AND passd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el usuario y contraseña son válidos, iniciamos la sesión
        session_start();
        $_SESSION["username"] = $username;
        header("Location: trabajo-tareas-interfaz.php"); // Redirigimos al dashboard
        exit;
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}

$conn->close();
?>