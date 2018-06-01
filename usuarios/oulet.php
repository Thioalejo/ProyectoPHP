<!DOCTYPE>
<html>
<head>

	<title></title>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

		<div  class="container page-header text-center">
		 <p>
		 	<h2>Oulet</h2>

		 	<form> 
				<select >
					<?php 

					 
						//incluimos la conexion a la BD
						include_once('C:\xampp\htdocs\ProyectoPHP\BD\Conexion.php');

							$SQL = "SELECT * FROM carnesfrias.municipios";
							//$SQLCont= "SELECT count(*) FROM carnesfrias.cliente"

							
							$Result = $db->query($SQL);
							//$ResultCont = $db->query($SQLCont);

							while($row = $Result->fetch_array(MYSQLI_ASSOC))
							{
								//$rowCont = $ResultCont->fetch_array(MYSQLI_ASSOC);

								$id =	$row['id'];
								$nombre_municipio =	$row['nombre_municipio'];
								$departamento =	$row['departamento'];
								
							

								echo "
										<option>Seleccione</option>
										<option>$nombre_municipio</option>
										
										";
							
									/*  $tablaUsuarios = new tablaCiudades($CiudadID,$CiudadNombre,$PaisCodigo, $CiudadDistrito, $CiudadPoblacion);
									  $tablaCiudades->insertarRegistro();*/
									  
							      
							}     
					      ?>
				</select>
					 

				
				
			</form>
		 </p> 
		</div>

		<div class="container">
			
		</div>


 </body>
</html>