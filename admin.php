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


<!-- Contenedor Principal -->
<div class="comments-container">
    <h1>Comentarios <a href="http://creaticode.com">creaticode.com</a></h1>


    <ul id="comments-list" class="comments-list">
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img
                            src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
                        <span>hace 20 minutos</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium
                        vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
            <!-- Respuestas de los comentarios -->
            <ul class="comments-list reply-list">
                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img
                                src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt="">
                    </div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                            <span>hace 10 minutos</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                            laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>


                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img
                                src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="">
                    </div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a>
                            </h6>
                            <span>hace 10 minutos</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                            laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>
            </ul>
        </li>


        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img
                            src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                        <span>hace 10 minutos</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium
                        vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>


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