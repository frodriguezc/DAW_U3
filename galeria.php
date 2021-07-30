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

<!-- Contenido de la página web -->

	  
<!-- Apertura del contenedor de la página web -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Galería</h2>
  <h4 class="item">Algunas de sus obras...</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="servicios.php"><img src="img/armadura.jpg" alt="Armadura" width="400px" height="400px" style="border-radius:40px ;"></a>
        <p style="color: white;"><strong>Escultura de armadura</strong></p>
        <p>Una escultura de cuerpo completo</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="servicios.php"><img src="collar.jpg" alt="collar" width="400px" height="400px" style="border-radius:40px;"></a>
        <p style="color: white;"><strong>collar</strong></p>
        <p>accesorios los cuales vende</p>
        <a href="artista/Artista.php"><p style="color: white;">Artista aquí...</p></a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
       <a href="servicios.php"><img src="pared.jpg" alt="craneos" width="400px" height="400px" style="border-radius:40px;"></a>
        <p style="color:white;"><strong>pared de craneos</strong></p>
        <p>una escultura en forma de pared la cual es de craneos</p>
      </div>
    </div>
  </div>

</div>
<!--Cierre del contenedor de la página web -->
	
		<!--Pie de la página -->
<footer class="text-center">
 
	<p style="color: white;">Redes Sociales</p> 
  		
		<img src="Banner_1.jpg" class="img-responsive" alt="Responsive image "style="height:  100px; width: 100%; margin-top: 0%">
    <img src="redes-sociales.jpg" class="img-responsive" alt="Responsive image" style="width: 300px; border-radius: 30px;">
	  </footer>
  </body>

</html>