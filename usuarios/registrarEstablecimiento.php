<?php 

session_start();

if($_SESSION['rol']=='administrador')
{

?>
		<!-- Nota: Lista de iconos de Bootstrap 
		 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
		-->
		<div  class="container page-header text-center">
		 <p>
		 	<h2>Registro de establecimiento</h2>
		 </p> 
		</div>

		<div class="container">
			
			<form id="frmRegistro" action='BD/BD_insertarEstablecimiento.php' method='get'>


				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
					</span>		
							<input class="form-control" id="IdEstablecimiento" name="txtIdEstablecimiento" type="text" placeholder="Ingrese identificación" required="true">			
				</div>	

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>	
					</span>		
							<input  class="form-control" id="nombre" name="txtNombre" type="text" placeholder="Ingrese nombre estable..." required="true">		
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
							<input class="form-control" id="direccion" name="txtDireccion" type="text" placeholder="Ingrese dirección" required="true">		
				</div>		

				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-edit"></span>
					</span>			
							<input class="form-control" id="telefono" name="txtTelefono" type="text" placeholder="Ingrese telefono">		
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
		 	<h1>Usuario no autorizado</h1>	
		 </p> 
		</div>

		
			
			
		
<?php 
}
 ?>

