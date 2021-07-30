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


//TODO: agregar busqueda de usuarios para


//TODO: agregar hidden para los campos del Usuario



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
                                        $query = "SELECT * FROM user";
                                        $result = mysqli_query($conn, $query);
                                        while($row = mysqli_fetch_array($result)){ 
                                        #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                            ?>
            <tr>
              <td>
                <?php echo $row['id'] ?>
              </td>
              <td>
                <?php echo $row['nombre'] ?>
              </td>
              <td>
                <?php echo $row['dirrecion'] ?>
              </td>
              <td>
                <?php echo $row['telefono'] ?>
              </td>
              <td>
                <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
</body>
</html>