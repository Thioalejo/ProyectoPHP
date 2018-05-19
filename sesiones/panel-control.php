<?php 

session_start();

if(isset($_SESSION['login'])==true)
{
}

else
{
	echo "Usuario no autorizado";
	echo "Por favor ingrese <a href='usuarios/login.html'";
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>panel de control</title>
</head>
<body>
<h1>Panel de control</h1>
	<p>aqui va lo que el usuario puede editar</p>

	<ul>
		<li>Editar perfil</li>
		<li>Preferencias</li>
		<li>Editar configuración</li>
	</ul>

	<br><br>
	<a href="logout.php">Cerrar sesion</a>
</body>
</html>