<?php
require_once 'dompdf/autoload.inc.php';

// Conexión a la base de datos (asegúrate de modificar los parámetros según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener todas las tareas
$sql = "SELECT nombre, completada FROM tareas";
$resultado = $conn->query($sql);

// Crear nuevo objeto PDF con Dompdf
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);
$dompdf->loadHtml('<h1>Informe de Tareas</h1><br>');

// Establecer el título del documento
$dompdf->set_option('defaultFont', 'Arial');
$dompdf->setPaper('A4', 'portrait');

// Contenido del informe
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $nombre_tarea = $fila['nombre'];
        $completada = $fila['completada'] ? 'Sí' : 'No';
        
        // Agregar datos al informe
        $dompdf->loadHtml('<p>Tarea: ' . $nombre_tarea . ' - Completada: ' . $completada . '</p>');
    }
} else {
    $dompdf->loadHtml('<p>No hay tareas registradas.</p>');
}

// Renderizar el PDF
$dompdf->render();

// Generar el archivo PDF
$dompdf->stream("informe_tareas.pdf", array("Attachment" => false));

?>