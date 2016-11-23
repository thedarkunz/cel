
<?php




$serverName = "ftp.gear.host";


$connectionInfo = array( "Database"=>"celularalmacen\$celularalmacen","UID"=>"celularalmacen\$celularalmacen","PWD"=>"4iSP0Eskcp18QdrdgM3fxXirCbqSkXv4ujTWYn96z1HYcjpeHrRmN5RooDwe");//"UID"=>"usuario","PWD"=>"contraseña"
$conn = sqlsrv_connect( $serverName, $connectionInfo); 

if( $conn ) {
    // echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
