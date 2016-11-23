<?php 
include '../conexion/conexion.php';

$id = $_POST['id'];

$query = "update cliente set estado=0 where idcliente=$id";

sqlsrv_query($conn,$query);

?>