<?php
$array = array();
$sumaVal = array();

for ($i=0;$i<10;$i++){
    $array[$i]=mt_rand(5.0,10.0);
}

print_r($array);
echo "<br>";

for ($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array);$j++){
        $sumaVal[$i][$j]=$array[$i]+$array[$j];
    }
}

print_r($sumaVal);