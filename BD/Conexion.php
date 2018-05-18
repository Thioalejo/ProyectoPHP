<?php 


//Parametros de conexion.
$server="localhost";
$user="root";
$password="";


//Validar el parametro de la base de datos.
if(!isset($dbname)){
	$dbname="";
}

//conexion a traves de MySQLi
$db=new mysqli($server,$user,$password,$dbname);

//validacion de la conexion
if($db->connect_error){
	die("<br>La conexion ha fallado");
}else{
	echo"<br>La conexion ha sido exitosa";
}


 ?>