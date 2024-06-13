<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST["nombre"];
        $dsn="mysql:host=localhost;dbname=final";
        $user="root";//user : usuario
        $pass="";//pass : clave de usuario
        $db = new PDO($dsn, $user, $pass);        
        $tareas = $db->query("
        SELECT * FROM tareas 
        where nombre like '%$nombre%'");
        $resultado=[];
        foreach ($tareas as $row) {
            array_push($resultado,$row);
        }         
        echo json_encode($resultado);        
    } catch (PDOException $e) {        
        echo "Error : ".$e->getMessage();
    }
}
?>