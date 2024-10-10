<?php
declare(strict_types=1);

//print_r($_SERVER);



if (!isset($_POST['usuario']) and !isset($_POST['contrasenya'])){
    echo "Los datos del usuario no se han recibido correctamente";
}else{
    if (comprobarUsuario($_POST['usuario'],$_POST['contrasenya'])){
        echo "ok";
    }else{
        echo "no ok";
    }
}

function comprobarUsuario(string $nombre,string $contrasenya):bool{
    include_once ('usuarios.php');

    for ($i=0;$i<count($usuarios);$i++){
        $arrayUsuario = $usuarios[$i];
        if ($arrayUsuario['nombre']==$_POST['usuario'] &&
            $arrayUsuario['contrasenya']==$_POST['contrasenya']){
            return true;
        }
    }
    return false;

}



