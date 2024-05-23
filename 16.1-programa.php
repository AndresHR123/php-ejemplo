<?php
 
include ("16-encapsulamiento.php");
 
$guitarra = new Instrumento("gibson","acustica");
echo "datos de guitarra\n";
echo "nombre :".$guitarra->nombre."\n";
echo "categoria :".$guitarra->categoria."\n";
echo "modelos :".$guitarra->mostrarModelos();
 
$guitarra->nombre ="yamaha";
$guitarra->categoria="electrica";
$guitarra->setearModelos("nylon , alambre , otros");
echo "\ndatos de guitarra\n";
echo "nombre :".$guitarra->nombre."\n";
echo "categoria :".$guitarra->categoria."\n";
echo "modelos :".$guitarra->mostrarModelos()."\n";
echo "tiene cuerda ? :".$guitarra->validarCuerdas();
?>