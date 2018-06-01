<!DOCTYPE html>
<html>
<head>

	<title>ENCUESTA</title>

</head>
<body>

	<form action='Encuesta_2.php' method='post'>

 	<h1 align="center">***** ENCUESTA DE SATISFACCIÓN CLIENTES *****</h1>

<div class="container" align="center">
				
			<h3><p>1. Consume productos cárnicos embutidos: </p></h3>
			<p>
				<select name="txtValidar" required>
					<option value="">Elige una opción</option>
				    <option value="SI" >SI</option>
				    <option value="NO" >NO</option>
    			</select>
			</p>
	</form>

					<?php 

				if (isset($_POST['txtValidar'])) 
				{

					$Validar = $_POST['txtValidar'];
					

					if ($Validar == 'SI') 
					{								
					?>

					<h3><p>2. Cuál de los siguientes productos consume: </p></h3>						
							<p>
								<label><input type="checkbox" name="txtChorizo" value="Chorizo">Chorizo</label><br>
								<label><input type="checkbox" name="txtMortadela" value="Mortadela" >Mortadela</label><br>
								<label><input type="checkbox" name="txtSalami" value="Salami" >Salami</label><br>
								<label><input type="checkbox" name="txtCostilla" value="Costilla">Costilla</label><br>
								<label><input type="checkbox" name="txtMorcilla" value="Morcilla">Morcilla</label><br>
								<label><input type="checkbox" name="txtSalchicha" value="Salchicha">Salchicha</label><br>
							    <label><input type="checkbox" name="txtSalchichon" value="Salchichon">Salchichon</label><br>
							    
    						</p>
    					

    				
    				<h3><p>3. Con qué frecuencia consume estos productos: </p></h3>
							<p>
					<select name="txtOp-1" required>
						<option>Elige una opción</option>
					    <option value="Diaramente" >Diaramente</option>
					    <option value="1-3 veces x Semana">1-3 veces x Semana</option>
					    <option value="4-6 veces x Semana">4-6 veces x Semana</option>
					    <option value="1 Vez al mes">1 Vez al mes</option>
					    <option value="Mas de una vez al mes" >Más de una vez al mes</option>
    				</select>
							</p>
					

					<h3><p>4. Cuál es la presentación que más le gusta o le gustaría
							  encontrar en los productos cárnicos embutidos que
							  consume: </p></h3>
							<p>
					<select name="txtOp-2" required>
					<option value="">Elige una opción</option>
				    <option>Por unidad.</option>
				    <option>250 gr (1/2 libra)</option>
				    <option>500 gr (1 libra)</option>
				    <option>750 gr (1 1/2 libra)</option>
				    <option>1000 gr (1 kilo)</option>
    				</select>
							</p>	

					<h3><p>5. Cuál de las siguientes variables considera es la
								más importante para usted, 
								a la hora de adquirir un embutido cárnico.<br>
								(Enumérelas de 1 a 5,
								donde 1 es la menos importante y 5 es la más
								importante.) </p></h3>
							<p>
							Precio <input type="text" name="txtPref-1" maxlength="1" size="1"><br>
							Sabor  <input type="text" name="txtPref-2" maxlength="1" size="1"><br>
							Calidad  <input type="text" name="txtPref-3" maxlength="1" size="1"><br>
			Presentación en Gramos  <input type="text" name="txtPref-4" maxlength="1" size="1"><br>
							Empaque  <input type="text" name="txtPref-5" maxlength="1" size="1">
					
							</p>
			
							<h3><p>6. Seleccione el establecimiento habitual de su compra.
 							</p></h3>

 					<h3><p>7. Cuál es la forma en la que le gusta o le gustaría
							adquirir los productos cárnicos embutidos: </p></h3>
							<p>
						
							<select name="txtLugarFrecuente" required>
								<option value="">Elige una opción</option>
							    <option>Domicilio (Telefonico)</option>
							    <option>Domicilio (Via WEB)</option>
							    <option>Grandes Superficies</option>
			    			</select>
							</p>

							
					<?php  
					}
					elseif ($Validar == 'NO') {
						?>
						<h3><p>8. Cuál es la forma en la que le gusta o le gustaría
							adquirir los productos cárnicos embutidos: </p></h3>
							<p>
						
							<select name="txtLugarFrecuente" required>
								<option value="">Elige una opción</option>
							    <option>Domicilio (Telefonico)</option>
							    <option>Domicilio (Via WEB)</option>
							    <option>Grandes Superficies</option>
			    			</select>
			
							</p>
							
						<?php
					}
				}
													
?>

<input type="submit" value="ENVIAR">
</table>
</div>
<br><br>
<form action='/ProyectoPHP/index.php' method='get'>
	<div align="center">
	<button type="submit" class="btn btn-default btn-block">
	  <span class="glyphicon glyphicon-send"></span><h4>INICIO</h4>
	</button>
	</div>
	</form>

	
</body>
</html>