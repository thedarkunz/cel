<?php
include '../conexion/conexion.php';


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];

$query = "insert into cliente values('".$nombre."','".$apellido."','".$dni."','".$direccion."',1)";

sqlsrv_query($conn,$query);

echo $query;
?>
