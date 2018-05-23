<?php 

include_once('Conexion.php');


$stmt = $db->query("CREATE DATABASE carnesfrias COLLATE utf8_spanish_ci");

//validacion de la sentencia sql
if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La base de datos no ha sido creada.";
}else{
	echo "<br>Sentencia ejecutada. La base de datos ha sido creada.";
}


?>