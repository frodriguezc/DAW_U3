<?php
//Insertar un registro de alumno en la tabla.
include("cx.php");
$link = conectar();
//Se recuperan los parámetros desde la petición.
date_default_timezone_set('America/Santiago');
$nombre = $_GET["nombre"];
$email = $_GET["correo"];
$comentario = $_GET["comentarios"];
$date = date('d/M/Y h:i:s a', time());
//Ejecutar la sentencia de inserción en la tabla.
$insert = "insert into comentarios(nombre, email, comentario, fecha) values('{$nombre}','{$email}','{$comentario}', '{$date}')";
//Si la inserción se lleva a cabo resultado es mayor que 0.
if (!mysqli_query($link, $insert)) {
    //Si la inserción se lleva a cabo correctamente se genera un mensaje como resultado.
    $error = mysqli_error($link);
    mysqli_close($link);

    echo '<script type="text/javascript">';
    echo 'alert("Problema $error")';
    echo '</script>';
} else {
    $resultado = "Comentario Recibido, muchas gracias!";
    echo "<script>
alert('{$resultado}');
window.location.href='index.php';
</script>";
}
mysqli_close($link);
die();
?>