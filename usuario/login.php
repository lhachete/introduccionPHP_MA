<?php
    $titulo="Iniciar Sesion";
    $tituloPrincipal="Iniciar Sesión en el Servidor";

    include_once "../plantilla/encabezado.php";
?>
<main>
    <section class="py-5 text-center container">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col">
                    <form action="comprobarUsuario.php" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label">Nombre de usuario</label>
                            <input class="form-control" name="usuario" id="user" type="text" placeholder="Escriba su usuario">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pass">Escribe tu contraseña</label>
                            <input class="form-control" name="contrasenya" id="pass" type="password" placeholder="Escriba su password">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Datos</button>
                    </form>
                </div>
                <div class="col">
                    <!--Aquí va una foto chula-->
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    include_once "../plantilla/pie.php";