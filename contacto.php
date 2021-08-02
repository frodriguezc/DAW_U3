<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Ashes Of The Soul</title>

    <!-- Stylesheet para vista index -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link Opcional de JavaScript -->

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
        <div class="container ">
            <a class="navbar-brand" href="index.php">
                <img src="img/ashes_logo.png" alt="Home"
                     class="img-responsive">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.php">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Ingreso
                    </a>
                    <ul class="dropdown-menu bg-dark align-content-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="registro.php">Registro</a></li>
                        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                        <li><a class="dropdown-item" href="admin.php">Admin</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br/><br/>

<!-- Contenido de la página web -->

<!--conexion a la bd-->
<?php
include("cx.php");
$link = conectar();
//Ejecutar la consulta para obtener información de la tabla.
$resultado = mysqli_query($link, "select * from users");
?>

<!-- Apertura del contenedor de la página web -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACTO</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Gracias por mirar nuestro sitio</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Esperamos que haya sido de tu mayor agrado</p>
            <p><span class="glyphicon glyphicon-phone"></span>Contáctenos al +56 (9) 4054 7386</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Cualquier duda o sugerencia escríbanos por aqui.
            </p>
        </div>

        <form action="comenta.php" class="col-sm-7 col-sm-6 col-sm-12>
        <div class=" col-sm-7
        ">
        <div class="row">
            <div class="col-sm-6 form-group">
                <label for="nombre"></label><input class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                                   type="text"
                >
            </div>
            <div class="col-sm-6 form-group">
                <label for="correo"></label><input class="form-control" id="correo" name="correo"
                                                   placeholder="Correo Electrónico" type="email"
                >
            </div>
        </div>
        <label for="comentarios"></label><textarea class="form-control" id="comentarios" name="comentarios"
                                                   placeholder="Comentarios" rows="5"
        ></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
                <a href="respuesta.php">
                    <button class="btn btn-secondary" type="submit" style="border-radius: 5px;">Enviar</button>
                </a>
            </div>
        </div>
    </div>
    </form>
</div>


<br><br>
<!-- /. Cierre del contenedor de la página web-->

<!--End container -->


<!--Pie de la página -->
<footer class="text-center">
    <link rel="stylesheet" href="css/style_foot.css"/>

    <h2>Redes Sociales</h2>

    <img src="img/Banner_1.jpg" class="img-responsive foot1" alt="Ashes Of The Soul">
    <img src="img/redes-sociales.jpg" class="img-responsive foot2" alt="Redes Sociales">
</footer>
<!-- Scripts de JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>