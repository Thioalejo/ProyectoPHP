<?php 
//incluimos la conexion a la BD
include_once('Conexion.php');

//Nombre a base de datos.
$dbname="carnesfrias";

$Identificacion = $_GET['txtIdEstablecimiento'];
$Nombre = $_GET['txtNombre'];
$Ciudad = $_GET['txtCiudad'];
$Direccion = $_GET['txtDireccion'];
$Telefono = $_GET['txtTelefono'];

//	echo "clave: $Clave";
//preparar la sentencia SQL a utilizar.
$stmt = $db->prepare("insert into $dbname.Establecimientos(Identificacion,Nombre,Ciudad,Direccion,Telefono) values (?,?,?,?,?)");

//para asignar los parametros, en los que quedaron pendientes con los ?,?,?,?,? ,  issss tipos de datos a cada dato a ingresar i=int, s=string s=string
$stmt -> bind_param('issss',$Identificacion,$Nombre,$Ciudad,$Direccion,$Telefono);

//ejecutar la sentencia SQL
$stmt->execute();


///RECORDAR VALIDAR DE REGISTRO EXITOSO SI O NO.
//mensaje para mostrar el exito de la insercion.
//echo "Registro insertados existosamente. <br>";


//Cerrar las conexiones.

$stmt->close();
$db->close();

header('Location: /ProyectoPHP/');
 ?>

 <a href="\ProyectoPHP\">Regresar</a>

