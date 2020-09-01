<?php 

INCLUDE ("conexion.php")



$Id_departamento = $_POST ["txtIddepartamento"];
$Nombre_departamento = $_POST ["txtNombredepartamento"];
$Ubicacion_fisica_departa = $_POST ["txtUbicacionfisicadepartamento"];

$sql_insert = "Insert Into Departamento (Id_departamento,Nombre_departamento,Ubicacion_fisica_departa) VALUES 
('$Id_departamento','$Nombre_departamento','$Ubicacion_fisica_departa')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>