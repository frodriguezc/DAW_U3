<?php
	//Insertar un registro de alumno en la tabla.
	include("funciones_mysql.php");	
	$link = conectar();
	//Se recuperan los parámetros desde la petición.
	$rut = $_GET["id"];
	$nombre = $_GET["name"];
	$direccion = $_GET["address"];
	$comuna = $_GET["comuna"];
	$region = $_GET["region"];
	$telefono = $_GET["phone"];
	$email = $_GET["email"];
	//Ejecutar la sentencia de inserción en la tabla.
	$insert = "insert into alumno values('{$rut}','{$nombre}','{$direccion}',{$comuna}, {$region}, {$telefono}, {$email})";
	//Si la inserción se lleva a cabo resultado es mayor que 0.
	if (!mysqli_query($link, $insert)){
		//Si la inserción se lleva a cabo correctamente se genera un mensaje como resultado.
		$error = mysqli_error($link);
	} else {
		$resultado = "Inserción OK";
	}
	mysqli_close($link);
	header("Location:form_mysql.php?dato={$resultado}&error={$error}");
?>