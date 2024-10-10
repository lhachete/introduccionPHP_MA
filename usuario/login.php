<?php
    $titulo="Iniciar Sesion";
    $labelUsuario="Escribe aquí tu usuario";

    //print_r($_SERVER)
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?=$titulo?></title>
</head>
<body>
<form action="login.php">
    <label for="user"><?=$labelUsuario?></label>
    <input name="usuario" id="user" type="text" placeholder="Escriba su usuario">
    </br>

    <label for="pass">Escribe tu contraseña</label>
    <input name="contrasenya" id="pass" type="password" placeholder="Escriba su password">
    </br>
    <input type="submit" value="Enviar">


</form>

</body>
</html>