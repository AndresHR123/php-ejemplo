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
$html = '
    <html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
                padding: 8px;
            }
            th {
                text-align: left;
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h1 style="text-align: center;">Informe de Tareas</h1>
        <table>
            <tr>
                <th>Nombre de la Tarea</th>
                <th>Completada</th>
            </tr>';

// Contenido del informe
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $nombre_tarea = $fila['nombre'];
        $completada = $fila['completada'] ? 'Sí' : 'No';
        
        // Agregar fila de la tabla para cada tarea
        $html .= '
            <tr>
                <td>' . htmlspecialchars($nombre_tarea) . '</td>
                <td>' . htmlspecialchars($completada) . '</td>
            </tr>';
    }
} else {
    // En caso de no haber tareas registradas
    $html .= '
            <tr>
                <td colspan="2">No hay tareas registradas.</td>
            </tr>';
}

// Cerrar la tabla y el HTML
$html .= '
        </table>
    </body>
    </html>';

$dompdf->loadHtml($html);
// Renderizar el PDF
$dompdf->render();

// Generar el archivo PDF
$dompdf->stream("informe_tareas.pdf", array("Attachment" => false));

?>