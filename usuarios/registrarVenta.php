<?php 

//session_start();




if($_SESSION['rol']=='tendero')
{

?>

<div  class="container page-header text-center">
 <p>
 	<h2>Registro de ventas</h2>
 </p> 
</div>

<div class="container">
	
	<form id="frmRegistro" action='BD/BD_insertarVenta.php' method='get'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="idProducto" name="txtProducto" type="text" placeholder="Producto" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="IdPrecio" name="txtPrecio" type="text" placeholder="Ingrese valor" required="true">			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="idFecha" name="txtFecha" type="text" placeholder="Ingrese fecha" required="true">		
		</div>		


		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="idCliente" name="txtCliente" type="text" placeholder="Ingrese cliente" required="true">		
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
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
