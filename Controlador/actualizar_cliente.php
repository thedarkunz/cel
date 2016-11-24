<?php
include '../conexion/conexion.php';


$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$DNI=$_POST['DNI'];
$Direccion=$_POST['Direccion'];

$query = "update CLIENTE set  Nombre='".$Nombre."', Apellido='".$Apellido."', DNI='".$DNI."', Direccion='".$Direccion."' where IdCliente=$id";




sqlsrv_query($conn,$query);


?>
