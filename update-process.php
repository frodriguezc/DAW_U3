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
$update = "update users set rut='{$rut}', nombre='{$nombre}', direccion='{$direccion}', comuna='{$comuna}', region='{$region}', telefono='{$telefono}', email='{$email}' where rut='{$rut}'";
//Si la inserción se lleva a cabo resultado es mayor que 0.
if (!mysqli_query($link, $update)){
    //Si la inserción se lleva a cabo correctamente se genera un mensaje como resultado.
    $error = mysqli_error($link);
} else {
    $resultado = "Modificacion exitosa! ahora serás llevado al login de admin nuevamente";
    echo "<script>
alert('{$resultado}');
window.location.href='login.php';
</script>";

}
mysqli_close($link);
die();
?>