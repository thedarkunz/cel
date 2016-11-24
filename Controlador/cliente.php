<?php
include '../conexion/conexion.php';

$query = "select IdCliente, Nombre, Apellido, DNI, Direccion from CLIENTE where estado=1";  

$exec = sqlsrv_query($conn,$query);
?>
