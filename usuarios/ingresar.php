
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
<div  class="container page-header text-center">
 <p>
 	<h2>Ingreso de Usuarios</h2>
 </p> 
</div>

<div class="container">
	
	<form action='sesiones/checklogin.php' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required="true">			
		</div>	

	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span> Enviar 
	</button>

	</form>		
</div>


