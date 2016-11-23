<?php
include '../conexion/conexion.php';

$query = "select IdProducto,
Nombre,
Modelo,
S_O,
Precio_Unitario,
Stock,
tecnologia,
Descripcion
from producto where estado=1";

$exec = sqlsrv_query($conn,$query);
?>
