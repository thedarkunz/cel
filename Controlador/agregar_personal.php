<?php
include '../conexion/conexion.php';


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$query = "insert into personal values('".$nombre."','".$apellido."','".$telefono."',1)";

sqlsrv_query($conn,$query);

echo $query;
?>
