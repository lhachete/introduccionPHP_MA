<?php
    //$num_alumnos=14;
    /*201tresfrases.php: Muestra 3 frases, cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido. Tras ello, introduce dos comentarios, uno de bloque y otro de una línea.*/
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
<h1>Primer ejercicio</h1>
<p>Los alumnos de 2º de DAW del curso 2024-2025 <?=$num_alumnos?> alumnos</p>

<p>
    Los alumnos se identifican<br>
    <?php
     for ($i=0;$i<14;$i++)
         echo "Alumno $i <br>";
    ?>

</p>

<?php
    print("Y son unos flojitos");
?>
</body>
</html>



