
<?php 
//incluimos la conexion a la BD
include_once('Conexion.php');

//Nombre a base de datos.
$dbname="carnesfrias";


$Rol = "administrador";
//	echo "clave: $Clave";
//preparar la sentencia SQL a utilizar.
$stmt = $db->prepare("insert into $dbname.administrador(Nombre_Completo,Ciudad,Direccion,Telefono,Email) values (?,?,?,?,?)");


//para asignar los parametros, en los que quedaron pendientes con los ?,?,?,?,? ,  issss tipos de datos a cada dato a ingresar i=int, s=string s=string
$stmt -> bind_param('sssss',$NombreCompleto,$Ciudad,$Direccion,$Telefono,$Email);




$NombreCompleto = $_GET['txtNombrecompleto'];
$Ciudad = $_GET['txtCiudad'];
$Direccion = $_GET['txtDireccion'];
$Telefono = $_GET['txtTelefono'];
$Email = $_GET['txtEmail'];

//ejecutar la sentencia SQL
$stmt->execute();


//par escriptar clave
$hash = password_hash($_GET['txtClave'], PASSWORD_BCRYPT);
$Clave = $hash;
$stmt2 = $db->prepare("insert into $dbname.Usuarios(Usuario,Clave,Rol) values (?,?,?)");
$stmt2 -> bind_param('sss',$Email,$Clave,$Rol);





//ejecutar sentencia para guardar usuario en tabla usuario
$stmt2->execute();

///RECORDAR VALIDAR DE REGISTRO EXITOSO SI O NO.
//mensaje para mostrar el exito de la insercion.
echo "Registro insertados existosamente. <br>";


//Cerrar las conexiones.

$stmt->close();
$stmt2->close();
$db->close();
 ?>

 <a href="\ProyectoPHP\">Regresar</a>

