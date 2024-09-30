<?php
//Quiero que se tengan que definir los tipos de datos en los parámetros de las funciones
declare(strict_types=1);
//Tengo que utilizar o crear el array que contiene los productos con los que voy a hacer los tickets
include_once ('./productos.php');

//Constantes de parámetros de función
const TICKETS1_5 = 1;
const TICKETS5_10 = 2;
const TICKETS20_70 = 3;

//Tengo que recibir el parámetro con la cantidad máxima de los tickets
if (!isset($_GET['cantidad'])){
    echo "No se ha recibido la cantidad con la que se desea generar tickets";
}else{
    $cantidad = $_GET['cantidad'];
}

//Tengo que definir la función de generarTickets
function generarTickets(float $valorTotal,int $valorMaxTickets=1):array{
    $salida = [];
    /*GenerarTickets con un valor máximo según el parámetro
    y ver si nos cabe en el total restante*/
    /*
     * TODO tengo que cambiar el $valorMaxTicket por su valor superior
     */

    $producto = obtenerProductoAleatorio(5);



    return $salida;
}

function obtenerProductosQueValgan (int $valorTotalProductos):array|bool{

    return false;
}

function obtenerProductoAleatorio(int $maximoPrecio):string{
    $posicionAleatoria=mt_rand(0,count(PRODUCTOS));
    $claveProductoSeleccionado="";
    foreach(PRODUCTOS as $clave=>$producto){
        $i=0;
        if ($i==$posicionAleatoria && $producto<=$maximoPrecio){
            $claveProductoSeleccionado=$clave;
        }
        else{
            obtenerProductoAleatorio($maximoPrecio);
        }
    }
    return $claveProductoSeleccionado;
}

function formatearTicket(array $datosTicket):string{
    $ticket="";

    return $ticket;
}

//Tengo que imprimir la respuesta que he obtenido de la función
echo "El resultado de los tickets generados es:";
foreach (generarTickets(TICKETS5_10) as $items ){
    echo formatearTicket($item);
}

