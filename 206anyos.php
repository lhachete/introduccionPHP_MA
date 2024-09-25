<?php

const EDAD_JUBILACION=67;
echo "<h1>Ejercicio de fechas y datos por URL</h1>";

//print_r($_GET);

if (!isset($_GET["edad"])){
    echo "No se ha pasado ninguna edad por parámetro. 
    Por favor, deje de ser un inútil y ponga la clave correcta";
}else{
    $edad=$_GET["edad"];

    echo "La edad actual es: $edad y dentro de 10 años tendra "
        .$edad+10 ." y hace 10 años tenia ".$edad-10;

    $anyosPorTrabajar=EDAD_JUBILACION-$edad;
    $anyoActual=date("Y");

    echo "<br>La pava o el pavo se jubilará el año ". $anyoActual+$anyosPorTrabajar;
}


