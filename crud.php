<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
</head>
<body>


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
                                        $query = "SELECT * FROM datos";
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