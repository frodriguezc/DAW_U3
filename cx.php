<?php

//Función conectar(): Permite establecer conexión con la base de datos mysql, usuario root.
function conectar(){
	$link = mysqli_connect("database","root","tiger","prueba");
	if(!$link){
		die("No se pudo establecer la conexión. " . mysqli_connect_error());
	} 
	return $link;
}
?>