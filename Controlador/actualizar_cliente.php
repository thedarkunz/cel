<?php
include '../conexion/conexion.php';


$id=$_POST['id'];
$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$DNI=$_POST['dni'];
$Direccion=$_POST['direccion'];

$query = "update CLIENTE set  nombre='".$Nombre."', apellido='".$Apellido."', dni='".$DNI."', direccion='".$Direccion."' where IdCliente=$id";




sqlsrv_query($conn,$query);


?>
