<?php
include("14-herencia.php");
echo "------------------EJEMPLO DE HERENCIA CON ANIMALES------------------------ \n";
$perro = new Perro("Coimita","Verde", false, "audioperro.mp3");
$gato = new Gato("Garfield","Rojo", false, "cat-meow-14536.mp3");
$pollo = new Pollo("pipio","Amarillo", false, "audiopollo.mp3");

echo "-*-*-*-*-*-*-*-*-*elija que sonido de animal quiere escuchar-*-*-*-*-*-*-. \n";
$eleccion = fgets(STDIN);

switch ($eleccion) {
    case 1:
        
        echo $perro->obtenerInformacion()."\n";
        echo $perro->hacerSonido();
        break;
    
    case 2:
        
        echo $gato->obtenerInformacion()."\n";
        echo $gato->hacerSonido();
        break;
    case 3:
        
        echo $pollo->obtenerInformacion()."\n";
        echo $pollo->hacerSonido();
            break;
    default:
        # code...
        break;
}

?>