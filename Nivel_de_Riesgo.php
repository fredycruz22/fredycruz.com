<?php 

INCLUDE ("conexion.php")


$Id_nivel_riesgo = $_POST ["txtIdnivelriesgo"];
$Tipo_riesgo = $_POST ["txtTiporiesgo"];


$sql_insert = "Insert Into Nivel_Riesgo (Id_nivel_riesgo,Tipo_riesgo) VALUES ('$Id_nivel_riesgo','$Tipo_riesgo')"; 


IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>