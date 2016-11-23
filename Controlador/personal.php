<?php
include '../conexion/conexion.php';

$query = "select IdPersonal,
Nombre,
Apellido,
Telefono
 from personal where estado=1";

$exec = sqlsrv_query($conn,$query);
?>
