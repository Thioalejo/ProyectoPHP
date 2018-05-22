<?php 
//Archivo para las clases PHP necesarias en el sitio web

class tablaClientes{
	public $nombres;
	public $Ciudad;
	public $Direccion;
	public $Telefono;
	public $Email;
	
	
	function __construct($nombres,$Ciudad,$Direccion,$Telefono,$Email)
	{
		$this->nombres=$nombres;
		$this->Ciudad=$Ciudad;
		$this->Direccion=$Direccion;
		$this->Telefono=$Telefono;
		$this->Email=$Email;

	}
	

	public function insertarRegistro(){
		 	echo "
		      <tr>
		        <td>".$this->nombres."</td>
		        <td>".$this->Ciudad."</td>
		        <td>".$this->Direccion."</td>
		        <td>".$this->Telefono."</td>
		        <td>".$this->Email."</td>
		      </tr>";		
	}
}

 ?>