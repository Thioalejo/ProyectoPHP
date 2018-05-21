<?php 

	session_start();

  
//incluimos la conexion a la BD
include_once('C:\xampp\htdocs\ProyectoPHP\BD\Conexion.php');



$Usuario_Nombre = $_POST['usuario'];
$Clave = $_POST['clave'];



$SQL = "SELECT * FROM carnesfrias.Usuarios WHERE Usuario = '$Usuario_Nombre'";


$Result = $db->query($SQL);

$row = $Result->fetch_array(MYSQLI_ASSOC);

//para desencriptar usamos
//if($row['Clave']==$Clave)

if(password_verify($Clave, $row['Clave']))
{
  	$_SESSION['rol']=$row['Rol'];
	$_SESSION['usuario_Nombre']=$Usuario_Nombre;
	$_SESSION['inicio']=time();
	$_SESSION['fin']=$_SESSION['inicio']+(5*60);

	echo "Bienvenido " .$_SESSION['usuario_Nombre'];
	
	header('Location: /ProyectoPHP/');
	//echo "<br><br><a href=/ProyectoPHP/>Pagina principal</a><br>";
	//echo "ROL ".$_SESSION['rol'];	 
}
else
{

	echo "<br>Usuario o clave incorrecta vertifique e intente nuevamente <br>";
	echo "<a href=\Plantilla_Web\usuarios\ingresar.php>Regresar</a>";

	echo "<br>Clave Ingresada ". $Clave;

}

$db->close();
 ?>