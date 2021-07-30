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
                        admin
                    </a>
                    <ul class="dropdown-menu bg-dark align-content-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Ingreso</a></li>
                        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br/><br/>


<!-- Contenido de la página web -->

<!-- Apertura del contenedor de la página web -->

<div class="container">

    <div class="text-center">
        <h4 class="item">¡¡Bienvenidos a Ashes of the Soul!!</h4>
        <a href="galeria.php"><img src="Ashes.png" alt="Ashes"></a>
        <br/>
        <br/>
        <h4>Un escultor muy interesante<br><span>Con sus diferentes esculturas...</span></h4><br>

    </div>
</div>

<!-- carrusel -->
<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active align-middle d-flex">
            <img src="img/esc1.jpg" class="img-fluid center-block d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/esc2.jpg" class="img-fluid center-block d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/esc3.jpg" class="img-fluid center-block d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/esc4.jpg" class="img-fluid center-block d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/esc5.jpg" class="img-fluid center-block d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/esc6.jpg" class="img-fluid center-block d-block w-100 h-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- fin carrusel -->


<!--TODO: sacar esto para la pagina de contacto-->
<!--Scripts-->

<!--Pie de la página -->
<footer class="text-center">

    <p style="color: white;">Redes Sociales</p>

    <img src="Banner_1.jpg" class="img-responsive" alt="Responsive image "
         style="height:  100px; width: 100%; margin-top: 0%">
    <img src="redes-sociales.jpg" class="img-responsive" alt="Responsive image"
         style="width: 300px; border-radius: 30px;">
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