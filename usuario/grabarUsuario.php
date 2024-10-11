<?php


if (!isset($_POST['usuario']) &&
    !isset($_POST['nombre']) &&
    !isset($_POST['apellidos']) &&
        !isset($_POST['direccion'])  &&
        !isset($_POST['contrasenya'])){
    echo "Los parámetros recibidos son incorrectos";
}else{
    $datosUsuario =[
        "nombre"=>$_POST['usuario'],
        "nombreCompleto"=>$_POST['nombre'].$_POST['apellidos'],
        "direccion"=>$_POST['direccion'],
        "contrasenya"=>$_POST['contrasenya'],
        "lenguajes"=>$_POST['lenguajes'] ?: "ninguno"
    ];

    include_once "usuarios.php";
    $usuarios[]=$datosUsuario;

    print_r($usuarios);
}