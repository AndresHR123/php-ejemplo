<?php
//caso1
$numeros = array(1,3,5,2,6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros);
print_r($frutas);
//caso2
$estudiante = array(
    "dni"=>"41558090",
    "edad" =>27,
    "fechanacimiento"=>"2000-01-05",
    "nombres"=>"pedro",
    "apellidos"=>"paredes acero",
    "semestre"=>3,
    "deuda"=>100.50,
    "notafinal"=>11.6);
print_r($estudiante);
foreach($estudiante as $key=>$value) {
    echo $key." - ".$value."\n";
}
//caso 3
$estudiante1 = array(
    "dni"=>"789456123",
    "edad" =>20,
    "fechanacimiento"=>"2004-03-05",
    "nombres"=>"Andres",
    "apellidos"=>"el giganteacero",
    "semestre"=>3,
    "deuda"=>100.50,
    "notafinal"=>16.6);

$estudiante2 = array(
    "dni"=>"456123654",
    "edad" =>25,
    "fechanacimiento"=>"2024-01-05",
    "nombres"=>"julio",
    "apellidos"=>"foriuchacero",
    "semestre"=>5,
    "deuda"=>900.50,
    "notafinal"=>18.6);

$estudiante3 = array(
    "dni"=>"41558090",
    "edad" =>100,
    "fechanacimiento"=>"1527-01-05",
    "nombres"=>"mancocapac",
    "apellidos"=>"atahualpa",
    "semestre"=>2,
    "deuda"=>200.50,
    "notafinal"=>13.6);

$estudiantes = array($estudiante1,$estudiante2,$estudiante3);
foreach($estudiantes as $key1=>$estudiante) {
    echo "Estudiante N° ".($key1+1)."\n";
    foreach($estudiante as $key=>$value){
        echo $key." - ".$value."\n";
    }
}

echo "----------------------------------------------\n";
for($i=0;$i<=count($estudiantes)-1;$i++) {
    echo "Estudiante N° ".($i+1)."\n";
    echo "dni ".$estudiantes[$i]["dni"]."\n";
    echo "edad - ".$estudiantes[$i] ["edad"]."\n";
    echo "fechanacimiento ".$estudiantes[$i] ["fechanacimiento"]."\n";
    echo "nombres ".$estudiantes[$i] ["nombres"]."\n";
    echo "apellidos".$estudiantes[$i] ["apellidos"]."\n";
    echo "semestre - ".$estudiantes[$i]["semestre"]."\n";
    echo "deuda ".$estudiantes[$i] ["deuda"]."\n";
    echo "notafinal - ".$estudiantes[$i]["notafinal"]."\n";
}

$estudiante3 ["notafinal"] = 17.6;

$equipo1 = ["messi", "cueva", "neymar"];
$equipo2 = ["advincula", "lewandoski", "ronaldhino"];
$equipos = array_merge($equipo1, $equipo2);
foreach($equipos as $key=>$equipo) {
     echo $equipo."\n";
}

?>