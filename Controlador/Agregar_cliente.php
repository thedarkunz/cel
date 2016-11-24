<?php
include '../conexion/conexion.php';


$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$DNI=$_POST['DNI'];
$Direccion=$_POST['Direccion'];

$query = "insert into CLIENTE values('".$Nombre."','".$Apellido."','".$DNI."','".$Direccion."',1)";

sqlsrv_query($conn,$query);

echo $query;
?>
