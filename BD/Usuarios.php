<?php 

include_once('Conexion.php');

//Sentencia sql para la creacion de la tabla.
$stmt= $db->query("CREATE TABLE BD_EVALUACION4.Usuarios(
	USUARIOID INT NOT NULL AUTO_INCREMENT,
	USUARIONOMBRE VARCHAR(60) NOT NULL,
	PASSWORD VARCHAR(60) NOT NULL,
	PRIMERNOMBRE VARCHAR(60) NOT NULL,
	SEGUNDONOMBRE VARCHAR(60) NOT NULL,
	PRIMERAPELLIDO VARCHAR(60) NOT NULL,
	SEGUNDOAPELLIDO VARCHAR(60) NOT NULL,
	EMAIL VARCHAR(100) NOT NULL,
	PRIMARY KEY(USUARIOID))
	ENGINE = InnoDB CHARSET= utf8 COLLATE=utf8_spanish_ci");

if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La tabla no ha sido creada.";
}else{
	echo "<br>Sentencia ejecutada. La tabla ha sido creada.";
}



?>