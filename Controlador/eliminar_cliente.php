<?php 
include '../conexion/conexion.php';

$id = $_POST['id'];

$query = "update CLIENTE set estado=0 where idcliente=$id";

sqlsrv_query($conn,$query);

?>
