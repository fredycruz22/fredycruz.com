<?php 

INCLUDE ("conexion.php")


$Id_empleado = $_POST ["txtIdempleado"];
$Cod_empleado= $_POST ["txtCodempleado"];
$Cedula_empleado = $_POST ["txtCedulaempleado"];
$Nombre_empleado = $_POST ["txtNombreempleado"];
$Id_departamento  = $_POST ["txtIddepartamento"];
$Id_puesto = $_POST ["txtIdpuesto"];
$Salario_mensual_empleado = $_POST ["txtSalariomensualempleado"];
$Responsable_area = $_POST ["txtResponsablearea"];


$sql_insert = "Insert Into Empleado (Id_empleado,Cod_empleado,Cedula_empleado,Nombre_empleado,Id_departamento,Id_puesto,Salario_mensusal_empleado,Responsable_area) VALUES ('$Id_empleado','$Cod_empleado','$Cedula_empleado','$Nombre_empleado','$Id_departamento','$Id_puesto','$Salario_mensusal_empleado','$Responsable_area')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>