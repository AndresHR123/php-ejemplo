<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    echo $nombre;//print_r($nombre,true);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "covid";
//ALMACENAR ID Y COLOCARLO EN LA CONSULTA 
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Actualizar los datos del paciente en la base de datos
        $sql = "UPDATE pacientes SET nombres = '$nombre' WHERE id = 7";
        // Actualiza otros campos de edición aquí

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        echo "Datos actualizados correctamente.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>