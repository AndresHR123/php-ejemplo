<?php
    $luzEncendida=false;
    if($luzEncendida)
        echo "La luz esta encendida";
    else
        echo "La luz esta apagada";
//caso2
$sintomas_covid=[
    "tos"=>true,
    "fiebre"=>false,
    "dolor"=>false,
    "perdida_olfato"=>false];
if($sintomas_covid["tos"] &&
    $sintomas_covid["fiebre"]) {
        echo "\nEstas enfermo tienes covid. Ve a centro de salud";}
else {
        echo"\nAun no estas con covid.";
    }
//caso3
//caso 3, cuenta bancaria
$saldo = 100;
if(!($saldo > 0)) { //$saldo <= 0
echo "\nTiene saldo insuficiente";
}
else {
echo "\nTiene saldo";
}

?>