<!DOCTYPE html>
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
<!--conexion a la bd-->
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


    <div class="page-header">
        <h2>Modificar datos cliente</h2>
    </div>

    <div>
        <?php
        include("cx.php");
        $link = conectar();
        $query = "SELECT * FROM users WHERE rut='" . $_GET["rut"] . "'";
        $result = mysqli_query($link, $query);
        $customer = mysqli_fetch_assoc($result);
        ?>
        <form action="update-process.php" method="POST" class="row g-3">

            <div class="col-md-6">
                <label for="rut" class="form-control">RUT
                    <input type="text" name="rut" class="form-control" value="<?php echo $customer['rut']; ?>"
                           required>

            </div>
            <div class="col-md-6">
                <label for="nombre" class="form-control">Nombre
                    <input type="text" name="nombre" class="form-control" value="<?php echo $customer['nombre']; ?>"
                           required>
                </label>
            </div>
            <div class="col-md-12">
                <label for="direccion" class="form-control">Direccion
                    <input type="text" name="direccion" class="form-control"
                           value="<?php echo $customer['direccion']; ?>" required>
                </label>
            </div>
            <div class="col-md-6">
                <label for="comuna" class="form-control">Comuna
                    <input type="text" name="comuna" class="form-control" value="<?php echo $customer['comuna']; ?>"
                           required>
                </label>
            </div>
<!--            <div class="col-md-6">-->
<!--                <label for="region" class="form-control">Region-->
<!--                    <input type="text" name="region" class="form-control" value="--><?php //echo $customer['region']; ?><!--"-->
<!--                           required="">-->
<!--                </label>-->
<!--            </div>-->

            <div class="col-md-6">
                <label for="region" class="form-label">Region</label>
                <select id="region" class="form-select" required>
                    <option selected value="<?php echo $customer['region']; ?>">Sin Cambios</option>
                    <option value="arica">Arica y Parinacota</option>
                    <option value="tarapaca">Tarapaca</option>
                    <option value="antofagasta">Antofagasta</option>
                    <option value="atacama">Atacama</option>
                    <option value="coquimbo">Coquimbo</option>
                    <option value="valparaiso">Valparaiso</option>
                    <option value="metropolitana">Metropolitana</option>
                    <option value="ohiggins">O'Higgins</option>
                    <option value="maule">Maule</option>
                    <option value="nuble">Ñuble</option>
                    <option value="biobio">Biobio</option>
                    <option value="araucania">Araucania</option>
                    <option value="losrios">Los Rios</option>
                    <option value="loslagos">Los Lagos</option>
                    <option value="aysen">Aysen</option>
                    <option value="magallanes">Magallanes</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="telefono" class="form-control">Telefono
                    <input type="text" name="telefono" class="form-control"
                           value="<?php echo $customer['telefono']; ?>" required>
                </label>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-control">e-mail
                    <input type="text" name="email" class="form-control" value="<?php echo $customer['email']; ?>"
                           required>
                </label>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" value="submit">Modificar</button>
                <button type="reset" class="btn btn-primary" value="reset">Limpiar</button>
            </div>
        </form>
    </div>

</div>
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