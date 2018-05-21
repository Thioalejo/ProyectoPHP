<?php 

include_once('Conexion.php');

//Sentencia sql para la creacion de la tabla.
$stmt= $db->query("CREATE TABLE carnesfrias.Contacto(
	Nombres VARCHAR(60) NOT NULL ,
	Apellidos VARCHAR(60) NOT NULL,
	Email VARCHAR(100) NOT NULL,
	Comentarios VARCHAR(200) NOT NULL)	
	ENGINE = InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci");

if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La tabla no ha sido creada.";
}else{
	echo "<br>Sentencia ejecutada. La tabla ha sido creada.";
}



?>