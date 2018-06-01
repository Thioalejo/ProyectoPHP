<?php 

session_start();



if(isset($_SESSION['rol']))
{

	if($_SESSION['rol']=='administrador')
	{
		echo "<br>";
		echo "<br>";
		include_once('clases\cookie.php');
	?>
			<nav class="navbar navbar-inverse navbar-fixed-top"><!-- Este bloque contendrá el menú de opciones de navegación del sitio web. -->
				<div class="container-fluid">
					<div class="navbar-header">	
						
					</div>
						<!-- Botones a la izquierda, en la barra de navegación. -->
						<ul class="nav navbar-nav">
							<li li class="active">
								<a class="navbar-brand" href="?menu=inicio">
								<span class="glyphicon glyphicon-cloud" aria-hidden="true" ></span>
								Inicio
								</a>
							</li>
							<li>
								<a href="?menu=contacto">Contácto</a>
							</li>

							<li>
								<a href="?menu=Administrador"><span class="glyphicon glyphicon-list-alt"></span>
									Administrador
								</a>
							</li>

							<li>
								<a href="?menu=ListaClientes"><span class="glyphicon glyphicon-list-alt"></span>
									Lista clientes
								</a>
							</li>


							<li>
								<a href="?menu=registrarTendero"><span class="glyphicon glyphicon-list-alt"></span>
									Registrar tendero
								</a>
							</li>

							<li>
								<a href="?menu=ListaTenderos"><span class="glyphicon glyphicon-list-alt"></span>
									Lista tenderos
								</a>
							</li>

							<li>
								<a href="?menu=registrarGerente"><span class="glyphicon glyphicon-list-alt"></span>
									Registro gerentes
								</a>
							</li>


							<li>
								<a href="?menu=registrarEstablecimiento"><span class="glyphicon glyphicon-list-alt"></span>
									Registrar establecimiento
								</a>
							</li>					
						</ul>
						
						<!-- Botones a la derecha, en la barra de navegación. -->
						<ul class="nav navbar-nav navbar-right">
							
							

							<li>
								<a href="?menu=cerrarSesion"><span class="glyphicon glyphicon-log-out"></span>
									Cerrar sesión
								</a>
							</li>					
						</ul>
				</div>
			</nav>

			<?php

	}

	elseif($_SESSION['rol']=='tendero')
	{
		echo "<br>";
		echo "<br>";
		include_once('clases\cookie.php');
	?>

		<nav class="navbar navbar-inverse navbar-fixed-top"><!-- Este bloque contendrá el menú de opciones de navegación del sitio web. -->
					<div class="container-fluid">
						<div class="navbar-header">	
							
						</div>
							<!-- Botones a la izquierda, en la barra de navegación. -->
							<ul class="nav navbar-nav">
								<li li class="active">
									<a class="navbar-brand" href="?menu=inicio">
									<span class="glyphicon glyphicon-cloud" aria-hidden="true" ></span>
									Inicio
									</a>
								</li>
								<li>
									<a href="?menu=contacto">Contácto</a>
								</li>

							
								<li>
									<a href="?menu=registrarCliente"><span class="glyphicon glyphicon-list-alt"></span>
										Registrar cliente
									</a>
								</li>

							<li>
								<a href="?menu=ListaClientes"><span class="glyphicon glyphicon-list-alt"></span>
									Lista clientes
								</a>
							</li>

								<li>
									<a href="?menu=registrarVenta"><span class="glyphicon glyphicon-list-alt"></span>
										Registrar venta
									</a>
								</li>

								<li>
									<a href="?menu=listadoVenta"><span class="glyphicon glyphicon-list-alt"></span>
										Listado de ventas
									</a>
								</li>

								
											
							</ul>
							
							<!-- Botones a la derecha, en la barra de navegación. -->
							<ul class="nav navbar-nav navbar-right">
								
								

								<li>
									<a href="?menu=cerrarSesion"><span class="glyphicon glyphicon-log-out"></span>
										Cerrar sesión
									</a>
								</li>					
							</ul>
					</div>
				</nav>

	<?php

	}
	elseif($_SESSION['rol']=='Cliente')
	{
echo "<br>";
echo "<br>";
include_once('clases\cookie.php');
	?>

		<nav class="navbar navbar-inverse navbar-fixed-top"><!-- Este bloque contendrá el menú de opciones de navegación del sitio web. -->
					<div class="container-fluid">
						<div class="navbar-header">	
							
						</div>
							<!-- Botones a la izquierda, en la barra de navegación. -->
							<ul class="nav navbar-nav navbar-letf">
								<li li class="active">
									<a class="navbar-brand" href="?menu=inicio">
									<span class="glyphicon glyphicon-cloud" aria-hidden="true" ></span>
									Inicio
									</a>
								</li>
								<li>
									<a href="?menu=contacto">Contácto</a>
								</li>

							
								<li>
									<a href="?menu=Encuesta"><span class="glyphicon glyphicon-list-alt"></span>
										Encuesta
									</a>
								</li>

								<!-- Botones a la derecha, en la barra de navegación. -->
								<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="?menu=cerrarSesion"><span class="glyphicon glyphicon-log-out"></span>
										Cerrar sesión
									</a>
								</li>	

										
							</ul>

							
					</div>
				</nav>

	<?php

	}
	else
	{
		?>
			<nav class="navbar navbar-inverse navbar-fixed-top"><!-- Este bloque contendrá el menú de opciones de navegación del sitio web. -->
				<div class="container-fluid">
					<div class="navbar-header">	
						
					</div>
						<!-- Botones a la izquierda, en la barra de navegación. -->
						<ul class="nav navbar-nav navbar-letf">
							
							
							<li>
								<a href="?menu=oulet"><span class="glyphicon glyphicon-log-in"></span>
									oulet
								</a>
							</li>
					
						</ul>
						
						<!-- Botones a la derecha, en la barra de navegación. -->
						<ul class="nav navbar-nav navbar-right">
							
							<li>
								<a href="?menu=ingreso"><span class="glyphicon glyphicon-log-in"></span>
									Ingresar
								</a>
							</li>
					
						</ul>
			
	<?php 
	}
}else
{
	?>

	<nav class="navbar navbar-inverse navbar-fixed-top"><!-- Este bloque contendrá el menú de opciones de navegación del sitio web. -->
						<div class="container-fluid">
							<div class="navbar-header">	
								
							</div>
								<!-- Botones a la izquierda, en la barra de navegación. -->
								<ul class="nav navbar-nav navbar-letf">
									<li li class="active">
										<a class="navbar-brand" href="?menu=inicio">
										<span class="glyphicon glyphicon-cloud" aria-hidden="true" ></span>
										Inicio
										</a>
									</li>
									<li>
										<a href="?menu=contacto">Contácto</a>
									</li>		
								</ul>

						<ul class="nav navbar-nav navbar-letf">
								<li>
								<a href="?menu=oulet"><span class="glyphicon glyphicon-log-in"></span>
									oulet
								</a>
								</li>
					
							</ul>
								
								<!-- Botones a la derecha, en la barra de navegación. -->
								<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="?menu=registrarCliente"><span class="glyphicon glyphicon-log-in"></span>
										Registrar
									</a>
								</li>

								<li>
									<a href="?menu=ingreso"><span class="glyphicon glyphicon-log-in"></span>
										Ingresar
									</a>
								</li>
							</ul>						
						</div>
					</nav>
		</div>
		</nav>
		<?php 

	}
?>
