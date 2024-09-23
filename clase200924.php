<?php

$array1 = [];
$array2 = array();

$array1 = ['a','b','c','d',1];

for ($i=0;$i<count($array1);$i++){
    echo $array1[$i];
}

$array2=[
    "modo"=>'ALGMIG',
    "longitud"=>16,
    "caracteres"=>"latinos"
];

foreach ($array2 as $clave=>$valor){
    echo "<a href='$clave'>$valor</a><br>";
}

echo "<br>";
foreach ($array1 as $item){
    echo "$item<br>";
}