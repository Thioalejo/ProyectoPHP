<?php 

//session_start();




if($_SESSION['rol']=='administrador')
{

?>
		<!-- Nota: Lista de iconos de Bootstrap 
		 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
		-->
		<div  class="container page-header text-center">
		 <p>
		 	<h2>Registro de tenderos</h2>
		 </p> 
		</div>

		<div class="container">
			
			<form id="frmRegistro" action='BD/BD_insertarTendero.php' method='get'>

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>	
					</span>		
							<input  class="form-control" id="nit" name="txtNit" type="text" placeholder="Nit" required="true">		
				</div>	

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
					</span>		
							<input class="form-control" id="nombrecompleto" name="txtNombrecompleto" type="text" placeholder="Ingrese nombres" required="true">			
				</div>	

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="ciudad" name="txtCiudad" type="text" placeholder="Ingrese ciudad" required="true">		
				</div>		

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="barrio" name="txtBarrio" type="text" placeholder="Ingrese barrio">		
				</div>	

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="direccion" name="txtDireccion" type="text" placeholder="Ingrese direccion" required="true">		
				</div>		

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="telefono" name="txtTelefono" type="text" placeholder="Ingrese telefono">		
				</div>	

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="idEmail" name="txtEmail" type="email" placeholder="Ingrese email">		
				</div>	


				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="idClave" name="txtClave" type="password" placeholder="Ingrese clave de acceso">		
				</div>	

						

			<button type="submit" class="btn btn-default btn-block">
			  <span class="glyphicon glyphicon-send"></span> Enviar 
			</button>

			</form>		
		</div>
<?php

}
else
{
	?>


		<div  class="container page-header text-center">
		 <p>
		 	<h2>Registro de Usuarios</h2>
		 </p> 
		</div>

		<div class="container">
			
			<h1>Usuario no autorizado</h1>	
			
		</div>
<?php 
}
 ?>


