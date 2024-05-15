<?php

    echo "\n";
    echo "Ingrese su Nota Final: ";
    $notafinal = fgets(STDIN);
if ($notafinal <=10.5) {
    echo "Usted esta aprobado a las justas";
}
elseif (10.5 < $notafinal && $notafinal <= 15) {
    echo "Usted esta aprobado de forma regular";
}
else {
    echo "Usted esta muy bien aprobado";
}
?>