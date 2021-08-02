<?php
include("cx.php");
$link = conectar();
//Ejecutar la consulta para obtener información de la tabla.
$resultado = mysqli_query($link, "select * from admin");

//Se recuperan los parámetros desde la petición.
$username = $_GET["username"];
$password = $_GET["password"];
//Ejecutar la sentencia de inserción en la tabla.
$query = "select * from admin where username = '{$username}' and password = '{$password}'";
//Si la inserción se lleva a cabo resultado es mayor que 0.
if (!mysqli_query($link, $query)) {
    //Si la inserción se lleva a cabo correctamente se genera un mensaje como resultado.
    $error = mysqli_error($link);
    mysqli_close($link);

    echo '<script type="text/javascript">';
    echo 'alert("Problema $error")';
    echo '</script>';
} else {
    $resultado = "Ingreso administrador";
    echo "<script>
alert('{$resultado}');
window.location.href='crud.php';
</script>";
}
mysqli_close($link);
die();
?>



