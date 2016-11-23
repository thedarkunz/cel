<?php
include '../conexion/conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];

$query = "update cliente set  Nombre='".$nombre."', Apellido='".$apellido."', DNI='".$dni."', Direccion='".$direccion."' where IdCliente=$id";



sqlsrv_query($conn,$query);


?>
