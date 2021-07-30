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
<!--navbar-->
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="#">-->
<!--            <img src="Ashes-logo.png" class="img-responsive" alt="Responsive image" style="width:100px; border-radius:40px;">-->
<!---->
<!--        </a>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--            <ul class="navbar-nav ml-auto">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="index.php">Quiénes Somos-->
<!--                        <span class="sr-only">(current)</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="galeria.php">Galería</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="servicios.php">Servicios</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="contacto.php">Contacto</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container-fluid">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/ashes_logo.png" alt="Home" style="max-width:150px; border-radius:20px;"
                     class="img-responsive">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                    <ul class="dropdown-menu bg-dark align-content-center" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Ingreso</a></li>
                        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br><br>


<!-- Contenido de la página web -->

<!-- Apertura del contenedor de la página web -->

<div class="container">

    <div class="text-center">
        <h4 class="item">¡¡Bienvenidos a Ashes of the Soul!!</h4>
        <a href="galeria.php"><img src="Ashes.png" alt="Ashes"></a>
        <br></br>
        <h4>Un escultor muy interesante<br><span>Con sus diferentes esculturas...</span></h4><br>

    </div>
</div>

<!-- carrusel -->

<!-- fin carrusel -->

<!--conexion a la bd-->
<?php
include("cx.php");
$link = conectar();
//Ejecutar la consulta para obtener información de la tabla.
$resultado = mysqli_query($link, "select * from users");
?>

<div class="container p-4">
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php session_unset();
    } #Libera todas las variables de sesión 
    ?>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form method="post" name="form" action="create.php">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" placeholder="Ingresa RUT" autocomplete="off"
                               autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Ingresa Nombre"
                               autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Ingresa Dirección"
                               autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="comuna" class="form-control" placeholder="Ingresa Comuna"
                               autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="region" class="form-control" placeholder="Ingresa Región"
                               autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="phone" name="phone" class="form-control" placeholder="Ingresa Teléfono"
                               autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Ingresa e-mail"
                               autocomplete="off" required>
                    </div>
                    <input type="submit" class="btn btn-outline-success btn-block" name="send" value="Agregar">
                    <input type="reset" class="btn btn-outline-secondary btn-block" value="Limpiar">
                </form>
            </div>
        </div>
        <!--End col-md-4-->
        <div class="col-md-8 mx-auto">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $link = conectar();
                //Ejecutar la consulta para obtener información de la tabla.
                $resultado = mysqli_query($link, "select * from users");

                while ($row = mysqli_fetch_array($resultado)) {
                    #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['rut'] ?>
                        </td>
                        <td>
                            <?php echo $row['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $row['direccion'] ?>
                        </td>
                        <td>
                            <?php echo $row['telefono'] ?>
                        </td>
                        <td>
                            <a href="update.php?id=<?php echo $row['rut'] ?>" class="btn btn-secondary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $row['rut'] ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!--End col-md-8-->
    </div>
    <!--End row-->
</div>
<!--End container -->
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>