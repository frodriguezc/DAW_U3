<?php
//Insertar un registro de alumno en la tabla.
include("cx.php");
$link = conectar();
//Se recuperan los parámetros desde la petición.
$rut = $_GET["rut"];
$nombre = $_GET["nombre"];
$direccion = $_GET["direccion"];
$comuna = $_GET["comuna"];
$region = $_GET["region"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];
//Ejecutar la sentencia de inserción en la tabla.
$insert = "insert into users values('{$rut}','{$nombre}','{$direccion}','{$comuna}',' {$region}', '{$telefono}', '{$email}')";
//Si la inserción se lleva a cabo resultado es mayor que 0.
if (!mysqli_query($link, $insert)) {
    //Si la inserción se lleva a cabo correctamente se genera un mensaje como resultado.
//    $error = mysqli_error_list($link);
    $error = "ERROR: " .mysqli_error($link);
    echo "<p>{$error}</p>";
} else {
    $resultado = "Registrado como cliente, ahora puedes ser contactado por el artista una vez que demuestres tu interes por cualquier obra";
    echo "<script>
alert('{$resultado}');
window.location.href='index.php';
</script>";

}
mysqli_close($link);
die();
?>