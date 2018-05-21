<?php 
//incluimos la conexion a la BD
include_once('Conexion.php');

//Nombre a base de datos.
$dbname="carnesfrias";
$Rol = "tendero";


//preparar la sentencia SQL a utilizar.
$stmt = $db->prepare("insert into $dbname.tendero(Nit,NombreCompleto,Ciudad,Barrio,Direccion,Telefono) values (?,?,?,?,?,?)");

$Nit = $_GET['txtNit'];	
$NombreCompleto = $_GET['txtNombrecompleto'];
$Ciudad = $_GET['txtCiudad'];
$Barrio = $_GET['txtBarrio'];
$Direccion = $_GET['txtDireccion'];
$Telefono = $_GET['txtTelefono'];

//para asignar los parametros, en los que quedaron pendientes con los ?,?,?,?,? ,  issss tipos de datos a cada dato a ingresar i=int, s=string s=string
$stmt -> bind_param('ssssss',$Nit,$NombreCompleto,$Ciudad,$Barrio,$Direccion,$Telefono);





	$stmt2 = $db->prepare("insert into $dbname.Usuarios(Usuario,Clave,Rol) values (?,?,?)");
	$hash = password_hash($_GET['txtClave'], PASSWORD_BCRYPT);
	$Email = $_GET['txtEmail'];
	$Clave = $hash;
	$stmt2 -> bind_param('sss',$Email,$Clave,$Rol);

	//ejecutar la sentencia SQL
	$stmt->execute();
	//ejecutar sentencia para guardar usuario en tabla usuario
	$stmt2->execute();

	
//mensaje para mostrar el exito de la insercion.
if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La tabla no ha sido creada.";
}else{
	
	echo "<br>Sentencia ejecutada. La tabla ha sido creada.";
}

//Cerrar las conexiones.

$stmt->close();
$stmt2->close();
$db->close();
 ?>

 <a href="\ProyectoPHP\">Regresar</a>

