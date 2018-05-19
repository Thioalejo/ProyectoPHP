<?php 

	session_start();

 ?>

<?php 
//incluimos la conexion a la BD
include_once('C:\xampp\htdocs\ProyectoPHP\BD\Conexion.php');



$Usuario_Nombre = $_POST['usuario'];
$Clave = $_POST['clave'];



$SQL = "SELECT * FROM cliente WHERE Usuario_Nombre = '$Usuario_Nombre'";


$Result = $db->query($SQL);

$row = $Result->fetch_array(MYSQLI_ASSOC);

//para desencriptar usamos
//if($row['Clave']==$Clave)
if(password_verify($Clave, $row['Clave']))
{

	$_SESSION['login']=true;
	$_SESSION['usuario_Nombre']=$Usuario_Nombre;
	$_SESSION['inicio']=time();
	$_SESSION['fin']=$_SESSION['inicio']+(5*60);

	echo "Bienvenido " .$_SESSION['usuario_Nombre'];
	echo "<br><br><a href=index_.php>Panel de control</a>";
}
else
{
	echo "Usuario o clave incorrecta vertifique e intente nuevamente";
	echo "<a href=\Plantilla_Web\usuarios\ingresar.php>Regresar</a>";
}

$db->close();
 ?>