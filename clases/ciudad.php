<!DOCTYPE html lang="en">
<html>
<head>

	<title></title>
	

</head>
<body>



<?php 
//Archivo para las clases PHP necesarias en el sitio web

class tablaCiudades{
	public $id;
	public $nombre_municipio;
	public $departamento;
	
	
	function __construct($id,$nombre_municipio,$departamento)
	{
		$this->id=$id;
		$this->nombre_municipio=$nombre_municipio;
		$this->departamento=$departamento;
	}
	

	public function insertarRegistro(){
		 	echo "
		      <tr>
		        <td>".$this->id."</td>
		        <td>".$this->nombre_municipio."</td>
		        <td>".$this->departamento."</td>      
		      </tr>";		
	}
}

 ?>

 </body>
</html>