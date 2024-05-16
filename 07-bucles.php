<?php
    $contador=1;
    $sumanotas=0;
    while ($contador<=3) {
        echo "Ingrese su Notas : ";
        $notas = fgets(STDIN);
        $sumanotas = $sumanotas+$notas;
        $contador++;//$contador = $contador+1
    }
    $notapromedio = $sumanotas/3;
    echo "\n El promedio de notas es : ".$notapromedio;
    //logica que me permite dar el mayor de 5 numeros
    for ($i=1; $i<=5; $i++) {
        echo "Ingrese un numero : ".$notapromedio."\n";
        $numero = fgets(STDIN);
        if ($mayor<$numero) {
            $mayor=$numero;
        }
    }
    echo "El numero mayor es :".$mayor;
?>