<?php 
//Cookies  con php

//como crear cookie

//incluimos la conexion a la BD
include_once('C:\xampp\htdocs\ProyectoPHP\BD\Conexion.php');

if (isset($_COOKIE['Visita'])) 
{	
		$SQL = "SELECT * FROM carnesfrias.cliente";
		//$SQLCont= "SELECT count(*) FROM carnesfrias.cliente"

		
		$Result = $db->query($SQL);
		//$ResultCont = $db->query($SQLCont);

		while($row = $Result->fetch_array(MYSQLI_ASSOC))
		{
			//$rowCont = $ResultCont->fetch_array(MYSQLI_ASSOC);

			$nombre =	$row['Nombre_Completo'];
			$ciudad =	$row['Ciudad'];
			$direccion = $row['Direccion'];
			$telefono =	$row['Telefono'];
			$email =	$row['Email'];	      
		}     


	$fecha = date('s/m/Y H:i:s');
	echo "<br>Gracias por visitarnos de nuevo ". $nombre. " - " . $ciudad. " - ";	
	echo "Tu ultima visita fue el " . $_COOKIE['fechaAnterior']. "<br>"; 

	
	//incremento el contador de visitas
	//se reinicia la fecha anterior, con la fecha de ingreso actual.
	//setcookie('contador',$_COOKIE['contador']+1,time()+604000);
	//echo "Esta es su visita numero". $_COOKIE['contador'];


}
else
{
	//creacion de cookie
	//nombre , valor, tiempo  
	setcookie('Visita','ok', time()+6084000);
	$fecha = date('d/m/Y H:i:s');
		setcookie('fechaAnterior', $fecha, time()+6084000);
	//echo "<br>BIenvenido al sitio web<br>";
	//setcookie('contador',2,time()+6084000);
}

 ?>