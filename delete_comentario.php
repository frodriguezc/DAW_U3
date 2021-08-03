<?php
//Insertar un registro de alumno en la tabla.
include("cx.php");
$link = conectar();
//Se recuperan los parámetros desde la petición.
$comentario = $_GET["indice"];

$delete = "delete from comentarios where comentarios.indice='{$comentario}'";
if (!mysqli_query($link, $delete)){
    $error = "ERROR: " .mysqli_error($link);
    echo "<p>{$error}</p>";
} else {
    $resultado = "Has eliminado a este comentario... ahora vovleras al login de administrador";
    echo "<script>
alert('{$resultado}');
window.location.href='login.php';
</script>";

}
mysqli_close($link);
die();
?>