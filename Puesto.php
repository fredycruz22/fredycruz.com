<?php 

INCLUDE ("conexion.php")


$Id_puesto = $_POST ["txtIdpuesto"];
$Nombre_puesto = $_POST ["txtNombre_puesto"];
$Id_nivel_riesgo = $_POST ["txtIdnivelriesgo"];
$Nivel_salario_min = $_POST ["txtNivelsalariomin"];
$Nivel_salario_max = $_POST ["txtNivelsalariomax"];

$sql_insert = "Insert Into Puesto (Id_puesto,Nombre_puesto,Id_nivel_riesgo,Nivel_salario_min,Nivel_salario_max) VALUES ('$Id_puesto','$Nombre_puesto','$Id_nivel_riesgo','$Nivel_salario_min','$Nivel_salario_max')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>