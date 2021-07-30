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

<!-- Navegación de la página web -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">


            <a href="index.php"><img src="img/ashes_logo.png" class="img-responsive" alt="Responsive image"
                                     style="width:100px; border-radius: 40px;"></a>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Quiénes Somos
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.php">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido de la página web -->

<!-- Apertura del contenedor de la página web -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACTO</h2>
    <div class="row">
        <div class="col-sm-5">

            <p>Gracias por mirar nuestro sitio</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Esperamos que haya sido de tu mayor agrado</p>
            <p><span class="glyphicon glyphicon-phone"></span>Contáctenos al +56 (9) 4054 7386</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Cualquier duda o sugerencia escríbanos por aqui -->
            </p>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text"
                           style="border-radius: 20px;">
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="correo" name="correo" placeholder="Correo Electrónico" type="email"
                           style="border-radius: 20px;">
                </div>
            </div>
            <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios" rows="5"
                      style="border-radius: 20px;"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <a href="respuesta.php">
                        <button class="btn btn-secondary" type="submit" style="border-radius: 5px;">Enviar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. Cierre del contenedor de la página web-->

<!--Pie de la página -->
<footer class="text-center">

    <p style="color: white;">Redes Sociales</p>

    <img src="Banner_1.jpg" class="img-responsive" alt="Responsive image "
         style="height:  100px; width: 100%; margin-top: 0%">
    <img src="redes-sociales.jpg" class="img-responsive" alt="Responsive image"
         style="width: 300px; border-radius: 30px;">
</footer>


</body>

</html>