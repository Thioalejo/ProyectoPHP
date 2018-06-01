

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Administrador</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style >
	
</style>

<!-- 
Actualización de la plantilla web.
Se incluirán las librerías BOOTSTRAP

Bootstrap 3 Tutorial
https://www.w3schools.com/bootstrap/default.asp
-->

<!-- BOOTSTRAP-->

	<!-- Compilado de CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Librería jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Compilado JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Fin Bootstrap -->

</head>



<body>

<!-- El header o encabezamiento, definirá el bloque en donde se mostrará un contenido de tipo titulo o menú del sitio. -->
<header> 	
	<?php 
	//Se carga el archivo con el contenido de la cabecera. Normalmente utilizado para el menú del sitio web.
	require_once('capas/header.php');
	?>
</header>



<!--El section se utiliza para definir secciones con gran contenido en la pagian. Este será el bloqur principal del contenido a mostrar.-->
<section> 
	<div class="container">

		<?php 
		//var_dump($menu);
		if (isset($_GET['menu'])) {//Si la variable 'menu' está definida, entonces se carga la opción del menu seleccionado.
			
			if ($_GET['menu']=='inicio') {
				require_once('capas/bienvenido.php');		
			}

			if ($_GET['menu']=='Administrador') {
				require_once('usuarios/administrador.php');
			}

			if ($_GET['menu']=='registrarTendero') {
				require_once('usuarios/registrarTendero.php');
			}

			if ($_GET['menu']=='registrarCliente') {
				require_once('usuarios/registrarCliente.php');				
			}


			if ($_GET['menu']=='registrarGerente') {
				require_once('usuarios/registrarGerente.php');				
			}

			if ($_GET['menu']=='ListaTenderos') {
				require_once('clases/tendero.php');
				require_once('BD/BD_ListaTendero.php');				
			}

			if ($_GET['menu']=='Encuesta') {
				require_once('usuarios/Encuesta_1.php');				
			}


			if ($_GET['menu']=='ListaClientes') {
				require_once('clases/cliente.php');
				require_once('BD/BD_ListaCliente.php');
				//require_once('usuarios/actualizarCliente.php');
				//require_once('BD/BD_ActualizarCliente.php');					
			}


			

			if ($_GET['menu']=='registroAdministradores') {
				require_once('clases/cliente.php');
				require_once('usuarios/registrarAdministrador.php');				
			}

			if ($_GET['menu']=='oulet') {
				require_once('usuarios/oulet.php');
			}

			if ($_GET['menu']=='registrarVenta') {
				require_once('usuarios/registrarVenta.php');
			}

			if ($_GET['menu']=='registrarEstablecimiento') {
				require_once('usuarios/registrarEstablecimiento.php');
			}

			if ($_GET['menu']=='ingreso') {
				require_once('usuarios/ingresar.php');
			}
									
			if ($_GET['menu']=='contacto') {
				require_once('usuarios/contacto.php');
			}

			if ($_GET['menu']=='cerrarSesion') {
				require_once('sesiones/logout.php');
			}

			if ($_GET['menu']=='form_ingreso') 
			{
				if ($_POST['usuario']=='gerley' and $_POST['clave']=='123') 
				{
					require_once('clases/clases.php');
					require_once('usuarios/perfil.php');	
				}
				else
				{
					require_once('usuarios/error.php');
				}
			}	

		}else{
			require_once('capas/bienvenido.php');	
		}
		
	 	?>

	
	</div>

</section>



<!--El footer definirá el bloque en donde se mostrará el contenido tipo pie de página del sitio. -->	
<footer> 
	<div id="footer">
		<div class="container text-center">
			<?php 
				include_once('capas/footer.php');
			?>	
		</div>
	</div>
</footer>


</body>
</html>
