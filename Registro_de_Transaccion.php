<?php 

INCLUDE ("conexion.php")


$Id_transaccion_ingreso = $_POST ["txtIdtransaccionoingreso"];
$Id_empleado = $_POST ["txtIdempleado"];
$Id_tipo_Ingreso = $_POST ["txtIdtipoingreso"];
$Fecha = $_POST ["txtFecha"];
$Monto = $_POST ["txtMonto"];

$sql_insert = "Insert Into Registro_de_Transaccion (Id_transaccion_ingreso,Id_empleado,Id_Tipo_Ingreso,Fecha,Monto) VALUES ('$Id_transaccion_ingreso','$Id_empleado','$Id_tipo_Ingreso','$Fecha','$Monto')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>