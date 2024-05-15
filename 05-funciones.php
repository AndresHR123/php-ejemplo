<?php

function obtenerSaludo($parametro)
{
    return "hola como estas ".$parametro;
}


function mostrarDatos($nombres,$apellidos,$curso,$semestre) {
$mensaje = "hola soy ".$nombres." ".$apellidos
." y estoy en el curso ".$curso." del ".$semestre;
return $mensaje;
}


echo obtenerSaludo("Andres");
echo mostrarDatos("Andres","Herbas",
"backend developer web","tercer semestre");
?>