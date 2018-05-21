<?php 
//Cookies  con php

//como crear cookie


if (isset($_COOKIE['Visita'])) 
{
	$fecha = date('s/m/Y H:i:s');
	echo "<br>Gracias por visitarnos de nuevo<br>";	
	echo "<br>Tu ultima visita fue el " . $_COOKIE['fechaAnterior']. "<br>"; 

	echo "Esta es tu visita numero: ";
	
	//incremento el contador de visitas
//se reinicia la fecha anterior, con la fecha de ingreso actual.
	setcookie('contador',$_COOKIE['contador']+1,time()+604000);
	echo "Esta es su visita numero". $_COOKIE['contador'];
}
else
{
	//creacion de cookie
	//nombre , valor, tiempo  
	setcookie('Visita','ok', time()+6084000);
	$fecha = date('d/m/Y H:i:s');
		setcookie('fechaAnterior', $fecha, time()+6084000);
	echo "<br>BIenvenido al sitio web<br>";
	setcookie('contador',2,time()+6084000);
}

 ?>