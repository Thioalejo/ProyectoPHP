<?php 
//Archivo para las clases PHP necesarias en el sitio web

class tablaTendero{
	public $Nit;
	public $NombreCompleto;
	public $Ciudad;
	public $Barrio;
	public $Direccion;
	public $Telefono ;
	
	
	function __construct($Nit,$NombreCompleto,$Ciudad,$Barrio,$Direccion,$Telefono)
	{
		$this->Nit=$Nit;
		$this->NombreCompleto=$NombreCompleto;
		$this->Ciudad=$Ciudad;
		$this->Barrio=$Barrio;
		$this->Direccion=$Direccion;
		$this->Telefono=$Telefono;

	}
	

	public function insertarRegistro(){
		 	echo "
		      <tr>
		        <td>".$this->Nit."</td>
		        <td>".$this->NombreCompleto."</td>
		        <td>".$this->Ciudad."</td>
		        <td>".$this->Barrio."</td>
		        <td>".$this->Direccion."</td>
		        <td>".$this->Telefono."</td>
		      </tr>";		
	}
}

 ?>