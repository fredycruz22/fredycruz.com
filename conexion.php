<?php

$conec = new mysql("localhost","root","Sistema_Planilla_PHP ","Sistema_Planilla_PHP");
if ($conec->connect_error){
	echo "Falio al conectar a MySQL: ($conec->connect_error) $conec->connect_error";
}


?>