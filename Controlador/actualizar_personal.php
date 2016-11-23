<?php
include '../conexion/conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$query = "update personal set  Nombre='".$nombre."', Apellido='".$apellido."', telefono='".$telefono."' where idpersonal=$id";

sqlsrv_query($conn,$query);

echo $query;
?>
