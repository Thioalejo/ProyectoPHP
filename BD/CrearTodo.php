<?php 

include_once('Conexion.php');


$stmt = $db->query("CREATE DATABASE carnesfrias COLLATE utf8_spanish_ci");

//validacion de la sentencia sql
if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La base de datos no ha sido creada.";
}else{
	echo "<br>Sentencia ejecutada. La base de datos ha sido creada.";
}

//Sentencia sql para la creacion de la tabla.
$stmt= $db->query("CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `Nombre_Completo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;".


"INSERT INTO `cliente` (`IdCliente`, `Nombre_Completo`, `Ciudad`, `Direccion`, `Telefono`, `Email`) VALUES
(10, 'fabio', 'Medellin', 'calle 77f #96 - 12', '584329', 'cliente@gmail.com'),
(11, 'juan', 'Medelllin', 'calle alfa', '8890778', 'cliente2@gmail.com'),
(12, 'carlos', 'Cali', 'calle 780', '90889', 'cliente3@gmail.com');".


"CREATE TABLE `contacto` (
  `Nombres` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Comentarios` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;".

"INSERT INTO `contacto` (`Nombres`, `Apellidos`, `Email`, `Comentarios`) VALUES
('Nombres', 'Apellido', 'johnnymartinez255920@correo.itm.edu.co', '	asas'),
('Johnny', 'martinez', 'alejo.saraza@hot.co', 'Creo que se puede mejorar etc	'),
('Johnny alejandro', 'martinez saraza', 'alejo.saraza@hot.com', 'HOla creo que ...	');".

"CREATE TABLE `encuesta` (
  `IdEncuesta` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `Pregunta` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Rspuesta` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Encuestacol` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;".


"CREATE TABLE `establecimientos` (
  `Identificacion` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
".

"INSERT INTO `establecimientos` (`Identificacion`, `Nombre`, `Ciudad`, `Direccion`, `Telefono`) VALUES
(1, 'La mora', 'Medelllin', 'calle j', '212891');".

"CREATE TABLE `producto` (
  `IdProducto` int(11) NOT NULL,
  `NombreProducto` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Presentacion` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;".



"INSERT INTO `tendero` (`IdTendero`, `Nit`, `NombreCompleto`, `Ciudad`, `Barrio`, `Direccion`, `Telefono`) VALUES
(12, '1152684641', 'carlos', 'Medellin', 'Robledo', 'calle 77 f', '314282902');".


"CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `Rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;".

"INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Clave`, `Rol`) VALUES
(22, 'alejo.saraza@gmail.com', '$2y$10$qddN2IRzCkICJ7CNUmZJge3r2jDVLLvU6vqIwnyk1F7.mJUaaFDba', 'administrador'),
(23, 'tendero@gmail.com', '$2y$10$fQXlN2ncantF9kjKAW8qku25oc9CZiuJJYzs.ZLmrlYguZiXSISm2', 'tendero'),
(24, 'cliente@gmail.com', '$2y$10$o7soCivynUBYl5pgt2vWTufkMSuOJ8fOoH7qrOHwwLJn5k56EZ7Bi', 'Cliente'),
(25, 'cliente2@gmail.com', '$2y$10$WteDRKWfizY4vqwbyn8yK.D7QBpmPZNsrBD80/oY9CoPT7eaf/K/u', 'Cliente'),
(26, 'cliente3@gmail.com', '$2y$10$WovuLBYeISXnCJ6Qc0D2F.IQzqLaHPDjbqIJd/3DBNRxNBUPpbhVW', 'Cliente');".


"
CREATE TABLE `venta` (
  `idVenta` int(11) NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `fechaCompra` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;".

"
INSERT INTO `venta` (`idVenta`, `producto`, `precio`, `fechaCompra`, `Cliente`) VALUES
(2, 'Arroz', 1000, '21/05/2018', 'fabio'),
(3, 'Producto', 10000, '01/02/2018', 'pedro');"




);

if(!$stmt){
	echo "<br>Error en la ejecucion de la sentencia. La tabla no ha sido creada.";
}else{
	echo "<br>Sentencia ejecutada. La tabla ha sido creada.";
}



?>