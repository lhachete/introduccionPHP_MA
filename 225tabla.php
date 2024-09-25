<?php

if (!isset($_POST['filas']) && !isset($_POST['columnas'])){
    echo "No se han recibido los datos necesarios para crear la tabla";
}

//print_r($_POST);

$filas=$_POST['filas'];
$columnas = $_POST['columnas'];

echo "<table style='border: 1px solid black'>";
for($i=0;$i<$filas;$i++){
    echo "<tr>";
    for($j=0;$j<$columnas;$j++){
        echo "<td style='border: 1px solid black'>($i,$j)</td>";
    }
    echo "</tr>";
}
echo "</table>";