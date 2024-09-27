<?php
$titulo = "Ejercicio 25";
$tituloPrincipal="Ejercicio para mostrar una tabla";

include_once ("plantilla/encabezado.php");

if (!isset($_POST['filas']) && !isset($_POST['columnas'])){
    echo "No se han recibido los datos necesarios para crear la tabla";
}

//print_r($_POST);

$filas=$_POST['filas'];
$columnas = $_POST['columnas'];

echo "<section class='py-5 text-center container'>";
echo "<table style='border: 1px solid black'>";
for($i=0;$i<$filas;$i++){
    echo "<tr>";
    for($j=0;$j<$columnas;$j++){
        echo "<td style='border: 1px solid black'>($i,$j)</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</section>";

include_once ("plantilla/pie.php");