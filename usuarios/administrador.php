<?php 

session_start();



if(isset($_SESSION['rol']))
{



		if($_SESSION['rol']=='administrador')
		{

		?>
				<!-- Nota: Lista de iconos de Bootstrap 
				 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
				-->
				<div  class="container page-header text-center">
				 <p>
				 	<h2>CRUD</h2>
				 </p> 
				</div>

				<div class="container">
					
					
				</div>
		<?php

		}
		else
		{
			?>


				<div  class="container page-header text-center">
				 <p>
				 	
				 </p> 
				</div>

				<div class="container">
					
					<h1>Usuario no autorizado</h1>	
					
				</div>
		<?php 
		}
	}
		 ?>


