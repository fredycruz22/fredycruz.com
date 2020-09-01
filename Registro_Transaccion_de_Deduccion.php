<?php 

INCLUDE ("conexion.php")


$Id_transaccion_deduccion = $_POST ["txtIdtransacciondeduccion"];
$Id_empleado = $_POST ["txtIdempleado"];
$Id_tipo_deduccion = $_POST ["txtIdtipodeduccion"];
$Fecha = $_POST ["txtFecha"];
$Monto = $_POST ["txtMonto"];

$sql_insert = "Insert Into Registro_Transaccion_de_Deduccion (Id_transaccion_deduccion,Id_empleado,Id_tipo_deduccion,Fecha,Monto) VALUES ('$Id_transaccion_ingreso','$Id_empleado','$Id_Tipo_Ingreso','$Fecha','$Monto')"; 

IF($conec->QUERY(&sql_insert)===TRUE){
	ECHO"La operacion se ha realizado con exito "; 
}else{
	echo"Error al insertar los datos "; 
	echo"Errno. &conec->error"; 
}
$conec->close();

?>
