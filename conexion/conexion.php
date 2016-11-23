<?php
	
	/* uso de driver pdo con binarios de microsoft descargado desde su pagina web*/
	$conn = new PDO('sqlsrv:server=mssql?.gear.host;Database=bdcelulares', 'celularalmacen\$celularalmacen','4iSP0Eskcp18QdrdgM3fxXirCbqSkXv4ujTWYn96z1HYcjpeHrRmN5RooDwe');
	

	
	/* atributos de funcionamiento de la libreria PDO*/
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
