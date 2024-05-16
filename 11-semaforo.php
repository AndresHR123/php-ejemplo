<?php   
    
    echo "ingrese un numero : \n 1=ROJO, 2=AMARILLO 3=VERDE \n";
    $numero=fgets (STDIN);
    if ($numero = 1) {
        echo "¡pare!";
    }
    elseif ($numero = 2) {
        echo "ESPERA";
    }
    elseif ($numero = 3) {
        echo "AVANZA";
    }
echo "\n-------------------------------------------\n";
    switch ($numero) {
        case 1:
            echo "¡Pare!";
            break;
        case 2:
            echo"¡Espera!";
            break;    
        case 3:
            echo"¡Avanza!";
            break;
        default:
            echo"No ingreso una opcion correcta";
            break;
    }

?>