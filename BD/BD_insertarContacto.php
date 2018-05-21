
<?php 
//incluimos la conexion a la BD
include_once('Conexion.php');

//Nombre a base de datos.
$dbname="carnesfrias";

$Nombres = $_POST['nombres'];
$Apellidos = $_POST['apellidos'];
$Email = $_POST['email'];
$Comentarios = $_POST['comentarios'];

//preparar la sentencia SQL a utilizar.
$stmt = $db->prepare("insert into $dbname.Contacto(Nombres,Apellidos,Email,Comentarios) values (?,?,?,?)");

//para asignar los parametros, en los que quedaron pendientes con los ?,?,?,?,? ,  issss tipos de datos a cada dato a ingresar i=int, s=string s=string
$stmt -> bind_param('ssss',$Nombres,$Apellidos,$Email,$Comentarios);



//ejecutar la sentencia SQL
$stmt->execute();



//mensaje para mostrar el exito de la insercion.
echo "Registro insertados existosamente. <br>";


//Cerrar las conexiones.

$stmt->close();
$db->close();
 ?>

 <a href="\ProyectoPHP\">Regresar</a>

