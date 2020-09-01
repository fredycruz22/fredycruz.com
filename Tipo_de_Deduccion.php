<?php 

INCLUDE ("conexion.php")


$Id_tipo_deduccion = $_POST ["txtIdtipodeduccion"];
$Nombre_tipo_deduccion = $_POST ["txtNombretipodeduccion"];


$sql_insert = "Insert Into Tipo_de_deduccion (Id_tipo_deduccion,Nombre_tipo_deduccion) VALUES ('$Id_tipo_deduccion','$Nombre_tipo_deduccion')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>

