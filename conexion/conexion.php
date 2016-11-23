<?php
//Conexion con autenticacion de windows
$serverName="mssql4.gear.host"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo=array("Database"=>"Celulares","UID"=>"celular","PWD"=>"@123456789");//"UID"=>"usuario","PWD"=>"contraseña"
$conn=sqlsrv_connect( $serverName, $connectionInfo); //Se estable la conexion

if($conn) {
    // echo "Conexión establecida.<br />";
}else{
     echo"Conexión no se pudo establecer.<br/>";
     die( print_r( sqlsrv_errors(), true));
}
?>
