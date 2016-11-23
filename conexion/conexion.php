<?php
	$conn = new PDO('sqlsrv:server=mssql4.gear.host;Database=bdcelulares', 'celular', '@123456789');
	//$conn = new PDO("odbc:Driver={SQL Native Client};Server=mssql4.gear.host;Database=bdcelulares; Uid=celular;Pwd=@123456789;");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
