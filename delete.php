<?php
//Insertar un registro de alumno en la tabla.
include("cx.php");
$link = conectar();
//Se recuperan los parámetros desde la petición.
$rut = $_GET["rut"];

$delete = "delete from users where rut='{$rut}'";
//Si la inserción se lleva a cabo resultado es mayor que 0.
if (!mysqli_query($link, $delete)){
    //Si la inserción se lleva a cabo correctamente se genera un mensaje como resultado.
    $error = "ERROR: " .mysqli_error($link);
    echo "<p>{$error}</p>";
} else {
    $resultado = "Has eliminado a este cliente... ahora vovleras al login de administrador";
    echo "<script>
alert('{$resultado}');
window.location.href='login.php';
</script>";

}
mysqli_close($link);
die();
?>