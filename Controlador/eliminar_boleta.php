<?php
include '../conexion/conexion.php';

$id = $_POST['id'];

$query = "update boleta set estado=0 where N_Boleta=$id";

sqlsrv_query($conn,$query);

?>
