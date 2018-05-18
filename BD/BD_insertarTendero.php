<?php 
//incluimos la conexion a la BD
include_once('Conexion.php');

//Nombre a base de datos.
$dbname="carnesfrias";

$Nit = $_GET['txtNit'];
$NombreCompleto = $_GET['txtNombrecompleto'];
$Ciudad = $_GET['txtCiudad'];
$Barrio = $_GET['txtBarrio'];
$Direccion = $_GET['txtDireccion'];
$Telefono = $_GET['txtTelefono'];

//	echo "clave: $Clave";
//preparar la sentencia SQL a utilizar.
$stmt = $db->prepare("insert into $dbname.tendero(Nit,Nombre_Completo,Ciudad,Barrio,Direccion,Telefono) values (?,?,?,?,?,?)");

//para asignar los parametros, en los que quedaron pendientes con los ?,?,?,?,? ,  issss tipos de datos a cada dato a ingresar i=int, s=string s=string
$stmt -> bind_param('issssi',$Nit,$NombreCompleto,$Ciudad,$Barrio,$Direccion,$Telefono);

//ejecutar la sentencia SQL
$stmt->execute();


///RECORDAR VALIDAR DE REGISTRO EXITOSO SI O NO.
//mensaje para mostrar el exito de la insercion.
echo "Registro insertados existosamente. <br>";


//Cerrar las conexiones.

$stmt->close();
$db->close();
 ?>

 <a href="\Plantilla_Web\index_.php">Regresar</a>

