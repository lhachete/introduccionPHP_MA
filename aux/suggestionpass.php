<?php
declare(strict_types=1);

const num_caracteres = 16;
const tamanyo_bloques= 4;

const caracteres = [];

echo "<h1>Generador de contraseñas</h1><br>";

$contrasenya= "adbdsbfjhsdf";

/*
 * Voy a definir un patrón para la contraseña, ese patron de contraseñas de X caracteres
 * Tengo que definir cuantos bloques de 4 caracteres voy a tener
 */

$bloques_caracteres = num_caracteres%tamanyo_bloques;

for ($i=0;$i<num_caracteres;$i++){
    $contrasenya.=caracteres[mt_rand(0,count(caracteres))];
}