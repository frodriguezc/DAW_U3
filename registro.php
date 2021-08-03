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
                        <li><a class="dropdown-item" href="login.php">Admin</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br/><br/>
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
    <div class="text-center"><h1>Registro de clientes</h1></div><br><br>

    <form class="row g-3" action="create.php" method="get">
        <div class="col-md-6">
            <label for="rut" class="form-label">RUT</label>
            <input type="text" class="form-control" id="rut" name="rut" required>
        </div>
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" minlength="5" maxlength="50" required>
        </div>
        <div class="col-12">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="col-md-6">
            <label for="comuna" class="form-label">Comuna</label>
            <input type="text" class="form-control" id="comuna" name="comuna" required>
        </div>
        <div class="col-md-6">
            <label for="region" class="form-label">Region</label>
            <select id="region" class="form-select" name="region" required>
                <option selected>Seleccione</option>
                <option value="Arica y Parinacota">Arica y Parinacota</option>
                <option value="Tarapaca">Tarapaca</option>
                <option value="Antofagasta">Antofagasta</option>
                <option value="Atacama">Atacama</option>
                <option value="Coquimbo">Coquimbo</option>
                <option value="Valparaiso">Valparaiso</option>
                <option value="Metropolitana">Metropolitana</option>
                <option value="O'Higgins">O'Higgins</option>
                <option value="Maule">Maule</option>
                <option value="Ñuble">Ñuble</option>
                <option value="Biobio">Biobio</option>
                <option value="Araucania">Araucania</option>
                <option value="Los Rios">Los Rios</option>
                <option value="Los Lagos">Los Lagos</option>
                <option value="Aysen">Aysen</option>
                <option value="Magallanes">Magallanes</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" pattern="^[9|8|7|6]\d{8}$" placeholder="912345678" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nombre@correo.com" required>
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>





<!---->
<!---->
<!---->
<!--    <div class="row">-->
<!--        <div class="mx-auto container container-fluid container-md">-->
<!--            <div class="card card-body">-->
<!--                <form method="post" name="form" action="create.php">-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="text" name="id" class="form-control" placeholder="Ingresa RUT"-->
<!--                                   autocomplete="off"-->
<!--                                   autofocus>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="text" name="name" class="form-control" placeholder="Ingresa Nombre"-->
<!--                                   autocomplete="off" required>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="text" name="address" class="form-control" placeholder="Ingresa Dirección"-->
<!--                                   autocomplete="off" required>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="text" name="comuna" class="form-control" placeholder="Ingresa Comuna"-->
<!--                                   autocomplete="off" required>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="text" name="region" class="form-control" placeholder="Ingresa Región"-->
<!--                                   autocomplete="off" required>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="tel" name="phone" class="form-control" placeholder="Ingresa Teléfono"-->
<!--                                   autocomplete="off" required>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>-->
<!--                            <input type="email" name="email" class="form-control" placeholder="Ingresa e-mail"-->
<!--                                   autocomplete="off" required>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <input type="submit" class="btn btn-outline-success btn-block" name="send" value="Agregar">-->
<!--                    <input type="reset" class="btn btn-outline-secondary btn-block" value="Limpiar">-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    End row-->
<!--</div>-->
<!--End container -->
<!--Pie de la página -->

    <br>
    <br>
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
