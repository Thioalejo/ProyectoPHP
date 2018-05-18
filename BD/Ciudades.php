<?php 

include_once('Conexion.php');

//Sentencia sql para la creacion de la tabla.
$stmt= $db->query("CREATE TABLE BD_EVALUACION4.Ciudades(
	ID_Ciudad INT NOT NULL AUTO_INCREMENT,
	Ciudad VARCHAR(60) NOT NULL,
	Pais VARCHAR(60) NOT NULL,	
	PRIMARY KEY(ID_Ciudad))
	ENGINE = InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci");

if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La tabla no ha sido creada.";
}else{
	echo "<br>Sentencia ejecutada. La tabla ha sido creada.";
}



?>