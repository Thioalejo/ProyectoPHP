
<?php 
//incluimos la conexion a la BD
include_once('Conexion.php');

//Nombre a base de datos.
$dbname="carnesfrias";



//	echo "clave: $Clave";
//preparar la sentencia SQL a utilizar.
$stmt = $db->prepare("insert into $dbname.cliente(Nombre_Completo,Ciudad,Direccion,Telefono,Email,Usuario_Nombre,Clave) values (?,?,?,?,?,?,?)");

//para asignar los parametros, en los que quedaron pendientes con los ?,?,?,?,? ,  issss tipos de datos a cada dato a ingresar i=int, s=string s=string
$stmt -> bind_param('sssssss',$NombreCompleto,$Ciudad,$Direccion,$Telefono,$Email,$Usuario_Nombre,$Clave);


//par escriptar clave

$hash = password_hash($_GET['txtClave'], PASSWORD_BCRYPT);

$NombreCompleto = $_GET['txtNombrecompleto'];
$Ciudad = $_GET['txtCiudad'];
$Direccion = $_GET['txtDireccion'];
$Telefono = $_GET['txtTelefono'];
$Email = $_GET['txtEmail'];
$Usuario_Nombre = $_GET['txtUsuarioId'];
$Clave = $hash;

//ejecutar la sentencia SQL
$stmt->execute();


///RECORDAR VALIDAR DE REGISTRO EXITOSO SI O NO.
//mensaje para mostrar el exito de la insercion.
echo "Registro insertados existosamente. <br>";


//Cerrar las conexiones.

$stmt->close();
$db->close();
 ?>

 <a href="\ProyectoPHP\">Regresar</a>

