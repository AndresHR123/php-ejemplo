<?php
   
    include("15-polimorfismo.php");
    

    echo "AREA DE TRIANGULO\n";
    echo "Ingresar la base DE TRIANGULO\n";
    $b=fgets(STDIN);
    echo "Ingresar la altura DE TRIANGULO\n";
    $h=fgets(STDIN);
    $triangulo = new Triangulo($b,$h);
    $area=$triangulo->calcularArea();
    echo "El Area del triangulo es: ".$area;

    echo "\n*-*-*-*-*AREA DE RECTANGULO*-*-*-*-*-*\n";
    echo "INGRESE LA BASE :\n";
    $b=fgets(STDIN);
    echo "INGRESE LA ALTURA :\n";
    $a=fgets(STDIN);
    $rectangulo = new Rectangulo($b, $a);
    $area=$rectangulo->calcularArea();
    echo "El Area del triangulo es: ".$area;

    echo "\n*-*-*-*-*AREA DE CIRCULO*-*-*-*-*-*\n";
    echo "INGRESE EL RADIO :\n";
    $r=fgets(STDIN);
    $circulo = new Circulo($r);
    $area=$circulo->calcularArea();
    echo "EL AREA DEL CIRCULO ".$area;

    echo "\n*-*-*-*-*AREA DE CUADRADO*-*-*-*-*-*\n";
    echo "INGRESE EL LADO :\n";
    $lado = fgets (STDIN);
    $calculadora = new Cuadrado ($lado);
    $resultado = $calculadora->calcularArea();
    echo "\nEL AREA DEL CUADRADO ES : ".$resultado;

?>