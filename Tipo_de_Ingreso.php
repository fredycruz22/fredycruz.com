<?php 

INCLUDE ("conexion.php")



$Id_tipo_ingreso = $_POST ["txtIdtipoingreso"];
$Nombre_tipo_ingreso = $_POST ["txtNombretipoingreso"];


$sql_insert = "Insert Into Tipo_de_ingreso (Id_tipo_ingreso,Nombre_tipo_ingreso) VALUES ('$Id_tipo_ingreso','$Nombre_tipo_ingreso')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>

