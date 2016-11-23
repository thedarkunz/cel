<?php
include '../conexion/conexion.php';

$nombre=$_POST['nombre'];
$modelo=$_POST['modelo'];
$so=$_POST['so'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$tecnologia=$_POST['tecnologia'];
$descripcion=$_POST['descripcion'];

$query = "insert into producto values('".$nombre."','".$modelo."','".$so."',".$precio.",
".$stock.",'".$tecnologia."','".$descripcion."',1)";

sqlsrv_query($conn,$query);

//echo $query;
?>
