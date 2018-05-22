
<div  class="container page-header text-center">
 <p>
 	<h3>Listado clientes</h3>
 </p> 
</div>

<div class="container text-center">
 
  
</div>
<br>
<br>
<div class="container">
  <h3>LISTADO DE TENDEROS</h3>
  <p>Registros de la tabla 'tendero':</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nit</th>
        <th>NombreCompleto</th>
        <th>Ciudad</th>
        <th>Barrio</th>
        <th>Direccion</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>

    <!--
      <tr>
        <td>nombres$i</td>
        <td>apellidos$i</td>
        <td>email$i@ejemplo.com</td>
      </tr>
	-->
    <!--Inserción de las Filas de la Tabla, utilizando un bucle en PHP -->
    <?php
    /*
    	$i=1;
    	while ($i <= 10) {  			
		 	echo "
		      <tr>
		        <td>nombres$i</td>
		        <td>apellidos$i</td>
		        <td>email$i@ejemplo.com</td>
		      </tr>";
		      $i++;
		} 
	*/    
      ?>


    <!--Inserción de las Filas de la Tabla, utilizando un bucle y una clase en PHP-->
    <?php
	//incluimos la conexion a la BD
	include_once('C:\xampp\htdocs\ProyectoPHP\BD\Conexion.php');

		$SQL = "SELECT * FROM carnesfrias.tendero";
		//$SQLCont= "SELECT count(*) FROM carnesfrias.cliente"

		
		$Result = $db->query($SQL);
		//$ResultCont = $db->query($SQLCont);

		while($row = $Result->fetch_array(MYSQLI_ASSOC))
		{
			//$rowCont = $ResultCont->fetch_array(MYSQLI_ASSOC);

			$Nit =	$row['Nit'];
			$NombreCompleto =	$row['NombreCompleto'];
			$Ciudad = $row['Ciudad'];
			$Barrio =	$row['Barrio'];
			$Direccion =	$row['Direccion'];
			$Telefono =	$row['Telefono'];
			
	    	 			
				  $tablaTendero = new tablaTendero($Nit,$NombreCompleto,$Ciudad,$Barrio, $Direccion,$Telefono);
				  $tablaTendero->insertarRegistro();
		      
		}     
      ?>

    </tbody>
  </table>
</div>