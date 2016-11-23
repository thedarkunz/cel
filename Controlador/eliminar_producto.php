<?php
include '../conexion/conexion.php';

$id = $_POST['id'];

$query = "update producto set estado=0 where idproducto=$id";

sqlsrv_query($conn,$query);

?>
