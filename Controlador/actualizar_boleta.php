<?php
include '../conexion/conexion.php';

$id=$_POST['id'];
$fecha=date('Y-d-m',strtotime($_POST['fecha']));
$cliente=$_POST['cliente'];
$personal=$_POST['personal'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];

$query = "update boleta set  fecha='".$fecha."', IdCliente='".$cliente."', IdPersonal='".$personal."' where N_boleta =$id";
$query2 = "update DETALLE_BOLETA set  IdProducto='".$producto."', cantidad=".$cantidad." where N_boleta =$id";
sqlsrv_query($conn,$query);
sqlsrv_query($conn,$query2);

echo $query;
?>
