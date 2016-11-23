<?php
include '../conexion/conexion.php';

$id = $_POST['id'];

$query = "update personal set estado=0 where idpersonal=$id";

sqlsrv_query($conn,$query);

?>
