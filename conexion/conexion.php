<?php
//Conexion con autenticacion de windows
$serverName = "mssql4.gear.host"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"bdcelulare","UID"=>"bdcelulare","PWD"=>"Fo0S8V99-A7~");//"UID"=>"usuario","PWD"=>"contraseña"
//$conn = sqlsrv_connect( $serverName, $connectionInfo); //Se estable la conexion

/* NUEVA CONEXION*/
$conn = new PDO('sqlsrv:server=mssql4.gear.host;Database=bdcelulare','bdcelularel','Fo0S8V99-A7~');
//$conn = new PDO("odbc:Driver={SQL Native Client};Server=mssql4.gear.host;Database=bdcelulares; Uid=bdcelulares;Pwd=@123456789;");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*
if( $conn ) {
    // echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
	 
}*/

function executeUpdate($conex,$SQLquery){
	try{
		$sth = $conex->prepare($SQLquery);
		$sth->execute();
		return true;
	}catch(PDOException $e){
		echo "Conexión no se pudo establecer.<br />" . $e->getMessage();
		return false;
	}
}

function executeQuery($conex,$SQLquery){
	try{
		$sth = $conex->prepare($SQLquery);
		$sth->execute();
		return $sth->fetchAll();
	}catch(PDOException $e){
		echo "Conexión no se pudo establecer.<br />" . $e->getMessage();
		return null;
	}
}

?>
