
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
  <h3>LISTADO DE CLIENTES</h3>
  <p>Registros de la tabla 'clientes':</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Ciudad</th>
        <th>Dirección</th>
        <th>Telefono</th>
        <th>Email</th>
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

		$SQL = "SELECT * FROM carnesfrias.cliente";
		//$SQLCont= "SELECT count(*) FROM carnesfrias.cliente"

		
		$Result = $db->query($SQL);
		//$ResultCont = $db->query($SQLCont);

		while($row = $Result->fetch_array(MYSQLI_ASSOC))
		{
			//$rowCont = $ResultCont->fetch_array(MYSQLI_ASSOC);

			$nombre =	$row['Nombre_Completo'];
			$ciudad =	$row['Ciudad'];
			$direccion = $row['Direccion'];
			$telefono =	$row['Telefono'];
			$email =	$row['Email'];
			
	    	 			
				  $tablaUsuarios = new tablaUsuarios($nombre,$ciudad,$direccion, $telefono, $email);
				  $tablaUsuarios->insertarRegistro();
		      
		}     
      ?>

    </tbody>
  </table>
</div>