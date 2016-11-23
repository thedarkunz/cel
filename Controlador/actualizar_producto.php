<?php
include '../conexion/conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$modelo=$_POST['modelo'];
$so=$_POST['so'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$tecnologia=$_POST['tecnologia'];
$descripcion=$_POST['descripcion'];

$query = "update producto set  Nombre='".$nombre."', Modelo='".$modelo."',
S_O='".$so."', Precio_Unitario=".$precio.",stock=".$stock.",tecnologia='".$tecnologia."',
descripcion='".$descripcion."' where IdProducto=$id";



sqlsrv_query($conn,$query);


?>
