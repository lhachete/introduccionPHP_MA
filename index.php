<?php
$titulo="Ejercicios PHP Tema 2";
$tituloPrincipal="Ejercicios PHP";
include_once ("./plantilla/encabezado.php");
?>
<main>

    <section class="py-5 text-center container">
        <h1>Estos son los ejercios de DWES</h1>
        <ol>
            <li><a href="/201tresfrases.php">Enlace al primer ejercicio</a></li>
            <li><a href="/202calculos.php">Enlace al segundo ejercicio</a></li>
            <li><a href="/206anyos.php?edad=36">Enlace al sexto ejercicio</a></li>
            <li><a href="/225formulario.html">Enlace al vigesimoquinto ejercicio</a></li>
        </ol>

        <h2>Funciones auxiliares</h2>
        <ol>
            <li><a href="/aux/suggestionpass.php">Generador de contraseñas</a></li>
        </ol>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">


        </div>
    </div>

</main>
<?php
include_once ("./plantilla/pie.php");
