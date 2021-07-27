<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Contacto</title> <!--Título de la página-->
    <link rel="stylesheet" href="/css/main.css">
	  
	    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--Link Opcional de JavaScript -->
    <!-- Scripts de JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	  <!--Apertura de estilo CSS con la etiqueta style-->
	  	  	   <style> 
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .bg-dark {
    background-color: #343a40!important;
}

  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }

 
   footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }

  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  
  .navbar {
    margin-bottom: 0;
    background-color: #000000;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius:0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: green !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  
  @media screen and (max-width: 768px) {
    .col-sm-5 {
      text-align: center;
      margin: 25px 0;
    }
    
  }
  p{
    color:green;
  }

  </style>
  <!--Cierre de estilo CSS con la etiqueta style-->
  </head>
  <body>

    <!-- Navegación de la página web -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          
		
      <a href="Index.php"><img src="Ashes-logo.png" class="img-responsive" alt="Responsive image"  style="width:100px; border-radius: 40px;"></a>
		
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="Index.php">Quiénes Somos
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Galeria.php">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacto.php">Contacto</a>
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
      <p><span class="glyphicon glyphicon-envelope"></span> Cualquier duda o sugerencia escríbanos por aqui --></p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" style="border-radius: 20px;">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="correo" name="correo" placeholder="Correo Electrónico" type="email" style="border-radius: 20px;">
        </div>
      </div>
      <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios" rows="5" style="border-radius: 20px;"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <a href="Respuesta.php"><button class="btn btn-secondary" type="submit" style="border-radius: 5px;">Enviar</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /. Cierre del contenedor de la página web-->

<!--Pie de la página -->
<footer class="text-center">
 
	<p style="color: white;">Redes Sociales</p> 
  		
		<img src="Banner_1.jpg" class="img-responsive" alt="Responsive image "style="height:  100px; width: 100%; margin-top: 0%">
    <img src="redes-sociales.jpg" class="img-responsive" alt="Responsive image" style="width: 300px; border-radius: 30px;">
	  </footer>

	  


  </body>

</html>