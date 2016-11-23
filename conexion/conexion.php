
<?php	

$usuario='celular';
$pass='@123456789';
$servidor='mssql4.gear.host';
$basedatos='bdcelulares';

$info=array('Datebase'=&gt;$basedatos,'UID'=&gt,$usuario,'PWD'=&gt;$pass);
$conexion=sqlsrv_connect($servidor,$info);
?>
