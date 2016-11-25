<?php
include '../conexion/conexion.php';


$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$DNI=$_POST['dni'];
$Direccion=$_POST['direccion'];

$query = "insert into CLIENTE values('".$Nombre."','".$Apellido."','".$DNI."','".$Direccion."',1)";

sqlsrv_query($conn,$query);

echo $query;
?>
