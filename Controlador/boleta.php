<?php
include '../conexion/conexion.php';

$query = "select a.N_Boleta,a.Fecha,c.DNI,c.Nombre,c.Apellido,d.Telefono,d.Nombre,
d.Apellido,e.Nombre,e.Modelo,e.S_O,e.Precio_Unitario,b.Cantidad,
(e.Precio_Unitario*b.Cantidad) as Total
from BOLETA a inner join DETALLE_BOLETA b on
a.N_Boleta=b.N_Boleta inner join CLIENTE c on a.IdCliente=c.IdCliente
inner join PERSONAL d on a.IdPersonal=d.IdPersonal
inner join PRODUCTO e on b.IdProducto=e.IdProducto
where a.estado=1";

$exec = sqlsrv_query($conn,$query);

//Cliente

$sql_cliente="select IdCliente,nombre +' '+apellido from Cliente where estado=1";

$exec_cliente=sqlsrv_query($conn,$sql_cliente);

//Personal
$sql_personal="select IdPersonal,nombre+' '+apellido from Personal where estado=1";

$exec_personal=sqlsrv_query($conn,$sql_personal);

//Producto
$sql_producto="select IdProducto,modelo from Producto where estado=1";

$exec_producto=sqlsrv_query($conn,$sql_producto);
?>
